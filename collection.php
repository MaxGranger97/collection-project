<?php

$db = new PDO('mysql:host=DB;dbname=collection', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->query('SELECT * FROM `characterinfo` JOIN `houses` ON `characterinfo`.`house` = `houses`.`id`;');
$hpcharacters = $query->fetchAll();

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="collection.css"/>
    <title>HP Collection</title>
</head>
<body>
    <main>
        <div>
            <h1>Harry Potter Characters</h1>
        </div>
        <div class="characters">
            <?php
            foreach ($hpcharacters as $character) {
                if ($character["house"] === 'Gryffindor') {
                    echo '<div class="character gryffindor"><h3>' . $character["name"] . '</h3>';
                    echo '<p>' . $character["blood-type"] . '</p>';
                    echo '<p>' . $character["house"] . '</p></div>';
                } elseif ($character["house"] === 'Slytherin') {
                    echo '<div class="character slytherin"><h3>' . $character["name"] . '</h3>';
                    echo '<p>' . $character["blood-type"] . '</p>';
                    echo '<p>' . $character["house"] . '</p></div>';
                } elseif ($character["house"] === 'Hufflepuff') {
                    echo '<div class="character hufflepuff"><h3>' . $character["name"] . '</h3>';
                    echo '<p>' . $character["blood-type"] . '</p>';
                    echo '<p>' . $character["house"] . '</p></div>';
                } else {
                    echo '<div class="character ravenclaw"><h3>' . $character["name"] . '</h3>';
                    echo '<p>' . $character["blood-type"] . '</p>';
                    echo '<p>' . $character["house"] . '</p></div>';
                }
            }
            ?>
        </div>
    </main>
</body>
</html>
