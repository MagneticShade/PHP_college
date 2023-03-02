<?php
include("link.php");
if(isset($_REQUEST["upd"])){
    $id=$_REQUEST["upd"];
    $chosen_t=mysqli_query($link,"SELECT *from test WHERE test.id=$id");
    $decode=mysqli_fetch_assoc($chosen_t);
}


if(isset($_REQUEST['user'])){
    $name_id=$_REQUEST['user'];
    $age=$_REQUEST['age'];
    $salary=$_REQUEST['salary'];

    if (isset($_REQUEST['new'])) {
        mysqli_query($link,"INSERT INTO `test` SET name_id='$name_id',age='$age',salary='$salary'");
    }
    else{
    mysqli_query($link,"UPDATE test SET name_id='$name_id',age='$age',salary='$salary' WHERE id='$id'");
    }
    ?>
    <h1>ИЗМЕНЕНИЯ ПРОВЕДЕНЫ УСПЕШНО</h1>
    <a href="index.php"><button>НАЗАД</button></a>
<?php
}
else if (isset($_REQUEST["upd"])) 
{
    ?>
    <form method="POST">
        <input value=<?=$decode['name_id'] ?> type="text" name="user" >
        <input value=<?=$decode['age']  ?> type="text" name="age" >
        <input value=<?=$decode['salary']  ?> type="text" name="salary">
        <input type="submit" id="send" value="send">
    </form>
    <?php
}
else{
    ?>
    <form method="POST">
        <input   type="text" name="user" >
        <input   type="text" name="age" >
        <input   type="text" name="salary">
        <input type="submit" id="send" value="send">
    </form>
    <?php
}
?>
