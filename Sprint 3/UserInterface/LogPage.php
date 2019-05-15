<!DOCTYPE html>
<html>
<head>
	<title>Log</title>
    <meta charset="UTF-8">
    <link href="Styles/Zephyr.css" rel="stylesheet" type="text/css">
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
    <textarea id="ourLog" readonly rows="100" cols="100"></textarea>
    <script>
        function loadFile(filePath) {
        var result = null;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", filePath, false);
        xmlhttp.send();
        if (xmlhttp.status==200) {
        result = xmlhttp.responseText;
        }
        return result;
        }

        var myStuff = loadFile("data.txt");
        document.getElementById("ourLog").value=myStuff;
    </script>
    
</body>
</html>
