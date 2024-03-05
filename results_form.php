<?php 

$paragraph = trim($_POST['paragraph']);
$badword = trim($_POST['badword']);

if (isset($paragraph) && isset($badword)) {
    $replaceParagraph = str_replace($badword, '***' , $paragraph);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>
    <div class="container p-3">
        <?php if (!isset($paragraph) || !isset($badword)) : ?>
            <div class="bg-danger text-light p-3">
                <?= 'error'; ?>
            </div>
        <?php elseif (empty($paragraph) || empty($badword)) : ?>
            <div class="bg-warning p-3">
                <?= 'Attenzione, non hai inserito i campi richiesti' ?>
            </div>
        <?php else : ?>
            <div class="border p-3">
                <h4>Paragrafo originale</h4>
                <p>
                    <?= $paragraph; ?>
                </p>
                <span>
                    <?= 'Lunghezza paragrafo =' . " " . strlen($paragraph); ?>
                </span>
                
            </div>
            <div class="border p-3">
                <h4>Paragrafo censurato</h4>
                <p>
                <?= $replaceParagraph ;?>
                </p>
                <?= 'Lunghezza paragrafo =' . " " . strlen($replaceParagraph);?>
            </div>
            
        <?php endif; ?>
    </div> 
</body>
</html>