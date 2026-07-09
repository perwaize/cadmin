<?xml version="1.0" encoding="UTF-8"?>
<!--
  Place this file at:
    $CATALINA_BASE/conf/Catalina/localhost/ROOT.xml

  LDAP values below were translated from the WildFly/JBoss Elytron config
  in standalone-full-ha.xml (ldap-dir-context / ldap-realm). Source mapping:
    - connectionURL     <- dir-context url
    - connectionName    <- dir-context principal
    - userBase          <- identity-mapping search-base-dn
    - userSearch        <- rdn-identifier (sAMAccountName)
    - referrals         <- referral-mode="follow"

  Role resolution uses userRoleAttribute="memberOf" (AD's built-in
  attribute listing a user's direct group memberships) rather than a
  separate roleBase/roleSearch query — see the explanation further below
  for why that changed.

  ONE VALUE COULD NOT BE CARRIED OVER: the LDAP bind password. JBoss stores
  it encrypted in a credential store (Jboss_EAP_Store.jceks, alias
  ldap_whtst_pwd) rather than in plaintext in the config file, so it isn't
  recoverable from standalone-full-ha.xml. Replace connectionPassword below
  with the real value from wherever that credential store's secret is
  documented/managed for your team.

  Access group: SXC_was_admins — this must also match the
  <role-name> in the app's WEB-INF/web.xml (already updated to match).
-->
<Context>

    <Realm className="org.apache.catalina.realm.LockOutRealm">
        <Realm className="org.apache.catalina.realm.JNDIRealm"
               connectionURL="ldap://ad-ldap-app.uhc.com:389"
               connectionName="cn=wsbindtst,CN=Users,dc=ms,dc=ds,dc=uhc,dc=com"
               connectionPassword="CHANGE_ME"
               referrals="follow"
               userBase="CN=Users,dc=ms,dc=ds,dc=uhc,dc=com"
               userSearch="(sAMAccountName={0})"
               userSubtree="true"
               userRoleAttribute="memberOf"
        />
    </Realm>

</Context>

<!--
  Why this uses userRoleAttribute instead of roleBase/roleSearch:

  A standalone JNDI test run directly on this host (same bind account,
  same filter JNDIRealm itself would construct) correctly found
  SXC_was_admins as a DIRECT match for pahmed1 — confirming the LDAP
  server, network path, bind account permissions, and group data were
  never the problem. Despite that, JNDIRealm's own roleBase/roleSearch
  (with roleNested="true") consistently resolved zero roles for the same
  user, on two different groups, across multiple attempts.

  roleNested performs recursive group-of-groups resolution internally
  (not a single query), which has a known history of silently failing —
  returning nothing rather than an error — if it hits any snag walking
  that tree. Since SXC_was_admins is a direct (non-nested) membership,
  it doesn't need that recursive machinery at all.

  userRoleAttribute="memberOf" instead reads AD's built-in memberOf
  attribute directly off the user object that was already retrieved
  during the (always-successful) user search step — no second search,
  no recursion, no roleNested code path.

  Trade-off: memberOf only lists an object's DIRECT group memberships,
  not transitive/nested ones. If a future required group is only granted
  via nested membership (a group-within-a-group) rather than direct
  membership, this won't resolve it — worth keeping in mind if a new
  group is added later and this same symptom reappears.
-->

<!--
  Secrets management note:
  Hardcoding connectionPassword above still works but isn't ideal even
  outside the WAR, since this file may itself be checked into a config-mgmt
  repo. On Tomcat 10/11 you can enable property replacement in
  conf/catalina.properties (org.apache.tomcat.util.digester.PROPERTY_SOURCE)
  and reference an environment variable instead, e.g.:
    connectionPassword="${LDAP_BIND_PW}"
  with LDAP_BIND_PW set in the environment the Tomcat service runs under.
  This mirrors what JBoss was doing with its credential store — same goal,
  Tomcat-native mechanism.
-->
