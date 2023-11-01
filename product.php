
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
            </ul>
        </nav>
       
    </header>
 
    <div class="container" style="background-image: url('ABOUT.jpg'); color:white; background-repeat: no-repeat;background-size: cover;">
        <!-- <img class="image" src="home_im.jpeg" alt="Image"> -->
        <div class="center-container" >
        <?php
        
    if (isset($_GET['name']) && isset($_GET['img']) && isset($_GET['price']) && isset($_GET['des'])) {
        $productName = $_GET['name'];
        $productDescription = $_GET['des'];
        $productPrice = $_GET['price'];
        $img = $_GET['img'];
        $pn =  array($productName,$productDescription, $productPrice, $img);
        
        $productNameJ=implode('~',$pn);
        $existingCookie = isset($_COOKIE['visitedProducts']) ? $_COOKIE['visitedProducts'] : '';
        $productCountCookie = isset($_COOKIE[$productName]) ? $_COOKIE[$productName] : '';


        $productsArray = explode('`', $existingCookie);
        $found=false;
        foreach ($productsArray as $key=>$productt) {
            $product= explode('~',$productt);
            if(isset($product[0]) && isset($product[1]) && isset($product[2]) && isset($product[3]) ){
                if($product[0]== $productName){
                    unset($productsArray[$key]);
                }
            }
        }
        $productsArray = array_values($productsArray);

        array_unshift($productsArray, $productNameJ);
        if (count($productsArray) > 5) {
            array_pop($productsArray);
        }
      
        if($productCountCookie==''){
            $productCountCookie=1;
        }
        else{
            $productCountCookie = (int)$productCountCookie+1;
        }

        // Set the cookie with the updated products array
        setcookie('visitedProducts', implode('`', $productsArray), strtotime('Fri, 31 Dec 9999 23:59:59 GMT'), '/');
        setcookie($productName,$productCountCookie , strtotime('Fri, 31 Dec 9999 23:59:59 GMT'), '/');



        echo '<div class="product" style="">';
        echo '<img src="' . $img . '" alt="Product Image" width="150" height="150">';
        echo '<h2>' . $productName . '</h2>'; 
        echo '<p>Description: ' . urldecode($productDescription) . '</p>';
        echo '<p>Price: $' . $productPrice . '</p>';
      
        echo '</div>';
    } else {
        echo '<p>No product information found.</p>';
    }
    ?>
       
</div>
</div>
        
    </div>


    <!-- Rest of your webpage content goes here -->

</body>
</html>



