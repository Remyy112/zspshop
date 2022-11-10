<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop</title>
    <link rel="stylesheet" href="stylezspshop.css">
</head>
<body>
    <div class="body1">
        <br>
        <h2>Oferty</h2>
        <table>
            <tr><th><u>Id Użytkownika</u></th><th><u>Oferta</u></th><th><u>Cena</u></th></tr>
            <br>
                <?php
                    $con = new mysqli("localhost", "root", "", "zspshop");
                    $hej = $con->query("SELECT `users_id`, `offers`, `prices` FROM `users offers`");
                    $siema = $hej->fetch_all(MYSQLI_ASSOC);
                        for($i=0;$i<count($siema); $i++){
                            echo "<tr><th>".$siema[$i]["users_id"]."</th><th>".$siema[$i]["offers"]."</th><th>".$siema[$i]["prices"]."</th></tr>";
                        }
                ?>
        </table>
        <br>
        <br>
        <a href="zspshop1.php"><button>Powrót</button></a>
    </div>
</body>