<?php 
 $list = [
    "The Great Gatsby",
    "1984",
    "To Kill a Mockingbird",
    "Pride and Prejudice"
 ];

$best = $list[3];

switch ($best) {
    case "The Great Gatsby":
        $offer = "Get 20% off on 'The Great Gatsby' if you bought one more book!";
        break;
    case "1984":
        $offer = "Buy one get one free on '1984'!";
        break;
    case "To Kill a Mockingbird":
        $offer = "Free bookmark with every purchase of 'To Kill a Mockingbird'!";
        break;
    case "Pride and Prejudice":
        $offer = "Get a free pin with 'Pride and Prejudice'!";
        break;
    default:
        $offer = "No specials for today...";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Switch</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <h2>Our Offers For Today's Best-Selling Book:</h2>
    <p> <?= $offer ?> </p>

<?php include 'includes/footer.php'; ?>
</body>
</html>