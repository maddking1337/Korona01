<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledane.css">
    <title>Cennik pelletu</title>
</head>
<body>
<a href="index.html"><img src="img/logo.png" width="150px" height="150px"></a>

    <div class="table">
    <?php
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "madeja";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result2 = $conn->query("SELECT * FROM ceny_pellet");

                echo("<h1>Ceny pelletu</h1>");
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>id</th>
                <th>Rodzaj</th>
                <th>Kaloryczność</th>
                <th>Cena(zł/tona)</th>
                </tr>");

                while($row=$result2->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td>");
                    echo("<td>".$row['rodzaj']."</td>");
                    echo("<td>".$row['kalorycznosc']."</td>");
                    echo("<td>".$row['cena']."</td>");
                    echo("</tr>");
                }
                echo("</table>");

    ?>
   
    </div>


    
</body>
</html>


