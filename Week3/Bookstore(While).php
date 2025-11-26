<?php 
$counter = 1;
$limit = 5;
$price = 19.99;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop While</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <h1>Bookstore</h1>

    <h2>Book Prices </h2>
    <p>(for every purchase after the first, get a discount that stacks up to 5 times)</p>
    <p>
        <?php
        while($counter <= $limit){
           echo $counter;
            echo ' books cost $';
            $total = $price * $counter;
            $discount = 0.02;
            $discount += 0.02;
            $total -= $total * $discount * ($counter - 1);
            echo number_format($total, 2);
            echo '<br>';
            $counter++;
        } ?>
    </p>
<?php include 'includes/footer.php'; ?>
</body>
</html>