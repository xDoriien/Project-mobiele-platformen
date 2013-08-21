<?php
session_start();

$lessons=array();

    // get value from the form
     if (isset($_POST['lesson']))  $lessons = $_POST['lesson'];

    foreach($lessons as $key => $value)
   	 {	
	 	$_SESSION['views'] = $value;
		header("Location: extraclasses.php");
	 }
?>