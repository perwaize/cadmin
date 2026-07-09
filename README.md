# cadmin

org.apache.catalina.realm.JNDIRealm.level = FINE
org.apache.catalina.realm.level = FINE


$searcher = New-Object System.DirectoryServices.DirectorySearcher
$searcher.SearchRoot = New-Object System.DirectoryServices.DirectoryEntry("LDAP://ad-ldap-app.uhc.com/dc=ms,dc=ds,dc=uhc,dc=com")
$searcher.Filter = "(&(objectClass=group)(cn=mid_rxsol_admin_all_env))"
$searcher.PropertiesToLoad.Add("distinguishedName") | Out-Null
$searcher.PropertiesToLoad.Add("member") | Out-Null

$result = $searcher.FindOne()
$result.Properties["distinguishedname"]
$result.Properties["member"]


PS C:\Users\pahmed1> $searcher = New-Object System.DirectoryServices.DirectorySearcher
$searcher.SearchRoot = New-Object System.DirectoryServices.DirectoryEntry("LDAP://ad-ldap-app.uhc.com/dc=ms,dc=ds,dc=uhc,dc=com")
$searcher.Filter = "(&(objectClass=group)(cn=mid_rxsol_admin_all_env))"
$searcher.PropertiesToLoad.Add("distinguishedName") | Out-Null
$searcher.PropertiesToLoad.Add("member") | Out-Null

$result = $searcher.FindOne()
$result.Properties["distinguishedname"]
$result.Properties["member"]

CN=mid_rxsol_admin_all_env,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=aponner2,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=mllorer2,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=snelaku3,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=sishwar1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=dprasa18,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=vyamara1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=mreddy45,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=dsankar5,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=vpothul2,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=kdey8,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=dgilkarw,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=pahmed2,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=gp5,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=mnallam1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=gtedlap1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com

PS C:\Users\pahmed1> 



PS C:\Users\pahmed1> $searcher = New-Object System.DirectoryServices.DirectorySearcher
$searcher.SearchRoot = New-Object System.DirectoryServices.DirectoryEntry("LDAP://ad-ldap-app.uhc.com/dc=ms,dc=ds,dc=uhc,dc=com")
$searcher.Filter = "(&(objectClass=group)(cn=SXC_was_admins))"
$searcher.PropertiesToLoad.Add("distinguishedName") | Out-Null
$searcher.PropertiesToLoad.Add("member") | Out-Null

$result = $searcher.FindOne()
$result.Properties["distinguishedname"]
$result.Properties["member"]

CN=SXC_was_admins,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=aponneri,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=mllorera,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=snelaku1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=sishwary,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=dprasa16,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=vyamarap,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=dsankar4,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=gkuma126,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=kdey1001,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=gp1003,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=mnallami,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=pahmed1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=vpothula,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=akuma249,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=gtedlapa,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com
CN=mreddy18,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com


