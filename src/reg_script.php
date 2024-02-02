<?php
include '../config/db_connect.php';

if(!empty($_POST['username'])){
    $username = $_POST['username'];
}else{
    //TODO: meglio fare questi controlli con js
    echo "Inserisci lo username";
    exit;
}
if(!empty($_POST['email'])){
    $email = $_POST['email'];
}else{
    //TODO: meglio fare questi controlli con js
    echo "Inserisci email";
    exit;
}
if(!empty($_POST['password'])){
    $password = $_POST['password'];
}else{
    //TODO: meglio fare questi controlli con js
    echo "Inserisci password";
    exit;
}

$password = md5($password);

$sql = "INSERT INTO users(username, email, password) 
VALUES('$username','$email','$password')";
if($dbc->query($sql) === TRUE){
    echo "Utente inserito con successo";
}else{
    echo $dbc->error;
}

