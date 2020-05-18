<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledane.css">
    <title>Cennik palet</title>
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

                $result1 = $conn->query("SELECT * FROM ceny_palet");

                echo("<h1>Ceny palet</h1>");
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>ID</th>
                <th>Paleta</th>
                <th>Rozmiar</th>
                <th>Cena(zł/szt)</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td>");
                    echo("<td>".$row['paleta']."</td>");
                    echo("<td>".$row['rozmiar']."</td>");
                    echo("<td>".$row['cena']."</td>");
                    echo("</tr>");
                }
                echo("</table>");

    ?>
    
    </div>
    

</body>
</html>
