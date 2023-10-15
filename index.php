<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            font-family: arial;
            padding: 10px;
        }
        input {
            outline: none;
            padding: 5px;
        }
        .login-field {
            width: max-content;

        }
    </style>
</head>
<body>
    <div class="login-field">
    <h2>Anmeldung nkm Photos</h2>
    <form action="share.php" method="post">
        <input name="benutzer" maxlength="9" placeholder="Key (9 Numbers)" required>
        <br>
        <input type="password" name="passwort" maxlength="10" placeholder="Password (max.10)" required>
        <br>
        <input type="submit" style="float: left;"> <input type="reset" style="float: right;">
    </form>
    </div>
   
</body>
</html>