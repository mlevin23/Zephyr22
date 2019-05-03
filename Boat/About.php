<!DOCTYPE html>
<html>
<head>
	<title>About</title>
    <meta charset="UTF-8">
    <link href="Styles/website.css" rel="stylesheet" type="text/css">
    <link href="Styles/myAbout.css" rel="stylesheet" type="text/css">
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
<body class="backGround" onload="openTab(event, 'Me')">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="News.php">Learn</a>
        <a href="Contact.php">Contact</a>
        <a class="active" href="About.php">About</a>
    </div>
    <h1 class="headerAbout">About Us</h1>
    
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Me')">Who am I?</button>
        <button class="tablinks" onclick="openTab(event, 'History')">Company History</button>
        <button class="tablinks" onclick="openTab(event, 'Procedure')">Procedure</button>
        <button class="tablinks" onclick="openTab(event, 'CustomerService')">Customer Service</button>
        <button class="tablinks" onclick="openTab(event, 'Price')">Price</button>
    </div>

    <div id="Me" class="tabcontent">
        <h3 class="myHeaders">Who am I?</h3>
        <p class="myText">I am currently a student at the University of Missouri in Columbia. There I am studying Computer Science and am currently working full time for 12 weeks with ULTRAX Aerospace for a summer internship. At Mizzou I am involved with Greek Life and am in the Beta Sigma Psi fraternity there. I am currently on the executive board as head of our recruitment program as well.</p> 
        <img class="imgAbout" src="images/gp.jpg" alt="gp">
        <img class="imgAbout" src="images/ep.jpg" alt="ep">
        <img class="imgAbout" src="images/fp.jpg" alt="fp">
        <img class="imgAbout" src="images/ffp.jpg" alt="ffp">
    </div>
    
    <div id="History" class="tabcontent">
        <h3 class="myHeaders">Company History</h3>
        <p class="myText">I started this busniess 5 years ago in the summer of 2013 and have done it every summer since. Over the last 5 years I have built up a progessively longer list of annual customers who are consistantly happy with the cleaning preformance. This season marks the first one with this new website I created to help answer any preliminary questions you may have. I am currently teaching my brother about this process as he will be taking over the busniess in a few years after I graduate from Mizzou.</p> 
    </div>
    
    <div id="Procedure" class="tabcontent">
        <h3 class="myHeaders">What we do</h3>
        <p class="myText">We specialize in pressure washing the carpet in the pontoon boats, as well as the hard top if the boat has one. In addition, boat seats will also be cleaned using mildew and stain remover, as those are proven to have the best results. We do not powerwash any of the furniture on boat, as it can tear vynl seating.</p>
        <img class="imgAboutTwo" src="images/TwoBoatTwo.jpg" alt="TwoBoatTwo">
        <img class="imgAboutTwo" src="images/TwoBoat.jpg" alt="TwoBoat">
        <img class="imgAboutTwo" src="images/OneBoat.jpg" alt="OneBoat">
    </div>

    <div id="CustomerService" class="tabcontent">
        <h3 class="myHeaders">Satisfaction? Yes!</h3>
        <p class="myText">Customer satisfaction is one of my biggest priorities, aside from getting your boat clean. I have a policy in place that states if at any point during the summer that I cleaned your boat, I will touch it up if the customer finds anything wrong with it after.<br><br> Free of charge.<br><br>I also will take care of everything on the boat as if it were my own while I am cleaning it.</p> 
    </div>

    <div id="Price" class="tabcontent">
        <h3 class="myHeaders">Let's talk price</h3>
        <p class="myText">Charges are usually just about $100 for the pressure washing and the seat/furniture cleaning. However, if you have anything smaller, such as a kayak or canoe, we can negiotiate a cheaper price before cleaning.</p>
    </div>
</body>
</html>