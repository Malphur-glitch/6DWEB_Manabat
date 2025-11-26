<?php 
$bookList = [
    'The Great Gatsby' => 19.99,
    '1984' => 14.99,
    'To Kill a Mockingbird' => 18.50,
    'Pride and Prejudice' => 17.00,

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <h1>Bookstore</h1>

    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($bookList as $book => $price) { ?>
            <tr>
                <td><?= $book ?></td>
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>

<?php include 'includes/footer.php'; ?>
</body>
</html>