<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop - menu</title>
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
        <hr style="width: 30%">
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
        <hr style="width: 30%">
        <h3>Oferty użytkownika</h3>
        
            <?php
                $con = new mysqli("localhost", "root", "", "zspshop");
                $set="SELECT uo.id, uo.offers, uo.prices FROM `users offers` AS uo JOIN users ON users.id=uo.users_id WHERE users.id='".$_COOKIE["id"]."'";
                $res=$con->query($set);
                $siema = $res->fetch_all(MYSQLI_ASSOC);
                    for($i=0;$i<count($siema); $i++){
                        echo $siema[$i]["offers"]." - ".$siema[$i]["prices"]."<br>";
                    }
            ?>
        
            <br>
            <a href="szczegolyofert.php"><button>Szczegóły</button></a>
            
                <br>
                <hr style="width: 30%">
                <h3>Zakupy użytkownika</h3>
        
            <?php
                $con = new mysqli("localhost", "root", "", "zspshop");
                $set="SELECT up.id, up.purchases, up.prices FROM `users purchases` AS up JOIN users ON users.id=up.users_id WHERE users.id='".$_COOKIE["id"]."'";
                $res=$con->query($set);
                $siema = $res->fetch_all(MYSQLI_ASSOC);
                    for($i=0;$i<count($siema); $i++){
                        echo $siema[$i]["purchases"]." - ".$siema[$i]["prices"]."<br>";
                    }
            ?>
        
            <br>
            <a href="szczegolykupionychproduktow.php"><button>Szczegóły</button></a>
    
            <?php
                $con = new mysqli("127.0.0.1", "root", "", "zspshop");
                if(isset($_POST["offers"]) && isset($_POST["prices"])){
                    $sql="INSERT INTO `users offers`(`id`, `offers`, `prices`, `users_id`) VALUES ('NULL','".$_POST["offers"]."','".$_POST["prices"]."','".$_COOKIE["id"]."')";
                }
            ?>
        
                <br>
                <hr style="width: 30%">
                <h3 style="color: white;">Dodaj ofertę</h3>
                <form method="POST">
                <p style="color: white;">Oferta:</p>
                <input name="offers">
                <p style="color: white;">Cena:</p>
                <input name="prices">
                <br>
                <br>
                <input type="submit" value="Dodaj">
                </form>

            <?php
                $con = new mysqli("127.0.0.1", "root", "", "zspshop");
                if(isset($_POST["offers"]) && isset($_POST["prices"])){
                    $sql="INSERT INTO `users purchases`(`id`, `offers`, `prices`, `users_id`) VALUES ('NULL','".$_POST["offers"]."','".$_POST["prices"]."','".$_COOKIE["id"]."')";
                }
            ?>
        
                <br>
                <hr style="width: 30%">
                <h3 style="color: white;">Dodaj zakupiony produkt</h3>
                <form method="POST">
                <p style="color: white;">Produkt:</p>
                <input name="offers">
                <p style="color: white;">Cena:</p>
                <input name="prices">
                <br>
                <br>
                <input type="submit" value="Dodaj">
                </form>
        
            <?php
                $con = new mysqli("127.0.0.1", "root", "", "zspshop");
                if(isset($_POST["offers"]) && isset($_POST["prices"])){
                    $sql="INSERT INTO `users purchases`(`id`, `offers`, `prices`, `users_id`) VALUES ('NULL','".$_POST["offers"]."','".$_POST["prices"]."','".$_COOKIE["id"]."')";
                }
            ?>
    </div>
</body>