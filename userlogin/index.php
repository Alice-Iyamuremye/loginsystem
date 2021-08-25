<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<h3>Welcome  <?php echo $_SESSION['userlogin']['firstname']." ".$_SESSION['userlogin']['lastname']; ?> </h3>


<a href="index.php?logout=true">Logout</a>