<!DOCTYPE html>
<html>
<head>
	<title>Temperature</title>
    <meta charset="UTF-8">
    <link href="Styles/Zephyr.css" rel="stylesheet" type="text/css">
</head>
<body class="backGround">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="Lighting.php">Lighting</a>
        <a href="Appliances.php">Appliances</a>
        <a class="active" href="Temperature.php">Temperatures</a>
    </div>
    
    <div>
        <h1 class="header">Temperature</h1>
    </div>
    
    <div id="homePlaque">
        <p></p>
    </div>
	
	<div>
        <input type ="number"
               id="temp" name="temp"
               min="50" max="85" >
    </div>
</body>
</html>
