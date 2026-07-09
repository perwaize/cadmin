import javax.naming.*;
import javax.naming.directory.*;
import java.util.Hashtable;

/**
 * Standalone test that replicates exactly what Tomcat's JNDIRealm does
 * for the role search step, using plain JNDI (the same API JNDIRealm
 * itself uses under the hood). Run this ON THE TOMCAT HOST to rule out
 * network/firewall/DNS differences between it and your workstation.
 *
 * Compile:  javac LdapRoleTest.java
 * Run:      java LdapRoleTest
 *
 * Edit the CONFIG block below to match ROOT.xml before running.
 */
public class LdapRoleTest {

    // ── Match these to your ROOT.xml Realm config ──────────────────────
    static final String LDAP_URL        = "ldap://ad-ldap-app.uhc.com:389";
    static final String BIND_DN         = "cn=wsbindtst,CN=Users,dc=ms,dc=ds,dc=uhc,dc=com";
    static final String BIND_PASSWORD   = "PUT_THE_BIND_PASSWORD_HERE";
    static final String ROLE_BASE       = "CN=Users,dc=ms,dc=ds,dc=uhc,dc=com";
    static final String USER_DN         = "CN=pahmed1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com";
    static final String ROLE_SEARCH     = "(&(objectClass=group)(member=" + USER_DN + "))";
    static final String REFERRALS       = "follow"; // matches referrals="follow" in ROOT.xml
    // ─────────────────────────────────────────────────────────────────

    public static void main(String[] args) {
        Hashtable<String, Object> env = new Hashtable<>();
        env.put(Context.INITIAL_CONTEXT_FACTORY, "com.sun.jndi.ldap.LdapCtxFactory");
        env.put(Context.PROVIDER_URL, LDAP_URL);
        env.put(Context.SECURITY_AUTHENTICATION, "simple");
        env.put(Context.SECURITY_PRINCIPAL, BIND_DN);
        env.put(Context.SECURITY_CREDENTIALS, BIND_PASSWORD);
        env.put(Context.REFERRAL, REFERRALS);

        System.out.println("Connecting to " + LDAP_URL + " as " + BIND_DN + " ...");

        try {
            DirContext ctx = new InitialDirContext(env);
            System.out.println("Bind succeeded.\n");

            SearchControls controls = new SearchControls();
            controls.setSearchScope(SearchControls.SUBTREE_SCOPE);
            controls.setReturningAttributes(new String[]{"cn"});

            System.out.println("Searching base: " + ROLE_BASE);
            System.out.println("Filter:         " + ROLE_SEARCH + "\n");

            NamingEnumeration<SearchResult> results = ctx.search(ROLE_BASE, ROLE_SEARCH, controls);

            int count = 0;
            while (results.hasMore()) {
                SearchResult r = results.next();
                Attribute cn = r.getAttributes().get("cn");
                System.out.println("  MATCH: " + r.getNameInNamespace() + "  cn=" + (cn != null ? cn.get() : "?"));
                count++;
            }
            results.close();

            System.out.println("\nTotal matches: " + count);
            if (count == 0) {
                System.out.println("=> Zero results. Same symptom as Tomcat itself.");
                System.out.println("   This means it's a network/firewall/DNS or LDAP-protocol-level");
                System.out.println("   difference between this host and your workstation, NOT a");
                System.out.println("   ROOT.xml config problem, since we just replicated its exact query.");
            } else {
                System.out.println("=> Got results here but not in Tomcat. That's a strong signal");
                System.out.println("   something is different about Tomcat's own JVM/network context");
                System.out.println("   (e.g. a different outbound interface, proxy, or JVM trust/DNS config).");
            }

            ctx.close();

        } catch (AuthenticationException e) {
            System.out.println("BIND FAILED: bad bind DN or password. Check BIND_DN/BIND_PASSWORD above.");
            e.printStackTrace();
        } catch (NamingException e) {
            System.out.println("LDAP OPERATION FAILED: " + e.getClass().getName());
            System.out.println("Message: " + e.getMessage());
            e.printStackTrace();
        }
    }
}
