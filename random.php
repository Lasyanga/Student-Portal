<?php
 if(isset($_POST['generate'])){
 	echo rand(0, 1000000).'<br>';
 	echo md5($_POST['pass']);
 }
?>
<form action="random.php" method="post">
	<input type="text" name="pass">
	<input type="submit" name="generate" value="generate">
</form>
