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
            if(isset($_POST["purchases"]) && strlen($_POST["purchases"])>0  && isset($_POST["prices"])){
                $sql="UPDATE `users purchases` SET `purchases`='".$_POST["purchases"]."',`prices`='".$_POST["prices"]."' WHERE id='".$_GET['purchase_id']."'";
                $con->query($sql);
            }
        
            $sql = $con->query("SELECT `purchases`, `prices` FROM `users purchases` WHERE id='".$_GET['purchase_id']."'");
            $siema = $sql->fetch_array();
                
        ?>
        
        <form method="POST">
            Oferta<br>
            <input name="purchases" value="<?php echo $siema['purchases']?>"><br>
            <br>
            Cena<br>
            <input name="prices" value="<?php echo $siema['prices']?>"><br>
            <br>
            <input type="submit" value="Potwierdź">
        </form>
        <a href="menu.php"><button>Powrót</button></a>
    </div>
</body>



