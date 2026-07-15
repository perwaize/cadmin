<?php
// Save values to versions_data.php
$dataFile = "<?php\nreturn " . var_export($_POST, true) . ";";
file_put_contents('versions_data.php', $dataFile);

function v($name) {
    return htmlspecialchars(trim($_POST[$name] ?? ''));
}

// Collect versions
$was855 = v('was855');
$was905 = v('was905');

$rh_http = v('rh_http');

$jws57 = v('jws57');
$jws58 = v('jws58');
$jws61 = v('jws61');

$rh_jdk8  = v('rh_jdk8');
$rh_jdk11 = v('rh_jdk11');
$rh_jdk17 = v('rh_jdk17');
$rh_jdk21 = v('rh_jdk21');

$eap74 = v('eap74');
$eap80 = v('eap80');
$eap81 = v('eap81');

$tc9  = v('tc9');
$tc10 = v('tc10');
$tc11 = v('tc11');

$httpd = v('httpd');

$adop8  = v('adop8');
$adop11 = v('adop11');
$adop17 = v('adop17');
$adop21 = v('adop21');
$adop25 = v('adop25');

$html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<title>Latest Versions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body { font-family: Arial, Helvetica, sans-serif; }
</style>
</head>
<body>

<center><h1>Latest Versions</h1></center>
<h2><p><?php echo date("F j, Y"); ?></p></h2>

<h4>
IBM WebSphere v$was855 <a href="https://www.ibm.com/support/pages/fix-list-ibm-websphere-application-server-v85" target="_blank">Download</a>
<br>
IBM WebSphere v$was905 <a href="https://www.ibm.com/support/pages/fix-list-ibm-websphere-application-server-traditional-v9-0" target="_blank">Download</a>
<br>
<br>
Red Hat Apache HTTP v$rh_http <a href="https://redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=core.service.apachehttp&version=8.1&productChanged=yes" target="_blank">Download</a>
<br><br>

Red Hat JBoss Web Server - Version 5.7 SP8 - $jws57 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=patches&product=webserver&version=5.7" target="_blank">Download</a>
<br>
Red Hat JBoss Web Server - Version 5.8 SP6 - $jws58 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=webserver&downloadType=patches&version=5.8" target="_blank">Download</a>
<br>
Red Hat JBoss Web Server - Version 6.1 SP3 - $jws61 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=webserver&downloadType=patches&version=6.1" target="_blank">Download</a>
<br><br>

Red Hat OpenJDK v$rh_jdk8 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">Download</a>
<br>
Red Hat OpenJDK v$rh_jdk11 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">Download</a>
<br>
Red Hat OpenJDK v$rh_jdk17 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">Download</a>
<br>
Red Hat OpenJDK v$rh_jdk21 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">Download</a>
<br><br>

Red Hat JBoss EAP v7.4 $eap74 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=appplatform&version=7.4" target="_blank">Download</a>
<br>
Red Hat JBoss EAP v8.0 $eap80 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=appplatform&version=8.0" target="_blank">Download</a>
<br>
Red Hat JBoss EAP v8.1 $eap81 <a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=appplatform&version=8.1" target="_blank">Download</a>
<br><br>

Apache Tomcat $tc9 <a href="https://tomcat.apache.org/download-90.cgi" target="_blank">Download</a>
<br>
Apache Tomcat $tc10 <a href="https://tomcat.apache.org/download-10.cgi" target="_blank">Download</a>
<br>
Apache Tomcat $tc11 <a href="https://tomcat.apache.org/download-11.cgi" target="_blank">Download</a>
<br><br>

Apache HTTP $httpd <a href="https://httpd.apache.org/download.cgi" target="_blank">Download</a>
<br><br>

OpenJDK $adop8 <a href="https://adoptium.net/temurin/releases/?version=8&os=any&arch=any&mode=filter" target="_blank">Download</a>
<br>
OpenJDK $adop11 <a href="https://adoptium.net/temurin/releases/?version=11&os=any&arch=any&mode=filter" target="_blank">Download</a>
<br>
OpenJDK $adop17 <a href="https://adoptium.net/temurin/releases/?version=17&os=linux&arch=x64&mode=filter" target="_blank">Download</a>
<br>
OpenJDK $adop21 <a href="https://adoptium.net/temurin/releases/?version=21&os=linux&arch=x64&mode=filter" target="_blank">Download</a>
<br>
OpenJDK $adop25 <a href="https://adoptium.net/temurin/releases/?version=25&os=linux&arch=x64&mode=filter" target="_blank">Download</a>

</h4>

</body>
</html>
HTML;

// WRITE TO versions.php
file_put_contents("versions.php", $html);

echo "<h2>versions.php updated successfully!</h2>";
echo "<a href='http://ibmrepo.optum.com/versions.php' target='_blank'>Open Versions Page</a><br>";
echo "<a href='versions_form.php'>Return to Form</a>";



?>