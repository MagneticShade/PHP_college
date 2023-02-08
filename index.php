
<form action="" method="GET">
		<input name="name" value="<?php if (isset($_GET['name']))
        echo($_GET['name']); else echo('default') ?>">
		<input type="submit" >
	</form>
<?php
	
		echo ('Здраствуйте '.$_GET['name']);
	
?> 

