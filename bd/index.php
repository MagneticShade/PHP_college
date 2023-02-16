<?php 
$link=mysqli_connect(hostname:'localhost',username:'root',database:'testBD');

// $res=mysqli_query($link,"SELECT * FROM users  ORDER BY name AND salary" );
$res=mysqli_query($link,"SELECT goods.name, tools.name as furniture FROM  goods LEFT JOIN tools ON goods.id=tools.id" );

// mysqli_query($link,"INSERT INTO `users`(name,age,salary) VALUES('user7','26',300)");
$querry=mysqli_fetch_assoc($res);

while($querry){
print_r($querry);
    $querry=mysqli_fetch_assoc($res);
}


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


?>