<?php
$dbhost = getenv("POSTGRESQL_SERVICE_HOST");
$dbport = getenv("POSTGRESQL_SERVICE_PORT");
$dbuser = getenv("POSTGRESQL_USER");
$dbpwd = getenv("POSTGRESQL_PASSWORD");
$dbname = getenv("POSTGRESQL_DATABASE");

$connection = mysql_connect($dbhost, $dbuser, $dbpwd);
if (!$connection) {
  echo "Could not connect to database";
} else {
  echo "Connected to database.<br>";
}
$dbconnection = mysql_select_db($dbname);
$query = "SELECT * from noun";
$rs = mysql_query($query);
while ($row = mysql_fetch_assoc($rs)) {
  echo $row['id'] . " " . $row['string'] . "\n";
}
mysql_close();
?>
?>
