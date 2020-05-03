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
    if (!isset($_GET['coloredMenu'])) {
        include 'main.php';
    } else {
        switch ($_GET['coloredMenu']) {
            case 'THE SLOW RUSH':
                include 'TSR.php';
                break;
            case 'SHOWS':
                include 'shows.php';
                break;
            case 'STORE':
                include 'store.php';
                break;
            case 'BIOGRAPHY':
                include 'biography.php';
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
