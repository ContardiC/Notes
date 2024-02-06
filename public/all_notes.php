<?php
include '../config/db_connect.php';
$id = $_SESSION['id'];
$sql = "SELECT n.title as title, n.content as content , c.name as name
        FROM notes as n, users as u, categories as c
        WHERE n.user_id=u.id AND n.category_id = c.id";

$res = $conn->query($sql);
if($res->num_rows>0){
    $i=0;
    while($row=$res->fetch_assoc()){
        echo $i ."- {$row['title']} - {$row['content']} - {$row['name']} . <br>";
        $i++;
    }
}else{
    echo "Non hai note salvate.";
}

?>