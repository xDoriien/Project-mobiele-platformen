<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/mobile.css" rel="stylesheet" type="text/css" />

<title>3IMDA Truyens Dorien</title>
</head>

<body>
	<div id="header">
    	<img src="images/tshirt.jpg" alt="header"/>
    </div>
    <div id="selectionbox">
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#4ba1af; margin-left: 55px;" >Kies uw basisklas:
    <?php
	mysql_connect('localhost', 'root', 'root');
	mysql_select_db('Mobiele_platformen');

	$sql = "SELECT name FROM classes";
	$result = mysql_query($sql);

	echo "<select name='name'>";
	while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
	}
	echo "</select>";

	?>
    </p>
    </div>
    <div id="klassen" style="margin-top:20px;margin-left:20px;color:#4ba1af;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
    <form method="post" action="extraclasses.php" >
        <input name="vak1" type="checkbox" value="vakken"  checked="true"/> Rich Media applications</br>
        <input name="vak2" type="checkbox" value="vakken"  checked="true"/> Communicatieve vaardigheden</br>
        <input name="vak3" type="checkbox" value="vakken"  checked="true"/> Engels - Frans</br>
        <input name="vak4" type="checkbox" value="vakken"  checked="true"/> Visualiseren</br>
        <input name="vak5" type="checkbox" value="vakken"  checked="true"/> Actualia</br>
        <input name="vak6" type="checkbox" value="vakken"  checked="true"/> Mobiele platformen</br>
        <input name="vak7" type="checkbox" value="vakken"  checked="true"/> Marketingcommunicatie</br>
        <input name="vak8" type="checkbox" value="vakken"  checked="true"/> Recht</br>
        <input name="vak9" type="checkbox" value="vakken"  checked="true"/> Indesign</br>
        <input type="image" name="submit" value="submit" src="images/volgende_btn.jpg"  style="margin-left:140px; margin-top:10px;" />
	</form>
 	</div>

</body>
</html>