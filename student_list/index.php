<?php
$link=mysqli_connect(hostname:'localhost',username:'root',database:'student_DB');
if ($link->connect_error) {
    die("Сединение отсутствует: " . $link->connect_error);
  }
$colleges_query=mysqli_query($link,"SELECT * from `colleges`");
$groups_query=mysqli_query($link,"SELECT * from `groups`");
$specs_query=mysqli_query($link,"SELECT * from `specs`");
$user_query=mysqli_query($link,"SELECT * from `user`");

$colleges=[];

$querry=mysqli_fetch_assoc($colleges_query);

while($querry){
    array_push($colleges,$querry);
    $querry=mysqli_fetch_assoc($colleges_query);
}


$groups=[];

$querry_g=mysqli_fetch_assoc($groups_query);

while($querry_g){
    array_push($groups,$querry_g);
    $querry_g=mysqli_fetch_assoc($groups_query);
}


$specs=[];

$querry_s=mysqli_fetch_assoc($specs_query);

while($querry_s){
    array_push($specs,$querry_s);
    $querry_s=mysqli_fetch_assoc($specs_query);
}

$user=[];

$querry_u=mysqli_fetch_assoc($user_query);

while($querry_u){
    array_push($user,$querry_u);
    $querry_u=mysqli_fetch_assoc($user_query);
}
?>
<form method="post">
 <select name="user" id="user_id">
    <?php
    foreach($user as $elem){
        $temp=$elem['id'];
        echo("<option value=$temp>".$elem["surname"]." ".$elem["name"]." ".$elem["middlleName"]."</option>");
    }
    ?>
            
</select>

<select name="college" id="college_id">
    <?php
    foreach($colleges as $elem){
        $temp=$elem['id'];
        echo("<option  value=$temp>".$elem["name"]."</option>");
    }
    ?>
            
</select>
<select name="groups" id="college_id">
    <?php
    foreach($groups as $elem){
        $temp=$elem['id'];
        echo("<option  value=$temp>".$elem["name"]."</option>");
    }
    ?>
            
</select>

<select name="specs" id="college_id">
    <?php
    foreach($specs as $elem){
        $temp=$elem['id'];
        echo("<option  value=$temp> ".$elem["name"]."</option>");
    }
    ?>
            
</select>
<button type="submit"></button>
</form>
<?php

$u_id=$_REQUEST['user'];
$col_id=$_REQUEST['college'];
$group_id=$_REQUEST['groups'];
$specs_id=$_REQUEST['specs'];

$res=mysqli_query($link,"SELECT * from `user` JOIN ");
print_r(mysqli_fetch_assoc($res));
 ?>