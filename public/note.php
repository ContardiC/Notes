<?php
session_start();
include '../config/db_connect.php';
$id = $_SESSION['id'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO notes(user_id, title, content)
                VALUES($id,'$title','$content')";
    if($conn->query($sql)===TRUE){
        echo "Nota salvata";
    }
}
$sql = "SELECT username FROM users WHERE id=$id";

$res=$conn->query($sql);
$row=$res->fetch_assoc();
$username=$row['username'];


echo "Ciao, $username <br>";
include 'all_notes.php';
echo "<br>";
?>
<form method="post" action="note.php">
    <input type="text" name="title" maxlength="256"><br>
    <textarea name="content"></textarea><br>
    <input type="submit" value="Salva nota">
</form>
