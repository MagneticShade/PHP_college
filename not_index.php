<!-- 
<form action="" method="GET">
		<input name="name" value="<?php if (isset($_GET['name']))
        // echo($_GET['name']); else echo('default') ?>">
		<input type="submit" >
	</form>
<?php
	
		// echo ('Здраствуйте '.$_GET['name']);
	
// ?>  -->
<!-- <?php
$alphabet=['а'=>'A','б'=>'B','в'=>'V','г'=>'G','д'=>'D']
?>
      <form action=""method="Get">
		<textarea name="test" id="" cols="30" rows="10"><?php
			// if(empty($_REQUEST['test'])){
			// $temp=preg_replace('#(а-я){1}#',$alphabet['{$1}'],$_REQUEST['test']);
			// foreach(explode(' ',$_REQUEST['test'])as $elem){
			// 	print_r($alphabet[$elem]);	
			// }
			// echo(strtr($_REQUEST['test'],$alphabet));
			
		// }
		// else{
		// 	echo(" ");
		// }
			?></textarea>
		<input type="submit" value="отправить">
	 </form> --> 

<!-- 
<form action="" method="POST">
	<textarea name="test" id="" cols="30" rows="10"><?= $_REQUEST['test'] ?? '' ?></textarea>

	<input type="checkbox" name="one" value=1 <?php if (!empty($_REQUEST['one'])) echo('checked'); ?> id="">
	<input type="checkbox" name="two" value=2 <?php if (!empty($_REQUEST['two'])) echo('checked'); ?> id="">
	<input type="checkbox" name="three" value=3 <?php if (!empty($_REQUEST['three'])) echo('checked'); ?> id="">

	<input type="radio" name="radio" value="1" <?php if(isset($_REQUEST['radio'])&&$_REQUEST['radio']==1) echo("checked")?> id="">
	<input type="radio" name="radio" value="2" <?php if(isset($_REQUEST['radio'])&&$_REQUEST['radio']==2) echo("checked")?> id="">
	<input type="radio" name="radio" value="3" <?php if(isset($_REQUEST['radio'])&&$_REQUEST['radio']==3) echo("checked")?>id="">

	<button type="submit">отправить</button>
</form>
<p><?= empty($_REQUEST['test'])? '':(strtr($_REQUEST['test'],$alphabet))?></p>
<p><?php 
	// if(!empty($_REQUEST['one'])) 
	// 	echo(' one');
	// if(!empty($_REQUEST['two'])) 
	// 	echo(' two');
	// if(!empty($_REQUEST['three'])) 
	// 	echo(' three'); ?></p>
<p><?= $_REQUEST['radio'] ?? ' '?></p> -->