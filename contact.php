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
    <div class="containerr"
        style="background-image: url('back.jpg');  background-repeat: no-repeat;background-size: cover;">
        <div class="center-container" style="color:white">
            <h1>Contacts</h1>
            <?php
            //read contacts from text files
            $contacts = file("contacts.txt", FILE_IGNORE_NEW_LINES);
            if ($contacts === false) {
                echo "Error reading file.";
            } else {
                echo "<ul>";
                foreach ($contacts as $contact) {
                    list($name, $email, $role) = explode(", ", $contact);
                    echo "<li><strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Role:</strong> $role </li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>


    </div>



    <!-- Rest of your webpage content goes here -->

</body>

</html>