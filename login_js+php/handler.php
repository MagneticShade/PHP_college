<?php
$link=mysqli_connect(hostname:'localhost',username:'root',database:'reg');
if(mysqli_connect_errno()){
    die("popup" . mysqli_connect_errno());
}
$querry=mysqli_query($link,"SELECT * FROM login WHERE login.login='{$_REQUEST['login']}' and login.password='{$_REQUEST['pass']}'");
$pelmen=mysqli_fetch_assoc($querry);
echo($pelmen['role']);
?>