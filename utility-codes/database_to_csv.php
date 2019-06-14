<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "makeapi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "SELECT * FROM users";
$res = $conn->query($sql);

if($res->num_rows > 0)
{
    $csv = fopen("test.csv", "w");
    $arr = array();
    while($row = $res->fetch_assoc()){
        foreach($row as $key => $value){
            array_push($arr, $value);
        }
    }

    fputcsv($csv, $arr);
}

fclose($csv);
$conn->close();

