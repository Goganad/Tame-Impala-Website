<form class="header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['coloredMenu']) && 'THE SLOW RUSH' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="THE SLOW RUSH" id="coloredForm">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="THE SLOW RUSH">
    <?php } ?>
</form>
<form class="header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['coloredMenu']) && 'STORE' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="STORE" id="coloredForm">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="STORE">
    <?php } ?>
</form>
<form class="header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['coloredMenu']) && 'BIOGRAPHY' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="BIOGRAPHY" id="coloredForm">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="BIOGRAPHY">
    <?php } ?>
</form>
<form class="header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['coloredMenu']) && 'SHOWS' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="SHOWS" id="coloredForm">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="SHOWS">
    <?php } ?>
</form>