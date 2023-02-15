
<?php
session_start();
// $_SESSION['num1']=2;
// $_SESSION['num2']=2;

// if(!isset($_COOKIE['time'])){
//     setcookie('time',time());
// }
// else{
    
//     echo(time()-$_COOKIE['time']);
    
// }

// if (!isset($_SESSION['counter'])) {
//     $_SESSION['counter'] = 1;
// }else if($_SESSION['counter']<10) {
//     $_SESSION['counter']++;
// }
// else{
//     unset($_SESSION['counter']);
//     $_SESSION['counter'] = 1;

// }

// echo $_SESSION['counter'];
// print_r($_REQUEST);
// if(!empty($_REQUEST)){
// $_SESSION['req']=$_REQUEST;
// echo('<a href="support.php">aaaaaa</a>');
// }
// 

// echo(file_get_contents('form.txt'));
// file_put_contents('form.txt',pow((int)(file_get_contents('form.txt')),2));
// echo(file_get_contents('form.txt'));

// file_put_contents('form.txt',(int)(file_get_contents('form.txt'))+1);
// echo(file_get_contents('form.txt'));
// $arr=['1.txt','2.txt','3.txt'];
//     file_put_contents('new.txt','');
// foreach($arr as $row){
// file_put_contents('new.txt',file_get_contents('new.txt').file_get_contents($row));
// }
// echo(file_get_contents('new.txt'));
// ?>

<!-- <a href="support.php">aaaaaa</a> -->
<!-- <a href="support.php"><input type="button"  value="logout"></a> -->

<!-- <form action="" method="POST">
    <input type="text" name="name" id="">
    <input type="text" name="surname" id="">
    <input type="number" name="age" id="">
    <input type="number" name="salary" id="">
    <input type="submit" value="send">
</form> -->

<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
        <?php 
        include('header.php');
        include('sidebar.php');
        ?>
		
		<main>
			content
		</main>
        <?php
        include('footer.php');
        ?>
	</body>
</html>