<?php 
include("link.php");

$res=mysqli_query($link,"SELECT * FROM test" );
// $res=mysqli_query($link,"SELECT goods.name, tools.name as furniture FROM  goods LEFT JOIN tools ON goods.id=tools.id" );

// mysqli_query($link,"INSERT INTO `test`(name,age,salary) VALUES('user10','40',3000)");
// $querry=mysqli_fetch_assoc($res);

// while($querry){
// print_r($querry);
//     $querry=mysqli_fetch_assoc($res);
//     echo('<br>');
// }


// print_r(mysqli_fetch_all($res));
// echo('<br>');


// foreach($res as $one){
//     var_dump(($one));
//     echo('<br>');
// }
// echo('<br>');

// mysqli_query($link,'UPDATE users SET salary=700 WHERE salary=500');
// mysqli_query($link,'DELETE FROM users WHERE age=23');
// mysqli_query($link,'DELETE FROM users')

$holder=[];
$querry=mysqli_fetch_assoc($res);
while($querry){
  array_push($holder,$querry);
    $querry=mysqli_fetch_assoc($res);
}

// echo ("<table border=1>");

// foreach($holder as $elem1){
//     echo("<tr>");
//     foreach($elem1 as $elem ){
//         echo("<td>".$elem."</td>");
//     }
//     $id=$elem1["id"];
//     echo("<td> <a href='?del=$id'>Удалить</a></td>");
//     echo('</tr>');
// }

// echo("</table>");


// foreach($holder as $querry2){
//     echo("<div>");
//     echo("<h2>".$querry2['name']."</h2>");
//     echo("<p>".$querry2['age'].","."<b>".$querry2["salary"]."</b>"."</p>");
//     echo('</div>');
// }

// $del=$_REQUEST["del"];

// mysqli_query($link,"DELETE FROM test WHERE test.id=$del");

// foreach($holder as $elem1){
//     $id=$elem1["id"];
//     echo("<td> <a href='?id=$id'>пользователь $id</a></td>");
//     echo('<br>');
// }

// if(isset($_REQUEST)){
//     $temp=$_REQUEST["id"];
//     $querry=mysqli_query($link,"SELECT * FROM test WHERE test.id=$temp");
//     $user=mysqli_fetch_assoc($querry);
// $name=$user["name"];
// $age=$user["age"];
// $salary=$user["salary"];
// echo("<div>	<p>
// имя:$name
// </p>
// <p>
// возраст:$age,
// зарплата:$salary$,
// </p></div>");
// }

// echo('<form method="GET">
//         <input value="user" type="text" name="user" >
//         <input value="56" type="text" name="age" >
//         <input value="6900" type="text" name="salary">
//         <input type="submit" id="send" value="send">
//     </form>');

// if(isset($_REQUEST)){
//     $user=$_REQUEST["user"];
//     $age=$_REQUEST["age"];
//     $salary=$_REQUEST["salary"];
//    mysqli_query($link,"INSERT INTO `test` SET name_id='$user',age='$age',salary='$salary'");
// }

// foreach($holder as $elem1){
//     echo("<tr>");
//     foreach($elem1 as $elem ){
//         echo("<td>".$elem."</td>");
//     }
//     $id=$elem1["id"];
//     echo('</tr>');
// }

// echo("</table>");

if(empty($_REQUEST)){
    ?>
    <form method="POST">
        <input value="user" type="text" name="user" >
        <input value="56" type="text" name="age" >
        <input type="submit" id="send" value="send">
    </form>
    <?php
    echo("<table border=1>");
    foreach($holder as $elem1){
        echo("<tr>");
        foreach($elem1 as $elem ){
            echo("<td>".$elem."</td>");
        }
        $id=$elem1["id"];
        echo('</tr>');
    }
    echo("</table>");
}
else{

    $login=$_REQUEST["user"];
    $age=$_REQUEST["age"];
    $querry=mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM test WHERE (name_id='$login' and age='$age')"));
    if(isset($querry)){
        print_r($querry);
        echo("<table border=1>");
        foreach($holder as $elem1){
            echo("<tr>");
            foreach($elem1 as $elem ){
                echo("<td>".$elem."</td>");
            }
            $id=$elem1["id"];
            echo("<td> <a href='?del=$id'>Удалить</a></td>");
            echo("<td> <a href='?upd=$id'>Обновить</a></td>");
            echo('</tr>');
        }
        echo("</table>");
    }
    else{
        echo("ababab");
    }
}
?>
