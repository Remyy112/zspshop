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
        <h2>Oferty</h2>
        <table>
            <tr><th><u>Imię</u></th><th><u>Oferta</u></th><th><u>Cena</u></th></tr>
                <?php
                    $con = new mysqli("localhost", "root", "", "zspshop");
                    $hej = $con->query("SELECT users.name, `offers`, `prices` FROM `users offers` JOIN users ON users_id=users.id");
                    $siema = $hej->fetch_all(MYSQLI_ASSOC);
                        for($i=0;$i<count($siema); $i++){
                            echo "<tr><th>".$siema[$i]["name"]."</th><th>".$siema[$i]["offers"]."</th><th>".$siema[$i]["prices"]."</th></tr>";
                        }
                ?>
        </table>
        <br>
        <a href="menu.php"><button>Powrót</button></a>
    </div>
</body>