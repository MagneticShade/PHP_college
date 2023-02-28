<?php
include("link.php");
echo ($_GET['key']);
$query=mysqli_query($link,"SELECT * from `".$_GET['key']."`");

while($temp=mysqli_fetch_assoc($query)){
    echo ("<option>". $temp['name'] ."</option>");
}
?>