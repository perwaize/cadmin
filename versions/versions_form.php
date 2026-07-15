<?php
$data = include 'versions_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Latest Versions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 40px;
}
label { font-weight: bold; display: block; margin-top: 15px; }
input[type="text"] { width: 400px; padding: 6px; }
button { margin-top: 20px; padding: 10px 20px; font-size: 16px; }
</style>
</head>
<body>

<center><h1>Latest Versions</h1></center>
<h2><p id="currentDate"></p></h2>

<script>
const options = { year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById("currentDate").textContent =
    new Date().toLocaleDateString('en-US', options);
</script>

<form action="versions_update.php" method="POST">

<h3>IBM WebSphere</h3>
<label><a href="https://www.ibm.com/support/pages/fix-list-ibm-websphere-application-server-v85" target="_blank">WebSphere v8.5.5.x</a></label>
<input type="text" name="was855" value="<?= $data['was855'] ?>">

<label><a href="https://www.ibm.com/support/pages/fix-list-ibm-websphere-application-server-traditional-v9-0" target="_blank">WebSphere v9.0.5.x</a></label>
<input type="text" name="was905" value="<?= $data['was905'] ?>">

<h3>Red Hat Apache HTTP</h3>
<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=core.service.apachehttp&version=8.1&productChanged=yes" target="_blank">Apache HTTP v2.4.x SP</a></label>
<input type="text" name="rh_http" value="<?= $data['rh_http'] ?>">

<h3>Red Hat JBoss Web Server</h3>
<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=patches&product=webserver&version=5.7" target="_blank">JWS 5.7</a></label>
<input type="text" name="jws57" value="<?= $data['jws57'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=webserver&downloadType=patches&version=5.8" target="_blank">JWS 5.8</a></label>
<input type="text" name="jws58" value="<?= $data['jws58'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=webserver&downloadType=patches&version=6.1" target="_blank">JWS 6.1</a></label>
<input type="text" name="jws61" value="<?= $data['jws61'] ?>">

<h3>Red Hat OpenJDK</h3>
<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">OpenJDK 1.8</a></label>
<input type="text" name="rh_jdk8" value="<?= $data['rh_jdk8'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">OpenJDK 11</a></label>
<input type="text" name="rh_jdk11" value="<?= $data['rh_jdk11'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">OpenJDK 17</a></label>
<input type="text" name="rh_jdk17" value="<?= $data['rh_jdk17'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?product=core.service.openjdk&downloadType=distributions&version=" target="_blank">OpenJDK 21</a></label>
<input type="text" name="rh_jdk21" value="<?= $data['rh_jdk21'] ?>">

<h3>Red Hat JBoss EAP</h3>
<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=appplatform&version=7.4" target="_blank">v7.4</a></label>
<input type="text" name="eap74" value="<?= $data['eap74'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=appplatform&version=8.0" target="_blank">v8.0</a></label>
<input type="text" name="eap80" value="<?= $data['eap80'] ?>">

<label><a href="https://access.redhat.com/jbossnetwork/restricted/listSoftware.html?downloadType=distributions&product=appplatform&version=8.1" target="_blank">v8.1</a></label>
<input type="text" name="eap81" value="<?= $data['eap81'] ?>">

<h3>Apache Tomcat (Upstream)</h3>
<label><a href="https://tomcat.apache.org/download-90.cgi" target="_blank">Tomcat 9</a></label>
<input type="text" name="tc9" value="<?= $data['tc9'] ?>">

<label><a href="https://tomcat.apache.org/download-10.cgi" target="_blank">Tomcat 10</a></label>
<input type="text" name="tc10" value="<?= $data['tc10'] ?>">

<label><a href="https://tomcat.apache.org/download-11.cgi" target="_blank">Tomcat 11</a></label>
<input type="text" name="tc11" value="<?= $data['tc11'] ?>">

<h3>Apache HTTP Server</h3>
<label><a href="https://httpd.apache.org/download.cgi" target="_blank">Apache HTTPD</a></label>
<input type="text" name="httpd" value="<?= $data['httpd'] ?>">

<h3>Adoptium OpenJDK</h3>
<label><a href="https://adoptium.net/temurin/releases/?version=8&os=any&arch=any&mode=filter" target="_blank">OpenJDK 8</a></label>
<input type="text" name="adop8" value="<?= $data['adop8'] ?>">

<label><a href="https://adoptium.net/temurin/releases/?version=11&os=any&arch=any&mode=filter" target="_blank">OpenJDK 11</a></label>
<input type="text" name="adop11" value="<?= $data['adop11'] ?>">

<label><a href="https://adoptium.net/temurin/releases/?version=17&os=linux&arch=x64&mode=filter" target="_blank">OpenJDK 17</a></label>
<input type="text" name="adop17" value="<?= $data['adop17'] ?>">

<label><a href="https://adoptium.net/temurin/releases/?version=21&os=linux&arch=x64&mode=filter" target="_blank">OpenJDK 21</a></label>
<input type="text" name="adop21" value="<?= $data['adop21'] ?>">

<label><a href="https://adoptium.net/temurin/releases/?version=25&os=linux&arch=x64&mode=filter" target="_blank">OpenJDK 25</a></label>
<input type="text" name="adop25" value="<?= $data['adop25'] ?>">

<br><br>
<button type="submit">Save Updates</button>

</form>

</body>
</html>