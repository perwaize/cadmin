grep -n "role-name" /ebiz/tomcat/webapps/ROOT/WEB-INF/web.xml

cat /ebiz/tomcat/conf/Catalina/localhost/ROOT.xml | grep -A 15 "JNDIRealm"

ps -eo pid,lstart,cmd | grep -i catalina
