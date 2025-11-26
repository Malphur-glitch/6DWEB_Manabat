<?php 
 $name = "John";
 $list = [
    "The Great Gatsby",
    "1984",
    "To Kill a Mockingbird",
    "Pride and Prejudice"
 ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional If</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include 'includes/header.php'; ?>
    <h1>Bookstore</h1>

    <?php 
        if ($name == "John") {
            echo "<h2>Welcome back, John!</h2>";
        } else {
            echo "<h2>Welcome to our bookstore!</h2>";
        }
    ?>

    <h2>Our Popular Books Of The Month Are:</h2>
    <p><?= $list[0] ?> </p>
    <p><?= $list[1] ?> </p>
    <p><?= $list[2] ?> </p>
    <p><?= $list[3] ?> </p>

<?php include 'includes/footer.php'; ?>
</body>
</html>