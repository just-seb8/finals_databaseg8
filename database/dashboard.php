<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">     
    <link rel="stylesheet" href="dashboard.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Irish+Grover&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
 
</head>
<body>
    <div class="dashboard-container">
    <h2><span class="typing"></span></h2>
        <p class="welcome-message">Hello, <?php echo $_SESSION['username']; ?>!</p>
        <p>This is your dashboard </p>
        
        <a href="logout.php">Logout</a>  
    </div>
   
        
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script>
		var typed = new Typed(".typing",
    {
        strings : ["Welcome to your Dashboard"],
        typeSpeed : 150,
        backSpeed : 150,
        loop : true 
    });
	</script>
</body>
</html>
