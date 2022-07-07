<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <?php
    $myParagraph = 'He was an expert but not in a discipline that anyone could fully appreciate. He knew how to hold the cone just right so that the soft server ice-cream 
    fell into it at the precise angle to form a perfect cone each and every time. It had taken years to perfect and he could now do it without even putting any thought behind it. 
    Nobody seemed to fully understand the beauty of this accomplishment except for the new worker who watched in amazement.';

    $userWord = '';

    $paragrafoCensurato = '';
    
    if (isset($_GET["user-word"])){
        $userWord = $_GET["user-word"];
    };
    ?>

    <p>
        <?php echo $myParagraph ?>
    </p>
    <p>
        Lunghezza del paragrafo: <?php echo strlen($myParagraph) ?> caratteri (spazi inclusi)
    </p>

    <?php
        if ($userWord !== ''){
            $paragrafoCensurato = str_ireplace($userWord, '***', $myParagraph);
            echo '<h5>Paragrafo censurato: </h5>';
            echo '<p>' . $paragrafoCensurato . '</p>';
            echo '<p>' . 'Lunghezza del paragrafo: ' . strlen($paragrafoCensurato) . ' caratteri (spazi inclusi)</p>';
        }
    ?>
</body>
</html>