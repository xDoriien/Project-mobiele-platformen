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
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#4ba1af; margin-left: 80px;" >Vul aan met extra lessen</p>
    <select style="margin-left:190px">
  		<option value="2IMDA">2IMDA</option>
  		<option value="2IMDB">2IMDB</option>
        <option value="2IMDC">2IMDC</option>
        <option value="1IMDA">1IMDA</option>
  		<option value="1IMDB">1IMDB</option>
        <option value="1IMDC">1IMDC</option>
	</select>
    </div>
    <div id="klassen" style="margin-top:20px;margin-left:20px;color:#4ba1af;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
     <form method="post" action="extraclasses.php" >
        <input name="vak1" type="checkbox" value="vakken" checked="true"/> IRMA</br>
        <input name="vak2" type="checkbox" value="vakken" checked="true"/> Frans 2</br>
        <input name="vak3" type="checkbox" value="vakken" checked="true"/> Engels 2</br>
        <input name="vak4" type="checkbox" value="vakken" checked="true"/> Visualiseren 2</br>
        <input name="vak5" type="checkbox" value="vakken" checked="true"/> CMS</br>
        <input name="vak6" type="checkbox" value="vakken" checked="true"/> E-business</br>
        <input name="vak7" type="checkbox" value="vakken" checked="true"/> Photoshop 2</br>
        <input name="vak8" type="checkbox" value="vakken" checked="true"/> Photoshop 1</br>
        <input name="vak9" type="checkbox" value="vakken" checked="true"/> Frans 1</br>
        <input name="vak9" type="checkbox" value="vakken" checked="true"/> Engels 1</br>
        <input type="image" name="submit" value="submit" src="images/volgende_btn.jpg"  style="margin-left:140px; margin-top:10px;" />
	</form>
    </div>
</body>
</html>