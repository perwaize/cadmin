<?xml version="1.0" encoding="UTF-8"?>
<!--
  Place this file at:
    $CATALINA_BASE/conf/Catalina/localhost/ROOT.xml

  This uses a CUSTOM Realm (com.orx.realm.LdapMemberRealm) instead of
  Tomcat's built-in JNDIRealm. Stock JNDIRealm was tried extensively —
  roleBase/roleSearch (with and without roleNested), and
  userRoleAttribute="memberOf" — and consistently resolved zero roles for
  users despite a standalone JNDI test (run from this same host, with this
  same service account) correctly finding the group membership every time.
  Authentication (the password check) always worked; only role resolution
  failed, across every JNDIRealm configuration tried.

  LdapMemberRealm re-implements both steps using the exact JNDI logic
  already proven to work in that standalone test, so it isn't relying on
  whatever is going wrong inside JNDIRealm's internals in this environment.

  BEFORE THIS WILL WORK: ldap-member-realm.jar (built from the provided
  source) must be placed in $CATALINA_HOME/lib and Tomcat restarted so the
  class is on the classpath. See the build instructions provided alongside
  this file.

  connectionPassword is set below — treat this file accordingly (same
  handling as before: consider externalizing via
  org.apache.tomcat.util.digester.PROPERTY_SOURCE and an environment
  variable rather than a hardcoded value long-term).
-->
<Context>

    <Realm className="org.apache.catalina.realm.LockOutRealm">
        <Realm className="com.orx.realm.LdapMemberRealm"
               connectionURL="ldap://ad-ldap-app.uhc.com:389"
               connectionName="cn=wsbindtst,CN=Users,dc=ms,dc=ds,dc=uhc,dc=com"
               connectionPassword="TestDrive26!"
               referrals="follow"
               userBase="CN=Users,dc=ms,dc=ds,dc=uhc,dc=com"
               userSearch="(sAMAccountName={0})"
               roleBase="CN=Users,dc=ms,dc=ds,dc=uhc,dc=com"
               roleSearchFilter="(&amp;(objectClass=group)(member={0}))"
               roleNameAttribute="cn"
        />
    </Realm>

</Context>
