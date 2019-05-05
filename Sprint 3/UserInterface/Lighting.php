<!DOCTYPE html>
<html>
<head>
	<title>Lighting</title>
    <meta charset="UTF-8">
    <link href="Styles/zephyr.css" rel="stylesheet" type="text/css">
    <link href="Styles/verticalTabs.css" rel="stylesheet" type="text/css">
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
    </script>
</head>
<body class="backGround" onload="openTab(event, 'Upstairs')">
    <div class="topnav">
        <a href="WelcomePage.php">Home</a>
        <a class="active" href="Lighting.php">Lighting</a>
        <a href="Appliances.php">Appliances</a>
        <a href="Temperature.php">Temperature</a>
    </div>
    <h1 class="headerAbout">Lighting</h1>
    
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Upstairs')">Upstairs</button>
        <button class="tablinks" onclick="openTab(event, 'Ground')">Ground</button>
        <button class="tablinks" onclick="openTab(event, 'Basement')">Basement</button>
    </div>

    <div id="Upstairs" class="tabcontent">
        <h3 class="myHeaders">Upstairs</h3>
        <p class="myText">Light 1</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
    
    <div id="Ground" class="tabcontent">
        <h3 class="myHeaders">Ground</h3>
        <p class="myText">I started this busniess 5 years ago in the summer of 2013 and have done it every summer since. Over the last 5 years I have built up a progessively longer list of annual customers who are consistantly happy with the cleaning preformance. This season marks the first one with this new website I created to help answer any preliminary questions you may have. I am currently teaching my brother about this process as he will be taking over the busniess in a few years after I graduate from Mizzou.</p> 
    </div>
    
    <div id="Basement" class="tabcontent">
        <h3 class="myHeaders">Basement</h3>
        <p class="myText">We specialize in pressure washing the carpet in the pontoon boats, as well as the hard top if the boat has one. In addition, boat seats will also be cleaned using mildew and stain remover, as those are proven to have the best results. We do not powerwash any of the furniture on boat, as it can tear vynl seating.</p>
    </div>
</body>
</html>