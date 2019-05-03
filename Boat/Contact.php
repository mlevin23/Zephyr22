<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <meta charset="UTF-8">
    <link href="Styles/website.css" rel="stylesheet" type="text/css">
    <link href="Styles/myContact.css" rel="stylesheet" type="text/css">
</head>
<body class="backGround">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="News.php">Learn</a>
        <a class="active" href="Contact.php">Contact</a>
        <a href="About.php">About</a>
    </div>
    <h1 class="headerAbout">Contact Us</h1>
    <div class="container">
        <h3 id="PhoneText">My Phone: (816) 520 - 4449</h3>
        <form action="mailto:kbmeyer1997@yahoo.com" method="post">
            <input type="text" id="fname" name="First Name" placeholder="First Name"><br>
            <input type="text" id="lname" name="Last Name" placeholder="Last Name"><br>
            <input type="text" id="pNumber" name="Phone Number" placeholder="Phone Number"><br>
            <textarea id="subject" name="subject" placeholder="Message ALSO: The site take a moment for email to load after clicking the submit button" style="height:100px"></textarea><br>
            <input type="submit" value="Submit">
        </form>
</div>
</body>
</html>