<?php

require_once 'functions.php';

//if user gets to this page without submitting correct POST data, it will send them back to index page
if(!isset($_POST['colloquial_name']) && !isset($_POST['latin_name']) && !isset($_POST['size_cm']) && !isset($_POST['image_url'])) {
    header('Location: index.php');
}

$colloquial_name_input = $_POST['colloquial_name'];
$latin_name_input = $_POST['latin_name'];
$size_input = $_POST['size_cm'];
$image_input = $_POST['image_url'];

$input_value = validateNewPlant($colloquial_name_input, $latin_name_input, $size_input, $image_input);


if ($input_value) {
    $db = createDbConnection();
    addNewPlant($db, $colloquial_name_input, $latin_name_input, $size_input, $image_input);
    header('Location: index.php');
} else {
    header('Location: invalidpage.php');
}