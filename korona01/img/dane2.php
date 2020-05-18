     <?php
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "madeja";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result2 = $conn->query("SELECT * FROM ceny_pellet");

            
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


