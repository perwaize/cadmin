wasuser@rn000216475:/ebiz/tomcat/bin
$ grep -n "role-name" /ebiz/tomcat/webapps/ROOT/WEB-INF/web.xml
31:         <role-name>CN=SXC_was_admins,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com</role-name>
44:    <!-- Must match the role-name referenced in the auth-constraint above,
48:     <role-name>CN=SXC_was_admins,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com</role-name>
wasuser@rn000216475:/ebiz/tomcat/bin
$
wasuser@rn000216475:/ebiz/tomcat/bin
$ cat /ebiz/tomcat/conf/Catalina/localhost/ROOT.xml | grep -A 15 "JNDIRealm"
        <Realm className="org.apache.catalina.realm.JNDIRealm"
               connectionURL="ldap://ad-ldap-app.uhc.com:389"
               connectionName="cn=wsbindtst,CN=Users,dc=ms,dc=ds,dc=uhc,dc=com"
               connectionPassword="TestDrive26!"
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
--
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
wasuser@rn000216475:/ebiz/tomcat/bin
$
wasuser@rn000216475:/ebiz/tomcat/bin
$ ps -eo pid,lstart,cmd | grep -i catalina
 220045 Thu Jul  9 14:45:48 2026 /ebiz/java/bin/java -Djava.util.logging.config.file=/ebiz/tomcat/conf/logging.properties -Djava.util.logging.manager=org.apache.juli.ClassLoaderLogManager -Djdk.tls.ephemeralDHKeySize=2048 -Djava.protocol.handler.pkgs=org.apache.catalina.webresources -Dsun.io.useCanonCaches=false -Dorg.apache.catalina.security.SecurityListener.UMASK=0022 --add-opens=java.base/java.lang=ALL-UNNAMED --add-opens=java.base/java.lang.reflect=ALL-UNNAMED --add-opens=java.base/java.io=ALL-UNNAMED --add-opens=java.base/java.util=ALL-UNNAMED --add-opens=java.base/java.util.concurrent=ALL-UNNAMED --add-opens=java.rmi/sun.rmi.transport=ALL-UNNAMED -Xms4096M -Xmx4096M -Duser.timezone=America/Chicago -XX:+UseParallelGC -XX:+DisableExplicitGC -XX:+PrintGC -Dsun.rmi.dgc.client.gcInterval=3600000 -Dsun.rmi.dgc.server.gcInterval=3600000 -XX:+PrintGCDetails -verbose:gc -Xlog:gc:/ebiz/app_logs/tomcat/vgc.log -XX:+HeapDumpOnOutOfMemoryError -XX:HeapDumpPath=/ebiz/dumps/OOMheapdump-20260709-144549.hprof -classpath /ebiz/tomcat/bin/bootstrap.jar:/ebiz/tomcat/bin/tomcat-juli.jar -Dcatalina.base=/ebiz/tomcat -Dcatalina.home=/ebiz/tomcat -Djava.io.tmpdir=/ebiz/tomcat/temp org.apache.catalina.startup.Bootstrap start
 220150 Thu Jul  9 14:49:38 2026 grep --color=auto -i catalina
wasuser@rn000216475:/ebiz/tomcat/bin
$
