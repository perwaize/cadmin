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
