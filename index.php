<?php

session_start();

require_once 'functions.php';

$db = createDbConnection();
$all_data = getAllData($db);
$planthtml = callPlant($all_data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plant Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <nav>
        <img src="logo.png" alt="Logo" />
        <ul>
            <li>
                <a href="#collection">My Collection</a>
            </li>
            <li>
                <a href="addplant.php">Add Plant</a>
            </li>
        </ul>
    </nav>
    <header>
        <div class="title">
            <h1>Plant Tracker</h1>
        </div>
        <div class="description">
            <p>For when you have way way too many plants.</p>
        </div>
    </header>
    <main id="collection">
            <?php
                echo $planthtml;
            ?>
    </main>
    <footer>
        <p>© Copyright 2023 | Website created by Nick Hackland</p>
    </footer>
</body>
</html>