<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./traitement/action.php" method="post">
        <div class="div1">
            <div>
                <label for="">email</label><br>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">password</label><br>
                <input type="password" name="password">
            </div>
            <div class="button2">
                <p style="color: purple;">
                    <?= isset($_SESSION['error_message']) ?  $_SESSION['error_message'] :  "" ; ?>
                </p>
                <button type="submit" name="login">se connecter</button>
            </div>
        </div>
    </form>
</body>

</html>