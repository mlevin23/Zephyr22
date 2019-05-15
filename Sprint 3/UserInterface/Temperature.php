<!DOCTYPE html>
<html>
<head>
    <title>Temperature</title>
    <meta charset="UTF-8">
    <link href="Styles/Zephyr.css" rel="stylesheet" type="text/css">
    <script src="jquery-2.1.0.min.js"></script>
    <script>
    function create(ID, TYPE) {    
    $.ajax({
        url: 'insert.php',
        type: 'POST',
        data: { name: ID, value: document.getElementById(ID).value, type: TYPE},
        success: function(response) { console.log(response); }
    });
    }
    </script>
</head>
<body class="backGround">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="Lighting.php">Lighting</a>
        <a href="Appliances.php">Appliances</a>
        <a class="active" href="Temperature.php">Temperatures</a>
        <a href="LogPage.php">Log</a>
    </div>
    <div>
        <h1 class="header">Temperature</h1>
    </div>
    <div>
        <div style="float:left">
            <label for="temp">Kitchen</label>
            <input type ="number"
               name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('Kitchen', 'temperature')" id="Kitchen">
        </div>
        <div style="float:left">
            <label for="temp">Nursery</label>
            <input type ="number"
                name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('Nursery', 'temperature')" id="Nursery">
        </div>
        <div style="float:left">
            <label for="temp">Living Room</label>
            <input type ="number"
               name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('LivingRoom', 'temperature')" id="LivingRoom">
        </div>
        <div>
            <label for="temp">Bedroom</label>
            <input type ="number"
               name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('Bedroom', 'temperature')" id="Bedroom">
        </div>
        <div style="float:left">
            <label for="temp">Basement</label>
            <input type ="number"
                name="temp"
                min="50" max="85" value ="68" style="width: 50px" onclick="create('Basement', 'temperature')" id="Basement">
        </div>
    </div>
    <div>
        <div style="float:left">
            <label for="temp">Morning</label>
            <input type ="number"
                name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('Morning', 'temperature')" id="Morning">
        </div>
        <div style="float:left">
            <label for="temp">Afternoon</label>
            <input type ="number"
                name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('Afternoon', 'temperature')" id="Afternoon">
        </div>
        <div>
            <label for="temp">Evening</label>
            <input type ="number"
                name="temp"
               min="50" max="85" value ="68" style="width: 50px" onclick="create('Evening', 'temperature')" id="Evening">
        </div>
    </div>
</body>
</html>

