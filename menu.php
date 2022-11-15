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
    <?php 
        if(empty($_COOKIE["id"])){
            header('location: '.'logowanie.php');
        }
    ?>
    <div class="body1">
        <br>
        <br>
        <a href="uzytkownicy.php"><button>Użytkownicy</button></a>
        <br>
        <br>
        <a href="oferty.php"><button>Oferty wszystkich użytkowników</button></a>
        <br>
        <br>
        <a href="kupione.php"><button>Kupione produkty wszystkich użytkowników</button></a>
        <br>
        <br>
        <h3>Oferty użytkownika</h3>
        <br>
        <?php
            $con = new mysqli("localhost", "root", "", "zspshop");
            $set="SELECT uo.id, uo.offers, uo.prices FROM `users offers` AS uo JOIN users ON users.id=uo.users_id WHERE users.id='".$_COOKIE["id"]."'";
            $res=$con->query($set);
            $siema = $res->fetch_all(MYSQLI_ASSOC);
                for($i=0;$i<count($siema); $i++){
                    echo $siema[$i]["offers"]." - ".$siema[$i]["prices"]."<br>";
                }
        ?>
    </div>
</body>