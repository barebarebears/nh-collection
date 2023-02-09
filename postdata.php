<?php

require_once 'functions.php';

session_start();

//if user gets to this page without submitting correct POST data, it will send them back to index page
if(!isset($_POST['colloquial_name']) && !isset($_POST['latin_name']) && !isset($_POST['size_cm']) && !isset($_POST['image_url'])) {
    header('Location: index.php');
}

$colloquial_name_input = $_POST['colloquial_name'];
$latin_name_input = $_POST['latin_name'];
$size_input = $_POST['size_cm'];
$image_input = $_POST['image_url'];

echo validateNewPlant($colloquial_name_input, $latin_name_input, $size_input, $image_input);
