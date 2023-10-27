<?php
session_start();

// Check if$_SESSION["username"] the user is logged in (you can modify this logic based on your authentication system)
if (isset($_SESSION['username'])) {
    // User is logged in
    $welcomeMessage = "Welcome, " . $_SESSION['username'] . "!";
    $loginButton = '<a href="logout.php">Logout</a>';
} else {
    // User is not logged in
    $welcomeMessage = "";
    $loginButton = '<a href="login.html">Login</a>';
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

    <title>School Supplies</title>
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
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
        // Display the "Users" link only if the user is logged in as admin
        echo '<li><a href="users.php">Users</a></li>';
    }
    ?>


                <li id="login-button">
         <?php echo $welcomeMessage, $loginButton; ?>
    </li>
            </ul>
        </nav>
       
    </header>
 
    <div class="container" style="background-image: url('ABOUT.jpg'); color:white; background-repeat: no-repeat;background-size: cover;">
        <!-- <img class="image" src="home_im.jpeg" alt="Image"> -->
        <div class="center-container" >
        <h2>Our Product Range</h2>
        <p>Explore our extensive product range, including:</p>
        <ul>
            <li>Stationery</li>
            <li>Art Supplies</li>
            <li>Educational Materials</li>
            <li>Backpacks and Bags</li>
            <li>Classroom Essentials</li>
            <li>Technology Accessories</li>
            <li>Office Supplies</li>
            <li>And Much More</li>
        </ul>
</div>
        
    </div>


    <!-- Rest of your webpage content goes here -->

</body>
</html>



