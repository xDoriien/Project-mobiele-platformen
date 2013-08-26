<?php
    
		mysql_connect('localhost', 'root', 'root');
		mysql_select_db('Mobiele_platformen');
		
		$dropdown = $_GET['ddmask'];
		$checkbox_list = '';
		
		$sql = "SELECT * FROM lessons WHERE classes_id=' ". $dropdown ."'";
		$result = mysql_query($sql);
	
	
		while ($row = mysql_fetch_array($result)) {
			$checkbox_list .= "<input name='lesson[]' type='checkbox' value='" . $row['lessons_id'] . "'>" . $row['name'] . "</br>";
		}
		
		echo $checkbox_list;
		return;
?>