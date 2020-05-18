    <?php
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "madeja";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result1 = $conn->query("SELECT * FROM ceny_palet");

            
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