wasuser@rn000216475:/ebiz/app_logs/tomcat
$ grep -i "hasRole\|GenericPrincipal\|CombinedRealm\|role" ./*
./catalina.2026-07-09.log:09-Jul-2026 10:07:07.084 FINE [main] org.apache.catalina.realm.CombinedRealm.addRealm Add [org.apache.catalina.realm.UserDatabaseRealm] realm, making a total of [1] realms
./catalina.2026-07-09.log:09-Jul-2026 10:07:07.532 FINE [main] org.apache.catalina.realm.CombinedRealm.addRealm Add [org.apache.catalina.realm.JNDIRealm] realm, making a total of [1] realms
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.332 FINER [http-nio-8080-exec-3] org.apache.catalina.realm.CombinedRealm.authenticate Attempting to authenticate user [pahmed1] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.373 FINER [http-nio-8080-exec-3] org.apache.catalina.realm.CombinedRealm.authenticate Authenticated user [pahmed1] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.381 FINER [http-nio-8080-exec-4] org.apache.catalina.authenticator.AuthenticatorBase.invoke We have cached auth type FORM for principal GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.382 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.382 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [mid_rxsol_admin_all_env]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.382 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  mid_rxsol_admin_all_env
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.434 FINER [http-nio-8080-exec-5] org.apache.catalina.authenticator.AuthenticatorBase.invoke We have cached auth type FORM for principal GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.434 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.434 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [mid_rxsol_admin_all_env]
./catalina.2026-07-09.log:09-Jul-2026 10:07:46.434 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  mid_rxsol_admin_all_env
./catalina.2026-07-09.log:09-Jul-2026 11:57:45.309 FINER [http-nio-8080-exec-9] org.apache.catalina.realm.CombinedRealm.authenticate Attempting to authenticate user [pahmed2] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 11:57:45.504 FINER [http-nio-8080-exec-9] org.apache.catalina.realm.CombinedRealm.authenticate Failed to authenticate user [pahmed2] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.044 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.CombinedRealm.authenticate Attempting to authenticate user [pahmed2] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.138 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.CombinedRealm.authenticate Authenticated user [pahmed2] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.144 FINER [http-nio-8080-exec-5] org.apache.catalina.authenticator.AuthenticatorBase.invoke We have cached auth type FORM for principal GenericPrincipal[pahmed2()]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.144 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed2()]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.144 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed2] does NOT have role [mid_rxsol_admin_all_env]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.144 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  mid_rxsol_admin_all_env
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.182 FINER [http-nio-8080-exec-6] org.apache.catalina.authenticator.AuthenticatorBase.invoke We have cached auth type FORM for principal GenericPrincipal[pahmed2()]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.182 FINER [http-nio-8080-exec-6] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed2()]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.182 FINER [http-nio-8080-exec-6] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed2] does NOT have role [mid_rxsol_admin_all_env]
./catalina.2026-07-09.log:09-Jul-2026 11:58:24.182 FINER [http-nio-8080-exec-6] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  mid_rxsol_admin_all_env
./catalina.2026-07-09.log:09-Jul-2026 11:59:12.014 FINER [http-nio-8080-exec-10] org.apache.catalina.realm.CombinedRealm.authenticate Attempting to authenticate user [pahmed2] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 11:59:12.197 FINER [http-nio-8080-exec-10] org.apache.catalina.realm.CombinedRealm.authenticate Failed to authenticate user [pahmed2] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.302 FINER [http-nio-8080-exec-10] org.apache.catalina.realm.CombinedRealm.authenticate Attempting to authenticate user [pahmed1] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.330 FINER [http-nio-8080-exec-10] org.apache.catalina.realm.CombinedRealm.authenticate Authenticated user [pahmed1] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.337 FINER [http-nio-8080-exec-6] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.337 FINER [http-nio-8080-exec-6] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [SXC_was_admins]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.337 FINER [http-nio-8080-exec-6] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  SXC_was_admins
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.383 FINER [http-nio-8080-exec-7] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.383 FINER [http-nio-8080-exec-7] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [SXC_was_admins]
./catalina.2026-07-09.log:09-Jul-2026 12:10:13.383 FINER [http-nio-8080-exec-7] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  SXC_was_admins
./catalina.2026-07-09.log:09-Jul-2026 12:10:15.031 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:15.031 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [SXC_was_admins]
./catalina.2026-07-09.log:09-Jul-2026 12:10:15.031 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  SXC_was_admins
./catalina.2026-07-09.log:09-Jul-2026 12:10:15.061 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:15.061 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [SXC_was_admins]
./catalina.2026-07-09.log:09-Jul-2026 12:10:15.061 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  SXC_was_admins
./catalina.2026-07-09.log:09-Jul-2026 12:10:36.551 FINE [main] org.apache.catalina.realm.CombinedRealm.addRealm Add [org.apache.catalina.realm.UserDatabaseRealm] realm, making a total of [1] realms
./catalina.2026-07-09.log:09-Jul-2026 12:10:37.127 FINE [main] org.apache.catalina.realm.CombinedRealm.addRealm Add [org.apache.catalina.realm.JNDIRealm] realm, making a total of [1] realms
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.171 FINER [http-nio-8080-exec-3] org.apache.catalina.realm.CombinedRealm.authenticate Attempting to authenticate user [pahmed1] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.204 FINER [http-nio-8080-exec-3] org.apache.catalina.realm.CombinedRealm.authenticate Authenticated user [pahmed1] with realm [org.apache.catalina.realm.JNDIRealm]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.211 FINER [http-nio-8080-exec-4] org.apache.catalina.authenticator.AuthenticatorBase.invoke We have cached auth type FORM for principal GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.211 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.211 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [SXC_was_admins]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.211 FINER [http-nio-8080-exec-4] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  SXC_was_admins
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.259 FINER [http-nio-8080-exec-5] org.apache.catalina.authenticator.AuthenticatorBase.invoke We have cached auth type FORM for principal GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.259 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission   Checking roles GenericPrincipal[pahmed1()]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.259 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasRole Username [pahmed1] does NOT have role [SXC_was_admins]
./catalina.2026-07-09.log:09-Jul-2026 12:10:53.259 FINER [http-nio-8080-exec-5] org.apache.catalina.realm.RealmBase.hasResourcePermission No role found:  SXC_was_admins
./localhost.2026-07-09.log:             at org.apache.catalina.realm.CombinedRealm.authenticate(CombinedRealm.java:165)
wasuser@rn000216475:/ebiz/app_logs/tomcat
$

PS C:\Users\pahmed1> 


$de = New-Object System.DirectoryServices.DirectoryEntry(
    "LDAP://ad-ldap-app.uhc.com/dc=ms,dc=ds,dc=uhc,dc=com",
    "wsbindtst@ms.ds.uhc.com",
    "<the bind password from ROOT.xml>"
)
$searcher = New-Object System.DirectoryServices.DirectorySearcher($de)
$searcher.Filter = "(&(objectClass=group)(cn=SXC_was_admins))"
$searcher.PropertiesToLoad.AddRange(@("distinguishedName","member"))
$result = $searcher.FindOne()
$result.Properties["member"]



$de = New-Object System.DirectoryServices.DirectoryEntry(
    "LDAP://ad-ldap-app.uhc.com/dc=ms,dc=ds,dc=uhc,dc=com",
    "wsbindtst@ms.ds.uhc.com",
    "<the bind password from ROOT.xml>"
)
$searcher = New-Object System.DirectoryServices.DirectorySearcher($de)
$searcher.Filter = "(&(objectClass=group)(member=CN=pahmed1,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com))"
$searcher.PropertiesToLoad.Add("cn") | Out-Null
$results = $searcher.FindAll()
$results | ForEach-Object { $_.Properties["cn"] }


org.apache.catalina.realm.JNDIRealm.level = FINEST
org.apache.catalina.realm.JNDIRealm.handlers = 3catalina.org.apache.juli.AsyncFileHandler
