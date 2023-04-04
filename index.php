<?php 
$word= $_POST['bad_word'];
$bad_words= ['figa', 'carajo', 'pucchiacca', 'Fessa']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p><?php echo str_replace($bad_words, '***', $word)?></p>
    <p><?php echo ucwords($word);?></p>
    <p>La frase è composta da <?php echo strlen($word);?> lettere</p>
</body>
</html>



