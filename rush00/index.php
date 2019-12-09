<?php
	session_start();
	if ($_SESSION["loggued_on_user"])
		include("header_log.php");
	else
		include("header.php");
?>
<!DOCTYPE html>
<div class="picbanner">
	<div>
		<img id= "pic" src="imgs/zelda.png">
	</div>
	<div>	
		<img id= "pic" src="imgs/mario.png">
	</div>	
</div>
<?php
	include("footer.php");
?>
