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
            <h1>Get files from directory</h1>
            <h2>Input path</h2>
            <?php include 'printDirectory.php'; ?>
            <input type="text" autocomplete="off" name="file_path" placeholder="Path" pattern="\.[^\.]*">
            <input type="submit" value="Get">
        </form>
    </main>
<body>
<footer>
    <h4>©2020 HPLTEAM</h4>
</footer>

</body>
</html>