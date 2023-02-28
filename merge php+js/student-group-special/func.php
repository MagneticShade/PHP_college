<?php
error_reporting(E_ALL);

require_once('link.php');

$query = mysqli_query($link, "SELECT * FROM `".$_GET['key']."`");
while($result = mysqli_fetch_assoc($query)){
  echo "<option>{$result['name']}</option>";
}
