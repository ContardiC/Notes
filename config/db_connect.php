<?php
$HOST = "127.0.0.1";
$USER = "root";
$PASS = "";
$DB_NAME = "note";
$PORT = 3306;

$dbc = new mysqli($HOST,$USER,$PASS,$DB_NAME,$PORT);

if($dbc->connect_error){
    echo $dbc->connect_error;
}else{
    //echo "ok";
}


