<?php
	include "connect.php";

	$query = mysql_query("INSERT INTO `testimon`(`resto_id`, `testi`, `rate`) VALUES (".$_POST['id'].",'".$_POST['testi']."',".$_POST['rate'].")") or die(mysql_error());

?>