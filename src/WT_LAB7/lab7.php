<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="../../styles.css"/>
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
        <p>Addresses:</p>
        <input type="text"  name="receivers" autocomplete="off" placeholder="Input email addresses" pattern="^([0-9a-z]+@[0-9a-z]+\.[a-z]+,?)*$"><br>
        <p>Topic:</p>
        <input type="text" name="topic" autocomplete="off" placeholder="Input email addresses"><br>
        <p>Message text:</p>
        <textarea rows="10" cols="45" name="messageText"></textarea><br>
        <button type='submit' name="sendMessage" value="send">Отправить</button>
        <br>
        <?php include 'sendMessages.php'; ?>
    </form>
</main>
<footer>
    <h4>©2020 HPLTEAM</h4>
</footer>
</body>
</html>