<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live coding: php-include-require</title>
    <?php
        include_once './libs.php';
        // include_once './libs.php';
    ?>

</head>
<body class="container">
    <header>
        <?php
            include './header.php';
            include './header.php';
            include './header.php';
        ?>
    </header>
    <main>
        <h1>Siamo nel Main</h1>
    </main>
    <footer>
        <?php require './footer.php'; ?>
        <?php require_once './footer.php'; ?>
    </footer>
</body>
</html>
