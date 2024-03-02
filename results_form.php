<?php 

$replaceParagraph = str_replace($_GET['badword'], '***' , $_GET['paragraph']);

if (!isset($_GET['paragraph']) && !isset($_GET['badword'])) {
    echo 'error';
}elseif (empty($_GET['paragraph']) || empty($_GET['badword'])){
    echo 'Attenzione, non hai inserito i campi richiesti';
}else{
    echo $_GET['paragraph'] . " " . strlen($_GET['paragraph']);
    echo $replaceParagraph . " " . strlen($replaceParagraph);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
</body>
</html>