<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="../../styles.css"/>
    <link rel="stylesheet" href="lab5_style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tame Impala</title>
</head>
<header>
    <a href="../index.php"><h1>BACK TO SITE</h1></a>
</header>
<body id="labs">
<main>
    <form class="uni-form" method="get">
        <h1>Shop database</h1>
        <h2>Items</h2><br>
        <?php include 'printDataBase.php'; ?>
    </form>
    <form>
        <h1>Convert to Chinese Calendar</h1>
        <h2>Enter year</h2>
        <input type="text" autocomplete="off" name="year" placeholder="Enter year">
        <input type="submit" value="Convert">
        <?php include 'getChineseYear.php'; ?>
    </form>
</main>
<footer>
    <h4>©2020 HPLTEAM</h4>
</footer>
</body>
</html>