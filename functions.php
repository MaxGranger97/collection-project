<?php

function connectToDatabase(): PDO {
    $db = new PDO('mysql:host=DB;dbname=collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getCharactersFromDB(PDO $db): array {
    $query = $db->prepare('SELECT `name`, `blood-type`, `houses`.`house` FROM `characterinfo` JOIN `houses` ON `characterinfo`.`house` = `houses`.`id`;');
    $query->execute();
    return $query->fetchAll();
}

function displayCharacters(array $hpcharacters): string {
    $charinfo = '';
    foreach ($hpcharacters as $character) {
        if (array_key_exists("name", $character) && array_key_exists("blood-type", $character) && array_key_exists("house", $character)) {
            $charinfo .= '<div class="character ' . strtolower($character['house']) . '"><h3>' . $character["name"] . '</h3>';
            $charinfo .= '<p>' . $character["blood-type"] . '</p>';
            $charinfo .= '<p>' . $character["house"] . '</p></div>';
        }
    }
    return $charinfo;
}