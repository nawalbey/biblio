<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="form3">
        <form action="./traitement/action.php" method="post">
            <div class="div1">
                <div>
                    <label for="">name</label><br>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">email</label><br>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">password</label><br>
                    <input type="password" name="password">
                </div>
                <div class="button2">
                    <button type="submit" name="add">add book</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>