<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop - szczegóły ofert</title>
    <link rel="stylesheet" href="stylezspshop.css">
</head>
<body>
    <div class="header">
        <h3>ZSP shop</h3>
    </div>
    <div class="body1">
        <br>
        <hr style="width: 30%">
        <h3>Szczegóły</h3>
        <hr style="width: 30%">
        
        <?php
            $con = new mysqli("127.0.0.1", "root", "", "zspshop");
            if(isset($_POST["offers"]) && strlen($_POST["offers"])>0  && isset($_POST["prices"])){
                $sql="UPDATE `users offers` SET `offers`='".$_POST["offers"]."',`prices`='".$_POST["prices"]."' WHERE id='".$_GET['offer_id']."'";
                $con->query($sql);
            }
        
            $sql = $con->query("SELECT `offers`, `prices` FROM `users offers` WHERE id='".$_GET['offer_id']."'");
            $siema = $sql->fetch_array();
                
        ?>
        
        <form method="POST">
            Oferta<br>
            <input name="offers" value="<?php echo $siema['offers']?>"><br>
            <br>
            Cena<br>
            <input name="prices" value="<?php echo $siema['prices']?>"><br>
            <br>
            <input type="submit" value="Potwierdź">
        </form>
        <a href="menu.php"><button>Powrót</button></a>
    </div>
</body>