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

PS C:\Users\pahmed1> 
