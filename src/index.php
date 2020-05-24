<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="../styles.css"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tame Impala</title>
</head>
<body link="white" vlink="white" alink="white">
<body>
    <header>
        <a href="index.php"><h1>TAME IMPALA</h1></a>
        <nav class="header-menu">
            <?php include 'coloredMenu.php'?>
        </nav>
    </header>
    <main>
        <?php
        require "WT_LAB8/db.php";
        $conn = mysqli_connect($host, $user, $password, $database);
        $date = date("Y-m-d");
        $res = mysqli_query($conn, "SELECT id FROM visits WHERE date='$date'") or die ("Cannot connect to db");
        if (mysqli_num_rows($res) === 0)
        {
            mysqli_query($conn, "UPDATE  ".$tableName." SET visits=0");
        }

        if (!isset($_GET['coloredMenu'])) {
            include 'main.php';
            $query = "UPDATE ".$tableName." SET visits=visits+1,date='$date' WHERE page='index'";
            $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));;
        } else {
            switch ($_GET['coloredMenu']) {
                case 'THE SLOW RUSH':
                    include 'TSR.php';
                    $query = "UPDATE ".$tableName." SET visits=visits+1,date='$date' WHERE page='index'";
                    mysqli_query($conn, "UPDATE ".$tableName." SET visits=visits+1,date='$date' WHERE `page`='TSR'");
                    break;
                case 'SHOWS':
                    include 'shows.php';
                    $query = "UPDATE ".$tableName." SET visits=visits+1,date='$date' WHERE page='shows'";
                    mysqli_query($conn, $query);
                    break;
                case 'STORE':
                    include 'store.php';
                    $query = "UPDATE ".$tableName." SET visits=visits+1,date='$date' WHERE page='store'";
                    mysqli_query($conn, $query);
                    break;
                case 'BIOGRAPHY':
                    include 'biography.php';
                    $query = "UPDATE ".$tableName." SET visits=visits+1,date='$date' WHERE page='biography'";
                    mysqli_query($conn, $query);
                    break;
            }
        }
        ?>
    </main>
    <footer>
        <h4>©2020 HPLTEAM</h4>
        <p><a href="tasks.php">WT tasks</a></p>
        <p><a href="#">Terms of Use</a></p>
        <p><a href="#">Policy</a></p> 
        <p><a href="#">Not Sell My Info</a></p>
    </footer>
</body>
</html>
