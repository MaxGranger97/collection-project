<?php

$db = new PDO('mysql:host=DB;dbname=collection', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->query('SELECT * FROM `characterinfo` JOIN `houses` ON `characterinfo`.`house` = `houses`.`id`;');
$hpcharacters = $query->fetchAll();

?>

<!DOCTYPE html>
    <body>
        <main>
            <h1>Harry Potter Characters</h1>
            <div>

                <?php

                foreach ($hpcharacters as $character) {
                    echo '<h3>' . $character["name"] . '</h3>';
                    echo '<p>' . $character["blood-type"] . '</p>';
                    echo '<p>' . $character["house"] . '</p>';
                }

                ?>

            </div>
        </main>
    </body>
</html>
