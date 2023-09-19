<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <form action="traitement/action.php" method="post">
        <div>
            <label for="">title</label><br>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">author</label><br>
            <input type="text" name="author">
        </div>
        <div>
            <label for="">publication</label><br>
            <input type="date" name="publication">
        </div>
        <div>
            <button name="add">add book</button>
        </div>
    </form>
</body>

</html>