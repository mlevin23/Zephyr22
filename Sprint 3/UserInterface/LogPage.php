<!DOCTYPE html>
<html>
<head>
	<title>Log</title>
    <meta charset="UTF-8">
    <link href="Styles/Zephyr.css" rel="stylesheet" type="text/css">
    <script> 
        const fs = require('fs') 
  
        fs.readFile('data.txt', (err, data) => { 
            if (err) throw err;   
            console.log(data.toString()); 
        }) 
    </script> 
</head>
<body class="backGround">
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="Lighting.php">Lighting</a>
        <a href="Appliances.php">Appliances</a>
        <a href="Temperature.php">Temperatures</a>
        <a class="active" href="LogPage.php">Log</a>
    </div>
    
    <div>
        <h1 class="header">Log</h1>
    </div>
    <textarea readonly rows="100" cols="100"></textarea>
</body>
</html>