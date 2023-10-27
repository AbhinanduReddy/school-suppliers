<?php
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo $_SESSION;
// Check if the user is logged in (you can modify this logic based on your authentication system)
if (isset($_SESSION['user'])) {
    // User is logged in
    $welcomeMessage = "Welcome, " . $_SESSION['user'] . "!";
    $loginButton = '<a href="logout.php">Logout</a>';
} else {
    // User is not logged in
    $welcomeMessage = "Welcome to the site!";
    $loginButton = '<a href="login.php">Login</a>';
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

    <title>Your Website Title</title>
    <style>
        
    </style>
</head>
<body>
    <header>
        <div class="logo"><img src="icon.png"></img> </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php echo $loginButton; ?>
            </ul>
        </nav>
       
    </header>
 
    <div class="container" style="background-image: url('back.jpg');  background-repeat: no-repeat;background-size: cover;">
        <!-- <img class="image" src="home_im.jpeg" alt="Image"> -->
        <p class="text text-3d"> One Step Solution for all School Supplies at a dicounted price and to your door step or classroom.</p>

    </div>


    <!-- Rest of your webpage content goes here -->

</body>
</html>

