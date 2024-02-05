<?php

$HOST = "127.0.0.1";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "note";
$DB_PORT = 3306;

$conn = new mysqli($HOST,$DB_USER,$DB_PASS,$DB_NAME,$DB_PORT);

if($conn->error){
    echo $conn->error;
}else{
    // echo "ok";
}


?>