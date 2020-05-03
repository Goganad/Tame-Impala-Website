<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="../styles.css"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tame Impala</title>
</head>
<header>
    <a href="index.php"><h1>BACK TO SITE</h1></a>
</header>
<body id="labs">
    <main>
        <form class="uni-form" method="get">
            <h1>Merge Arrays</h1>
            <h2>Input numbers separated by commas</h2>
            <input id="lab-input" type="text" autocomplete="off" name="arr1" placeholder="1st array" pattern="^([0-9],?)*[0-9]$">
            <input id="lab-input" type="text" autocomplete="off" name="arr2" placeholder="2nd array" pattern="^([0-9],?)*[0-9]$">
            <input id="lab-input" type="submit" name="" value="Merge">
            <?php include 'WT_Labs/lab2.php'; ?>
        </form>
    </main>
<body>
<footer>
    <h4>©2020 HPLTEAM</h4>
</footer>

</body>
</html>