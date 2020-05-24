<?php
    require "db.php";
    $conn = mysqli_connect($host, $user, $password, $database);

    echo "Statistics:\n";
    $sqlQuery = "SELECT * FROM ".$tableName." ORDER BY id";
    $result = mysqli_query($conn, $sqlQuery) or die("Ошибка " . mysqli_error($conn));
    if($result)
    {
        $rows = mysqli_num_rows($result);

        echo "<table><tr><th>-Id-</th><th>-Page-</th><th>-Visits-</th></tr>";

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