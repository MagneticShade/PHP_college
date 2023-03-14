<?
 require_once("link.php");
 $querry=mysqli_query($link,"SELECT COUNT (*) FROM `requests` WHERE `requests.status`=3");
 $requests_all=mysqli_fetch_array($querry);
 echo($requests_all[0]);
?>