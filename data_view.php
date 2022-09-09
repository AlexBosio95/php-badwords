<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word</title>
</head>

<body>

    <?php
        $word = $_POST['word'];
        $text = 'Lorem ipsum dolor sit amet';
        $textcrypt = str_replace($word, '***', $text)
    ?>

    <p>Testo con parola criptata: <?php echo $textcrypt; ?></p>

</body>

</html>