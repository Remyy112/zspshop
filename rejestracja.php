<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop - rejestracja</title>
    <link rel="stylesheet" href="stylezspshop.css">
</head>
<body>
    <?php
        $con = new mysqli("127.0.0.1", "root", "", "zspshop");
        if(isset($_POST["name"]) && strlen($_POST["name"])>0  && isset($_POST["sname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])){
            $sql="INSERT INTO `users`(`id`, `name`, `s. name`, `username`, `email`, `password`, `is_admin`) VALUES ('NULL','".$_POST["name"]."','".$_POST["sname"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."','no')";
            $con->query($sql);
            header('location: '.'logowanie.php');
        }
    ?>
    <div class="header">
        <h3>ZSP shop</h3>
    </div>
    <div class=body1>
    <br>
    <hr style="width: 30%">
    <p style="color: white;">Rejestracja</p>
    <hr style="width: 30%">
    <form method="POST">
        Imię<br>
        <input name="name"><br>
        Nazwisko<br>
        <input name="sname"><br>
        Nazwa konta<br>
        <input name="username"><br>
        Email<br>
        <input name="email"><br>
        Hasło<br>
        <input name="password" type="password">
        <br>
        <br>
        <br>
        <input type="submit" value="Zarejestruj się!">
    </form>
    <br>
    <a href="logowanie.php"><button>Wróć do logowania</button></a>
    </div>
</body>