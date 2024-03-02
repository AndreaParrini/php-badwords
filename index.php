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
        <form action="./results_form.php" method="get">
            <div class="mb-3">
                <label for="paragraph" class="form-label">insert a paragraph</label>        
                <textarea class="form-control" name="paragraph" id="paragraph"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="badword" class="form-label">insert a word to replace</label>        
                <input type="text" class="form-control" name="badword" id="badword">
            </div>
            
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</body>
</html>