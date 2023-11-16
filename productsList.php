<?php
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


$jsonData = json_encode($products, JSON_PRETTY_PRINT);

// Specify the path where you want to save the JSON file
$jsonFilePath = 'productsListt.json';

// Save the JSON content to a file
if (file_put_contents($jsonFilePath, $jsonData)) {
    echo 'JSON data saved to ' . $jsonFilePath;
} else {
    echo 'Failed to save JSON data to ' . $jsonFilePath;
}

?>