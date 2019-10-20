<?php

//    $user_name = "root";
//    $password = "password";
//    $database = "stb895";
//    $server = "localhost";
//
//    $db_handle = mysqli_connect($server, $user_name, $password);
//    print "Connected <br>";
//
//    $db_found = mysqli_select_db($db_handle, $database);
//
//    if($db_found) {
//        print "Database found";
//    } else {
//        print "Database hasn't been found";
//    }

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$password = "password";
$dbname = "darren";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
} catch (PDOException $exception) {
    echo "Connection Failed: " . $exception->getMessage();
}

$query = $dbh->query("SELECT * FROM students");
$query->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $query->fetch()) {
    echo $row["first_name"];
}