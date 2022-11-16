<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
        <title>ZSP shop - użytkownicy</title>
    <link rel="stylesheet" href="stylezspshop.css">
</head>
<body>
    <div class="header">
        <h3>ZSP shop</h3>
    </div>
    <div class="body1">
        <h2>Użytkownicy</h2>
        <table>
            <tr><th><u>Imię</u></th><th><u>Nazwisko</u></th><th><u>Nazwa użytkownika</u></th></tr>
                <?php
                    $con = new mysqli("localhost", "root", "", "zspshop");
                    $hej = $con->query("SELECT `name`, `s. name`, `username` FROM `users`");
                    $siema = $hej->fetch_all(MYSQLI_ASSOC);
                        for($i=0;$i<count($siema); $i++){
                            echo "<tr><th>".$siema[$i]["name"]."</th><th>".$siema[$i]["s. name"]."</th><th>".$siema[$i]["username"]."</th></tr>";
                        }
                ?>
        </table>
        <br>
        <a href="menu.php"><button>Powrót</button></a>
    </div>
</body>