<!DOCTYPE html>
<html>
	<head>
		<title>Project Encode</title>
		<meta charset="utf-8"/>
	</head>
	<body>
	<p>Encripta</p>
	<form method="get" action="index.php">
	<input type="text" name="texto">
	<input type="submit" value="Encripta"/>
	</form>
	<textarea>
		<?php
			$t = isset($_GET["texto"])?$_GET["texto"]:"";
			if ($t == "") {
				echo "";
			} else {
				echo base64_encode($t);
			}
		?>
	</textarea>

	<br/>
	<br/>
	<br/>

	<p>Decripta</p>
	<form method="get" action="index.php">
	<input type="text" name="texto2">
	<input type="submit" value="Decripta"/>
	</form>
	<textarea>
		<?php
			$t2 = isset($_GET["texto2"])?$_GET["texto2"]:"";
			if ($t2 == "") {
				echo "";
			} else {
				echo base64_decode($t2);
			}
		?>
	</textarea>
	</body>
</html>