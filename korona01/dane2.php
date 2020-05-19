<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Cennik Palet</title>
</head>
<body>
    <div class="grid">
        <div class="item a">
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" width="421px" height="595px"></a>
            </div>

            <div class="cennik">
                <a class="cennik1" href="dane1.php"><img src="img/cennik1.png" width="100px" height="100px"></a>
                <a class="cennik2" href="dane2.php"><img src="img/cennik2.png" width="100px" height="100px"></a>
            </div>
        </div>
        <div class="item b">
        <div class="tablelka">
        <?php
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "madeja";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result2 = $conn->query("SELECT * FROM ceny_pellet");

                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>Rodzaj</th>
                <th>Kaloryczność</th>
                <th>Cena(zł/tona)</th>
                </tr>");

                while($row=$result2->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['rodzaj']."</td>");
                    echo("<td>".$row['kalorycznosc']."</td>");
                    echo("<td>".$row['cena']."</td>");
                    echo("</tr>");
                }
                echo("</table>");

    ?>
            </div>
        </div>
        <div class="item c">
            <div class="kontakt">
                <div class="kontakt2">
                    <h1>Kontak<span class="red-font">t</span></h1>
                    <p><i class="fa fa-cloud"></i><span> ul. Rybnicka 21a </span></p>
                    <p><i class="fa fa-cloud"></i><span> 44-189 Wilcza</span></p>
                    <p><i class="fa fa-cloud"></i><span> +48 123 456 789</span></p>
                    <p><i class="fa fa-cloud"></i><span> kontakt@paltex.pl</span></p>
                    <p><i class="fa fa-cloud"></i><span> Pon. - Pt.: 8:00 - 16:00 </span></p>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>