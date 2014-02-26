<?php
	echo ($_POST['fname']);
	$fp = fopen('ajaxtxt.txt','a');
	fwrite($fp , $_POST['fname']."\n");
	fclose($fp);
?>