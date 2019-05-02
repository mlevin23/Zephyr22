<?php
	
    if(!session_start()){
        header("Location: Error.php");
        exit;
    } 
    
    $loggedin = empty($_SESSION['loggedin']) ? '' : $_SESSION['loggedin'];
      
    if ($loggedin) {
        header("Location: Cmpvm5Final_Resources.php"); /* change to welcome page file */
        exit;
    }
    
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
            $_SESSION['loggedin']=$username;
            
			header("Location: Cmpvm5Final_Resources.php");  /* change to welcome page file */
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "LoginForm.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "LoginForm.php";
	}	
?>
