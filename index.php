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
            margin-top: 20%;
            background-color: #4444;
        }
        input {
            outline: none;
            padding: 10px;
        }
       .submit {
        background-color: white;
        border-radius: 5px;
        border-width: 1px;
        cursor: pointer;
        transition: 0.2s;
       }
       .submit:hover {
        background-color: greenyellow;
       }
       .reset {
        background-color: white;
        border-radius: 5px;
        border-width: 1px;
        cursor: pointer;
        transition: 0.2s;
       }
       .reset:hover {
        background-color: red;
        color: white;
       }
    </style>
</head>
<body>
    <center>
    <div class="login-field">
    <h2>N-KM KEY</h2>
    <form action="share.php" method="post">
        <input name="key" maxlength="9" placeholder="Key (9 Numbers)" required >
        <br>
        <br>
        <input type="submit" class="submit"> <input type="reset" class="reset">
    </form>
    </div>
    </center>
</body>
</html>