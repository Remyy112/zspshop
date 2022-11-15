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
        <h2>Kupione produkty</h2>
        <table>
            <tr><th><u>Imię</u></th><th><u>Kupiony produkt</u></th><th><u>Cena</u></th></tr>
                <?php
                    $con = new mysqli("localhost", "root", "", "zspshop");
                    $hej = $con->query("SELECT users.name, `purchases`, `prices` FROM `users purchases` JOIN users ON users_id=users.id");
                    $siema = $hej->fetch_all(MYSQLI_ASSOC);
                        for($i=0;$i<count($siema); $i++){
                            echo "<tr><th>".$siema[$i]["name"]."</th><th>".$siema[$i]["purchases"]."</th><th>".$siema[$i]["prices"]."</th></tr>";
                        }
                ?>
        </table>
        <br>
        <a href="menu.php"><button>Powrót</button></a>
    </div>
</body>