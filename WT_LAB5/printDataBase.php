<?php
    $host = 'localhost';
    $database = 'store';
    $user = 'root';
    $password = "";

    $conn = mysqli_connect($host, $user, $password, $database);
    $tables = array("items", "orders");
    $i = 0;
    foreach ($tables as $table){
        $sqlQuery = "SELECT * FROM ".$table." ORDER BY id";
        $result = mysqli_query($conn, $sqlQuery) or die("Ошибка " . mysqli_error($conn));
        if($result)
        {
            $rows = mysqli_num_rows($result);

            if ($i === 0){
                echo "<table><tr><th>-Id-</th><th>-Name-</th><th>-Info-</th></tr>";
            } else {
                echo "<table><tr><th>-Id-</th><th>-OrderID-</th><th>-Customer-</th></tr>";
            }
            for ($i = 0 ; $i < $rows ; $i++)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table><br>";

            mysqli_free_result($result);
        }
        $i++;
    }

    mysqli_close($conn);
