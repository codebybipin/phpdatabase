<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    if ($result = $mysqli->query("SELECT name FROM user LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);
    printf("Connected to the database");
    /* free result set */
    $result->close();
}
   printf("Outside of if statement"); 
}
$connection->close();
?>
