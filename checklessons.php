<?php
session_start();

$lessons=array();

    // get value from the form
     if (isset($_POST['lesson']))  $lessons = $_POST['lesson'];

    foreach($lessons as $key => $value)
   	 {	
	 	echo $value;
	 }

//die(print_r($arr));
//header("location:extraclasses.php");
?>