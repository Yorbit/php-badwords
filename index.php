<?php 
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquid, natus vitae quo enim totam corrupti, laudantium voluptatem nihil, quam blanditiis tempore aspernatur! Incidunt labore recusandae, quas iusto vitae iste. Lorem dolor!';
    $badword = 'em';
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
            echo $paragraph;
        ?>
    </p>
    <h5>
        Lunghezza testo: 
        <?php 
             echo strlen($paragraph);
        ?>
    </h5>
    <h5>Parola ricercata: 
        <?php 
            echo $badword;
        ?>
    </h5>
    <p>
        <?php 
            $word_censored = str_replace($badword, '***', $paragraph);
            echo $word_censored;
        ?>
    </p>
    <h5>
        Lunghezza testo: 
        <?php 
             echo strlen($word_censored);
        ?>
    </h5>
</body>
</html>