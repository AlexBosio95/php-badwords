<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        $word = $_POST['word'];

        $wordcrypt = str_replace($word, '***', $word)
    ?>

    <h1>La tua parola da cancellare è <?php echo $wordcrypt; ?></h1>

</body>

</html>