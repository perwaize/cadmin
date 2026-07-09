sed -i 's|CN=SXC_was_admins,CN=Users,DC=ms,DC=ds,DC=uhc,DC=com|SXC_was_admins|g' /ebiz/tomcat/webapps/ROOT/WEB-INF/web.xml
grep -n "role-name" /ebiz/tomcat/webapps/ROOT/WEB-INF/web.xml
