<?php
require_once "inc/nav.php";
require_once "../models/bookModel.php";
$listBook = Book::listBook();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <?php foreach ($listBook as $book) { ?>
            <div class="book">
                <h1>
                    <?= $book['title']; ?>
                </h1>
                <h2>
                    <?= $book['author']; ?>
                </h2>
                <p>
                    <?= $book['publication']; ?>
                </p>
            </div>
        <?php } ?>
    </div>
</body>

</html>