<?php
session_start();
include '../config/db_connect.php';
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

$sql = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE '$password'";
$res = $dbc->query($sql);
if($res->num_rows>0){
    $row = $res->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    echo $_SESSION['id'];
}else{
    echo "Credenziali errate";
    // TODO: gestire caso in cui email non presente quindi utente non presente
}
