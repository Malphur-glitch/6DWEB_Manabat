<?php 
 $list = [
    "The Great Gatsby",
    "1984",
    "To Kill a Mockingbird",
    "Pride and Prejudice"
 ];

 $bookPrice= [
    'The Great Gatsby' => 19.99,
    '1984' => 14.99,
    'To Kill a Mockingbird' => 18.50,
    'Pride and Prejudice' => 17.00,

 ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping/Conditional with Match</title>
    <style>
        .TGG{
            color: yellow;
        }
        .NineteenEightyFour{
            color: White;
        }
        .TKAM{
            color: lightgreen;
        }
        .PAP{
            color: lightblue;
        }
        .None{
            color: gray;
        }
    </style>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <h1>Bookstore</h1>

    <h2>Our Offers For Today's Best-Selling Books:</h2>
    <ul>
        <?php foreach ($list as $book): ?>
            <li class="<?php
                echo match($book) {
                    "The Great Gatsby" => "TGG",
                    "1984" => "NineteenEightyFour",
                    "To Kill a Mockingbird" => "TKAM",
                    "Pride and Prejudice" => "PAP",
                    default => "None"
                };
            ?>">
                <?php
                    echo match($book) {
                        "The Great Gatsby" => "Get 20% off on 'The Great Gatsby' priced at $" . $bookPrice['The Great Gatsby'] . " if you bought one more book!",
                        "1984" => "Buy one get one free on '1984' priced at $" . $bookPrice['1984'] . "!",
                        "To Kill a Mockingbird" => "Free bookmark with every purchase of 'To Kill a Mockingbird' priced at $" . $bookPrice['To Kill a Mockingbird'] . "!",
                        "Pride and Prejudice" => "Get a free pin with 'Pride and Prejudice' priced at $" . $bookPrice['Pride and Prejudice'] . "!",
                        default => "No specials for today..."
                    };
                ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include 'includes/footer.php'; ?>
</body>
</html>