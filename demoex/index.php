<?php
error_reporting(E_ALL);
include_once  ("php/link.php");

if(isset($_REQUEST['pagen'])){
$pageno= $_REQUEST['pagen'];
}
else{
    $pageno=1;
}
$size_page=4;
$offset=($pageno-1)*$size_page;
$ammount_cypher=(mysqli_query($link,"SELECT COUNT(*) FROM requests")); 
$ammount=mysqli_fetch_array($ammount_cypher)[0];
$total_pages=ceil($ammount/$size_page);


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
<?php
if(isset($_REQUEST['login']) && isset( $_REQUEST['pass'])){
    $querry=mysqli_query($link,"SELECT * FROM `users` WHERE users.login='{$_REQUEST['login']}' and users.pass='{$_REQUEST['pass']}'");
    $pelmen=mysqli_fetch_assoc($querry);
    if($pelmen['status']=='admin'){
        header("location:admin.php");
        setcookie('name_ad',$pelmen["name"]);
    }
    else{
        header("location:users.php");
        setcookie('name_us',$pelmen["name"]);
    }
}
?>
    <header>
        <a id="login" href="#" >Вход</a>
        <p id="login_place">Гость</p>
    </header>
    <dialog id="log_window">
    <form action="" method="POST">
      <fieldset>
        <legend>Форма входа</legend>

        <div>
          <label for="login">Логин </label>
          <input id="login" name="login" type="text" required="">
          <span></span>
        </div>
        <div>
          <label for="pass">Пароль </label>
          <input id="pass" name="pass" type="text" required="">
          <span></span>
        </div>
        <div>
          <span></span>
        </div>
        <div><button id='send'>Отправить</button></div>
      </fieldset>
    </form>
        <span></span>
    </dialog>
    <main>
        <div id="card_holder">

       <?
       $res=mysqli_query($link,"SELECT
   	requests.timestamp,
    requests.pet_name,
    requests.img_before_src,
    requests.img_after_src,
    categories.name AS `category_name`
FROM
    requests
JOIN categories ON requests.category_id = categories.id
WHERE
    requests.status = 'Услуга оказана'
LIMIT 4 OFFSET $offset");

       $array=mysqli_fetch_assoc($res);
       while($array){
        $time=$array["timestamp"];
        $pet_name=$array["pet_name"];
        $category=$array["category_name"];
        $img_before='source/медиа/Media/images/животные/'.$array["img_before_src"];
        $img_after='source/медиа/Media/images/животные/'.$array["img_after_src"];

        echo("<div class='card'>
        <div class='slide'>
            <img src='$img_before'class='img_b' width=300px height=300px alt=''>
            <img src='$img_after' class='img_a' width=300px height=300px alt=''>
        </div>
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
        <a href="?pagen=1">первая</a>
        <a href="<?php if($pageno<=1){echo '#';}else{
            echo"?pagen=".($pageno-1);}?>">назад</a>
        <a href="<?php
        if($pageno>=$total_pages){
            echo('#');
        }else{
            echo"?pagen=".($pageno+1);
        }
        ?>">след</a>
        <a href="?pagen=<?php echo $total_pages;?>">последняя</a>
        <p>выполнено заказов<span id="requests_sum"></span></p>
    </main>

    <script src="scripts/scripts.js"></script>
</body>
</html>