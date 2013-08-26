<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
 <div id="header">
  	    <img src="images/logotm.png" alt="header"/>
 </div>
 <div id="instellingen" style="margin-left:230px;margin-top:-55px;">
 <a href="logout.php"><img src="images/tandwiel.jpg" alt="instellingen"/></a>
 </div>
 <div id="announcements"  style="margin-left:15px;color:#4ba1af;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
 <br />
 <br />
<?php

$lessons=array();

    // get value from the form
    if (isset($_POST['lesson']))  $lessons = $_POST['lesson'];
	
	$_SESSION['view2'] = $lessons;
	
	mysql_connect('localhost', 'root', 'root');
	mysql_select_db('Mobiele_platformen');	
	
	foreach($_SESSION['view'] as $key => $value) {
		$sql = 'SELECT * FROM absences JOIN lessons ON absences.teacher_id=lessons.teachers_id  WHERE lessons.lessons_id=' . $value;
		$result = mysql_query($sql);
	
		while ($row = mysql_fetch_array($result)) {
			echo $row['teacher'];
			echo "<br/><i style=font-size:13px;>";
			echo $row['announcement'] ;
			echo "</i>";
			echo '<hr style="border: 0,7px solid #db5644; width:300px; margin-left:-0px;"/>';
		}
	}
	
	foreach($_SESSION['view2'] as $key => $value) {
		$sql = 'SELECT * FROM absences JOIN lessons ON absences.teacher_id=lessons.teachers_id  WHERE lessons.lessons_id=' . $value;
		$result = mysql_query($sql);
	
		while ($row = mysql_fetch_array($result)) {
			echo $row['teacher'];
			echo "<br/><i style=font-size:13px;>";
			echo $row['announcement'] ;
			echo "</i>";
			echo '<hr style="border: 0,7px solid #db5644; width:300px; margin-left:-0px;"/>';
		}
	
	}
?>
 </div>
</body>
</html>

