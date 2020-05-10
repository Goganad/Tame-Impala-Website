<?php
    function checkTable($conn, $tableName){
        $val = mysqli_query($conn, "SELECT 1 FROM ".$tableName." LIMIT 1");

        if($val !== false)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    if (isset($_GET['year'])){
        $year = $_GET['year'];

        $host = 'localhost';
        $database = 'store';
        $user = 'root';
        $password = "";
        $tableName = "chinese_calendar";

        $conn = mysqli_connect($host, $user, $password, $database);


        if (!checkTable($conn, $tableName)){
            $query = "CREATE TABLE ".$tableName." (
                year INT NOT NULL,
                chinese VARCHAR(7) NOT NULL
            )";

            $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
            if($result)
            {
                echo "<p>Table created</p>";
            }

            for ($i=0; $i<12; $i++){
                switch ($i) {
                    case 0:
                        $chineseName = 'Monkey';
                        break;
                    case 1:
                        $chineseName = 'Rooster';
                        break;
                    case 2:
                        $chineseName = 'Dog';
                        break;
                    case 3:
                        $chineseName = 'Pig';
                        break;
                    case 4:
                        $chineseName = 'Rat';
                        break;
                    case 5:
                        $chineseName = 'Ox';
                        break;
                    case 6:
                        $chineseName = 'Tiger';
                        break;
                    case 7:
                        $chineseName = 'Hare';
                        break;
                    case 8:
                        $chineseName = 'Dragon';
                        break;
                    case 9:
                        $chineseName = 'Snake';
                        break;
                    case 10:
                        $chineseName = 'Horse';
                        break;
                    case 11:
                        $chineseName = 'Sheep';
                        break;
                }
                $query ="INSERT INTO ".$tableName." VALUES($i, '$chineseName')";
                $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
            }
        } else {
            echo "<p>Connected to database</p>";
        }

        $query = "SELECT chinese FROM ".$tableName." WHERE year=".($year%12);
        $result = mysqli_query($conn, $query);
        $convertedYear = mysqli_fetch_row($result);
        echo $year." in chinese - ".$convertedYear[0];
    }