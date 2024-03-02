<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="./results_form.php" method="get">
        <label for="paragraph">insert a paragraph</label>        
        <input type="text" name="paragraph" id="paragraph">

        <label for="badword">insert a word to censure</label>        
        <input type="text" name="badword" id="badword">

        <button type="submit">Send</button>
    </form>
</body>
</html>