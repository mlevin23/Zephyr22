<!DOCTYPE html>
<html>
<head>
	<title>Appliances</title>
    <meta charset="UTF-8">
    <link href="Styles/Zephyr.css" rel="stylesheet" type="text/css">
    <link href="Styles/newCSS.css" rel="stylesheet" type="text/css">
    <script src="jquery-2.1.0.min.js"></script>
    <script>
        function create(ID, TYPE) {    
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: { name: ID, value: document.getElementById(ID).checked, type: TYPE},
                success: function(response) { console.log(response); }
            });
        }
    </script>
</head>
<body class="backGround">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="Lighting.php">Lighting</a>
        <a class="active" href="Appliances.php">Appliances</a>
        <a href="Temperature.php">Temperatures</a>
        <a href="LogPage.php">Log</a>
    </div>
    
    <div>
        <h1 class="header">Appliances</h1>
    </div>
    
    <div class="center">
        <div class="boxed">
            Oven
            <label class="switch">
                <input onclick="create('oven', 'appliance')" id="oven" type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="boxed">
            Coffee Maker
            <label class="switch">
                <input onclick="create('coffee maker', 'appliance')" id="coffee maker" type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="boxed">
            Bottle Warmer
            <label class="switch">
                <input onclick="create('bottle warmer', 'appliance')" id="bottle warmer" type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
</body>
</html>