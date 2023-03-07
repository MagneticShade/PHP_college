<?php
error_reporting(E_ALL);
include_once("php/link.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="">Вход</a>
    </header>
    <main>
        <div id="card_holder">

       <?
       $res=mysqli_query($link,'SELECT
   	requests.timestamp,
    requests.pet_name,
    requests.img_before_src,
    requests.img_after_src,
    categories.name AS `category_name`
FROM
    requests
JOIN categories ON requests.category_id = categories.id
WHERE
    requests.status = "Услуга оказана"
LIMIT 4');

       $array=mysqli_fetch_assoc($res);
       while($array){
        $time=$array["timestamp"];
        $pet_name=$array["pet_name"];
        $category=$array["category_name"];
        $img_before='source/медиа/Media/images/животные/'.$array["img_before_src"];
        $img_after='source/медиа/Media/images/животные/'.$array["img_after_src"];

        echo("<div class='card'>
        <img src='$img_before' alt=''>
        <img src='$img_after' alt=''>
        <div class='description'>
            <h2 class='time'>$time</h2>
            <h2 class='name'>$pet_name</h2>
            <h2 class='cat'>$category</h2>
        </div>
    </div>");
    $array=mysqli_fetch_assoc($res);
       }
       ?>
        
    
        </div>
    </main>
    <script src="scripts/scripts.js"></script>
</body>
</html>