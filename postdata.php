<?php

$colloquial_name_input = $_POST['colloquial_name'];
$latin_name_input = $_POST['latin_name'];
$size_input = $_POST['size_cm'];
$image_input = $_POST['image_url'];


$colloquial_name_sanitized = filter_var($colloquial_name_input, FILTER_SANITIZE_STRING);
$latin_name_sanitized = filter_var($latin_name_input, FILTER_SANITIZE_STRING);
$size_sanitized = filter_var($size_input, FILTER_SANITIZE_NUMBER_INT);
$image_sanitized = filter_var($image_input, FILTER_SANITIZE_URL);


if (preg_match('/^[a-zA-Z\s]+$/', $colloquial_name_sanitized)) {
    echo 'valid plant name' . '<br>';
} else {
    echo 'invalid plant name' . '<br>';
}

if (preg_match('/^[a-zA-Z\s]+$/', $latin_name_sanitized)) {
    echo 'valid plant name' . '<br>';
} else {
    echo 'invalid plant name' . '<br>';
}

if (!filter_var($size_sanitized, FILTER_VALIDATE_INT) === false) {
    echo 'valid size' . '<br>';
} else {
    echo 'invalid size' . '<br>';
}

if (!filter_var($image_sanitized, FILTER_VALIDATE_URL) === false) {
    echo 'valid image url' . '<br>';
} else {
    echo 'invalid image url' . '<br>';
}



//echo '<pre>';
//var_dump($colloquial_name_sanitized);
//echo '</pre>';
//
//echo '<pre>';
//var_dump($latin_name_sanitized);
//echo '</pre>';
//
//echo '<pre>';
//var_dump($size_sanitized);
//echo '</pre>';
//
//echo '<pre>';
//var_dump($image_sanitized);
//echo '</pre>';


