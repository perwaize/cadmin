$ /ebiz/scripts/jdk-21.0.11+10/bin/javac -cp "/ebiz/tomcat/lib/*" -d classes src/com/orx/realm/LdapMemberRealm.java
src/com/orx/realm/LdapMemberRealm.java:20: error: package org.apache.juli.logging does not exist
import org.apache.juli.logging.Log;
                              ^
src/com/orx/realm/LdapMemberRealm.java:21: error: package org.apache.juli.logging does not exist
import org.apache.juli.logging.LogFactory;
                              ^
src/com/orx/realm/LdapMemberRealm.java:45: error: cannot find symbol
    private static final Log log = LogFactory.getLog(LdapMemberRealm.class);
                         ^
  symbol:   class Log
  location: class LdapMemberRealm
src/com/orx/realm/LdapMemberRealm.java:45: error: cannot find symbol
    private static final Log log = LogFactory.getLog(LdapMemberRealm.class);
                                   ^
  symbol:   variable LogFactory
  location: class LdapMemberRealm
src/com/orx/realm/LdapMemberRealm.java:68: error: method does not override or implement a method from a supertype
    @Override
    ^
Note: src/com/orx/realm/LdapMemberRealm.java uses or overrides a deprecated API.
Note: Recompile with -Xlint:deprecation for details.
5 errors
wasuser@rn000216475:/wasnas/tmp/mdw
