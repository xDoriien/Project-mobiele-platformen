<?php
	if ($_POST['password'] == 'Onderbroek') {
  	header("location:ingelogd.php");
	// succesvol ingelogd
	} else {
  	exit;
	}
?>