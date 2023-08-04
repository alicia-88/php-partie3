<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
    <script src="./public/assets/js/main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php Les Boucles</title>
</head>

<body>
    <header>
        <img src="./public/assets/img/php_logo.svg" alt="logo du langage php">
        <div>
            <h1>Exercice 4</h1>
        </div>

    </header>
    <main>
        <div id="question">
            <h2><span>Question</span><span id="chevron"><i class="fa-solid fa-chevron-down"></i></span></h2>
            <p>Créer une variable et l'initialiser à 1.
                Tant que cette variable n'atteint pas 10, il faut :
                - l'afficher
                - l'incrementer de la moitié de sa valeur</p>
        </div>
        <hr>
        <div id="answer" class="displayNone">
            <h2><span>Réponse</span></h2>
            <div>
                <p><?php while ($number < 10) {
                        echo $number;
                        echo '<br>';
                        $number += $number / 2;
                    } ?></p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy;<?php echo date("Y") ?> &#x25CF; La Manu &#x25CF; Alicia-88</p>
    </footer>
</body>

</html>