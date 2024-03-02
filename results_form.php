<?php 

if (isset($_GET['paragraph']) && isset($_GET['badword'])) {
    $replaceParagraph = str_replace($_GET['badword'], '***' , $_GET['paragraph']);
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
        <?php if (!isset($_GET['paragraph']) || !isset($_GET['badword'])) : ?>
            <div class="bg-danger text-light p-3">
                <?= 'error'; ?>
            </div>
        <?php elseif (empty($_GET['paragraph']) || empty($_GET['badword'])) : ?>
            <div class="bg-warning p-3">
                <?= 'Attenzione, non hai inserito i campi richiesti' ?>
            </div>
        <?php else : ?>
            <div class="border p-3">
                <h4>paragrafo originale</h4>
                <p>
                    <?= $_GET['paragraph']; ?>
                </p>
                <span>
                    <?= 'Lunghezza paragrafo =' . " " . strlen($_GET['paragraph']); ?>
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