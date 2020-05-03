<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="style_lab4.css"/>
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
            <h1>Select phone numbers</h1>
            <h2>Input text</h2>
            <input type="text" autocomplete="off" name="user_text" placeholder="Input text here">
            <input type="submit" value="Print">
            <br>
            <?php include 'printPhones.php'; ?>
        </form>
    </main>
<body>
<footer>
    <h4>©2020 HPLTEAM</h4>
</footer>

</body>
</html>