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
        .button-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for the button on hover */
.button-link:hover {
    background-color: #2580b3;
}
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
 
    <div  >
        <!-- <img class="image" src="home_im.jpeg" alt="Image"> -->
        <div  >
        <h2>Our Products</h2>
        <a class="button-link" href='/school-suppliers/visitedProducts.php'>Last Visited Products</a>
        <p>Explore our extensive product range, including:</p>
        <?php
// Mocked product data
$products = array(
    array(
        'product_name' => 'Color Pencils',
        'img'=>'https://i0.wp.com/johnmuirlaws.com/wp-content/uploads/2020/09/pencils-store.jpg?fit=1000%2C1333&ssl=1',
        'product_description' => 'Polychromos Artists’ Color Pencils, Tin of 24 Plus 2 more!',

        'product_price' => 19.99,
    ),
    array(
        'product_name' => 'Books',
        'img'=>'https://nestambuy.com/wp-content/uploads/2021/07/small-unruled_2-500x500.jpg',

        'product_description' => 'ITC Classmate Long Note Book (UR) 156Page',
        'product_price' => 29.99,
    ),
    array(
        'product_name' => 'Sticky Notes',
        'img'=>'https://i.ebayimg.com/images/g/044AAOSwSlRa3lFZ/s-l1200.webp',
        'product_description' => 'Post-it Super Sticky Notes, 3 in x 3 in, Colors 90 Sheets/Pad',
        'product_price' => 9.99,
    ),
    array(
        'product_name' => 'BackPack',
        'img'=>'https://i.ebayimg.com/images/g/acYAAOSwrV9lIQ2x/s-l1600.jpg',
        'product_description' => 'Backpack, Laptop Bag Travel School Shoulder Rucksack',
        'product_price' => 9.99,
    ),
    array(
        'product_name' => 'Puzzles',
        'img'=>'https://i.ebayimg.com/images/g/EeEAAOSwaCRku7SW/s-l500.jpg',
        'product_description' => 'School Puzzles Highlights Hidden Pictures',

        'product_price' => 5.99,
    ),
    array(
        'product_name' => 'Scissors',
        'img'=>'https://i.ebayimg.com/images/g/aBMAAOSwscNj4Kug/s-l1600.jpg',

        'product_description' => '4 Colors School Student Scissors Crafts Art DIY Office',
        'product_price' => 29.99,
    ),
    array(
        'product_name' => 'Lunch Box',
        'img'=>'https://i.ebayimg.com/images/g/skcAAOSwNhJhJ7RG/s-l500.jpg',
        'product_description' => 'Insulated Lunch Bag for School Men Women Kids',
        'product_price' => 9.99,
    ),
    array(
        'product_name' => 'Pencil Case',
        'img'=>'https://i.ebayimg.com/images/g/EkcAAOSwslFlJuy6/s-l1600.jpg',
        'product_description' => 'School Student Pencil Case, Coin Pouch Stationery',
        'product_price' => 3.99,
    ),
    array(
        'product_name' => 'Erasers',
        'img'=>'https://i.ebayimg.com/images/g/kIAAAOSw1nNlHZgJ/s-l500.png',
        'product_description' => '40 Pack Erasers for Kids Bulk - Variety of Cute Fruit',
        'product_price' => 11.99,
    ),
    array(
        'product_name' => 'Pens',
        'img'=>'https://i.ebayimg.com/images/g/qTcAAOSw6rVe2Qdr/s-l500.jpg',
        'product_description' => '6 ROLLER BALL PENS 2EACH RED BLUE BLACK SMOOTH WRITING',
        'product_price' => 3.99,
    )
);

// Loop through the mocked product data and generate product cards
foreach ($products as $product) {
    echo '<a style="color:white" href="/school-suppliers/product.php?name='. $product['product_name'] .'&img='. $product['img'] .'&des='. $product['product_description'] .'&price='. $product['product_price'] .'">';
    echo '<div class="product-card" >';
    echo '<img src="' . $product['img'] . '" alt="Product Image" width="150" height="150">';
    echo '<h2 class="product-title">' . $product['product_name'] . '</h2>';
    echo '<p class="product-description">' . $product['product_description'] . '</p>';
    echo '<p class="product-price">$' . $product['product_price'] . '</p>';
    echo '</div>';
    echo '</a>';
}
?>

</div>
        
    </div>


    <!-- Rest of your webpage content goes here -->

</body>
</html>



