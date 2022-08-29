<?php 
    $paragraphText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquid, natus vitae quo enim totam corrupti, laudantium voluptatem nihil, quam blanditiis tempore aspernatur! Incidunt labore recusandae, quas iusto vitae iste. Lorem dolor!';
    $userWord = $_GET['word'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    <h1>PHP BADWORDS</h1>
    <p>
        <?php
            echo $paragraphText;
        ?>
    </p>
    <h5>
        Lunghezza testo: 
        <?php 
             echo strlen($paragraphText);
        ?>
    </h5>
    <h5>Parola ricercata: 
        <?php 
            echo $userWord;
        ?>
    </h5>
    <p>
        <?php 
            $wordCensored = str_replace($userWord, '***', $paragraphText);
            echo $wordCensored;
        ?>
    </p>
    <h5>
        Lunghezza testo: 
        <?php 
             echo strlen($wordCensored);
        ?>
    </h5>
</body>
</html>