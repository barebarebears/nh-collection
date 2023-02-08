<?php

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
            <a href="index.php">Home</a>
        </li>
    </ul>
</nav>
<header>
    <div class="input-container">
        <h3>Add Plant</h3>
        <form action="postdata.php" method="post">
            <label for="colloquial_name">Colloquial name: </label>
            <input type="text" name="colloquial_name" />
            <label for="latin_name">Latin name: </label>
            <input type="text" name="latin_name" />
            <label for="size_cm">Size (cm): </label>
            <input type="number" name="size_cm" />
            <label for="image_url">Image URL: </label>
            <input type="url" name="image_url" />
            <input type="submit" value="Submit Plant"/>
        </form>
    </div>
</header>
<footer>
    <p>© Copyright 2023 | Website created by Nick Hackland</p>
</footer>
</body>
</html>