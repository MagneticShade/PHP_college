<?php
session_start();
// echo($_SESSION['num1']+$_SESSION['num2']);
// echo($_SESSION['counter']);
// session_destroy();
?>
<ul>
    <?php
    if(!empty($_SESSION)){
        foreach($_SESSION['req']as $key=>$value){
            echo('<li>'."{$key}=>{$value}".'</li>');
        }
    }
    ?>
</ul>