<?php

/**
 * Creates a DB connection
 * @return PDO as the db conn
 */
function createDbConnection(): PDO
{
    $db = new PDO('mysql:host=db; dbname=nhhouse_plants', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * retrieves plants data from DB
 * @param PDO $db the PDO connection
 * @return array the results from DB
 */
function getAllData(PDO $db): array
{
    $stmnt = $db->prepare("SELECT * FROM `plants`");
    $stmnt->execute();
    return $stmnt->fetchAll();

}

/**
 * display plants data in html format
 * @param $plants multidimensional array of cards
 * @return string to output
 */
function callPlant(array $plants): string
{
    $result = '';
    foreach ($plants as $plant){
        if (array_key_exists('image_url', $plant)
            && array_key_exists('colloquial_name', $plant)
            && array_key_exists('latin_name', $plant)
            && array_key_exists('size_cm', $plant)) {
            $result .= '<article><img class="collection-image" src="';
            $result .= $plant['image_url'];
            $result .= '" alt="Picture of a Plant">';
            $result .= '<div class="plant"><p>Colloquial name: ';
            $result .= $plant['colloquial_name'];
            $result .= '</p><p>Latin name: ';
            $result .= $plant['latin_name'];
            $result .= '</p><p>Size: ';
            $result .= $plant['size_cm'];
            $result .= 'cm</p></div></article>';
        }

    }
    return $result;
}


/**
 * sanitizes and validates user input for new plant. Returns boolean of 'true' or 'false'
 *
 * @param $colloquial_name_input
 * @param $latin_name_input
 * @param $size_input
 * @param $image_input
 * @return boolean
 */

function validateNewPlant(string $colloquial_name_input, string $latin_name_input, int $size_input, string $image_input): string
{
    $colloquial_name_input = filter_var($colloquial_name_input, FILTER_SANITIZE_STRING);
    $latin_name_input = filter_var($latin_name_input, FILTER_SANITIZE_STRING);
    $size_input = filter_var($size_input, FILTER_SANITIZE_NUMBER_INT);
    $image_input = filter_var($image_input, FILTER_SANITIZE_URL);

    $colloquial_name_input = preg_match('/^[a-zA-Z\s]+$/', $colloquial_name_input);
    $latin_name_input = preg_match('/^[a-zA-Z\s]+$/', $latin_name_input);
    $size_input = filter_var($size_input, FILTER_VALIDATE_INT);
    $image_input = filter_var($image_input, FILTER_VALIDATE_URL);

    if ($colloquial_name_input && $latin_name_input && $size_input && $image_input) {
        return 'valid';
    } else {
        return 'invalid';
    }
}

