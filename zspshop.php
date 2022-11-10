<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop</title>
    <link rel="stylesheet" href="stylezspshop.css">
</head>
<body>
    <div class="header">
        <h3>ZSP shop</h3>
    </div>
    <div class="body1">
            <?php
                $con = new mysqli("127.0.0.1", "root", "", "zspshop");
                $res = $con->query("SELECT `email`, `password` FROM `users`");
            ?>
        <h1>Logowanie</h1>
        Adres e-mail:
        <br>
        <input type="text">
        <br>
        <br>
        Hasło:
        <br>
        <input type="text">
        <br>
        <br>
        <a href="zspshop1.php"><button>Zaloguj się</button></a>
        <br>
        <br>
    </div>
</body>