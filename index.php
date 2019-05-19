<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>load files</title>
</head>
<body>
    
    <h2>Please choose file to upload</h2>

<form method="POST" enctype="multipart/form-data" action ="load.php">
<label for="fileSelect">Filename: </label>

<input type="file" name="file" id="fileSelect" value="Submit"/>
<input type="submit" name="submit" value="Upload"/>
<b><strong><mark>up to 10 MB.</mark></strong></b>


</form>





</body>
</html>