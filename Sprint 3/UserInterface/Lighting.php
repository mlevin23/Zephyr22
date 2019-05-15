<?php
$txt = "test";
$myfile = file_put_contents('data.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lighting</title>
    <meta charset="UTF-8">
    <link href="Styles/Zephyr.css" rel="stylesheet" type="text/css">
    <link href="Styles/verticalTabs.css" rel="stylesheet" type="text/css">
    <script src="jquery-2.1.0.min.js"></script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
//    function create (ID) {
//          $.ajax({
//            url:"insert.php", //the page containing php script
//            type: "post", //request type,
//            dataType: 'json',
//            data: {name: "ID", value: "test1"},
//            success:function(result){
//                console.log(result.abc);
//           }
//         });
//        }
    function create() {    
    $.ajax({
        url: 'insert.php',
        type: 'POST',
        data: { name: "name", value: "okay"},
        success: function(response) { console.log(response); }
    });
    }
    </script>
</head>
<body class="backGround" onload="openTab(event, 'Upstairs')">
    <div class="topnav">
        <a href="WelcomePage.php">Home</a>
        <a class="active" href="Lighting.php">Lighting</a>
        <a href="Appliances.php">Appliances</a>
        <a href="Temperature.php">Temperature</a>
        <a href="LogPage.php">Log</a>
    </div>
    <h1 class="headerAbout">Lighting</h1>
    <button type="button" onclick="create()">Click Me</button>
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Upstairs')">Upstairs</button>
        <button class="tablinks" onclick="openTab(event, 'Ground')">Ground</button>
        <button class="tablinks" onclick="openTab(event, 'Basement')">Basement</button>
    </div>

    <div id="Upstairs" class="tabcontent">
        <h3 class="myHeaders">Upstairs</h3>
        <p class="myText">Master Bedroom</p>
        <label class="switch">
            <input id="masterBedroom" type="checkbox">
            <span class="slider round"></span>
        </label>
        <p class="myText">Bathroom</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
    
    <div id="Ground" class="tabcontent">
        <h3 class="myHeaders">Ground</h3>
        <p class="myText">Kitchen</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
        <p class="myText">Dining Room</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
        <p class="myText">Living Room</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
        <p class="myText">Porch</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
    
    <div id="Basement" class="tabcontent">
        <h3 class="myHeaders">Basement</h3>
        <p class="myText">Stair Light</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
        <p class="myText">Main Light</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
</body>
</html>
