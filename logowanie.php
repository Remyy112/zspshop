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
            if(!empty($_COOKIE["id"])){
                header('location: '.'menu.php');
            }
                $con = new mysqli("127.0.0.1", "root", "", "zspshop");
                if(isset($_POST["email"]) && isset($_POST["password"])){
                    $sql = 'SELECT id FROM users WHERE email="'.$_POST['email'].'" AND password="'.$_POST['password'].'"';
                    $res = $con->query($sql);
                    $res2 = $res->fetch_array();
                    if(!empty($res2["id"])){
                        setcookie("id",$res2["id"]);
                        header('location: '.'menu.php');
                    }
                }
            ?>
        <form method="POST">
        <h1>Logowanie</h1>
        Adres e-mail:
        <br>
        <input type="text" name="email">
        <br>
        <br>
        Hasło:
        <br>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="Zaloguj">
        </form>
        <br>
        <br>
    </div>
</body>