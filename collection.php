<?php

require_once('functions.php');

$db = connectToDatabase();
$hpcharacters = getCharactersFromDB($db);

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="collection.css"/>
    <title>HP Collection</title>
</head>
<body>
    <main>
        <header>
            <h1>Harry Potter Characters</h1>
        </header>
        <div class="characters">
            <?php echo displayCharacters($hpcharacters); ?>
        </div>
    </main>
</body>
</html>