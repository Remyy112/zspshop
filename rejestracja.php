<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop - rejestracja</title>
    <link rel="stylesheet" href="stylezspshop.css">
</head>
<body>
    <?php
        $con = new mysqli("127.0.0.1", "root", "", "zspshop");
        if(isset($_POST["name"]) && isset($_POST["sname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])){
            $sql="INSERT INTO `users`(`id`, `name`, `s. name`, `username`, `email`, `password`, `is_admin`) VALUES ('NULL','".$_POST["name"]."','".$_POST["sname"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."','no')";
            $con->query($sql);
            header('location: '.'logowanie.php');
        }
    ?>
    <div class="header">
        <h3>ZSP shop</h3>
    </div>
    <p style="color: white;">Rejestracja</p>
    <form method="POST">
        <p style="color: white;">Imię</p>
        <input name="name">
        <p style="color: white;">Nazwisko</p>
        <input name="sname">
        <p style="color: white;">Nazwa</p>
        <input name="username">
        <p style="color: white;">Email</p>
        <input name="email">
        <p style="color: white;">Hasło</p>
        <input name="password" type="password">
        <br>
        <br>
        <br>
        <input type="submit" value="Zarejestruj się!">
    </form>
</body>