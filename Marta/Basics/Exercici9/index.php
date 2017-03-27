<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercici 9</title>
</head>
<body>
    <form action="exercici9.php" method="POST" accept-charset="utf-8">
        Nom: <input type="text" name="nom" placeholder="Escriu el teu nom">
        Email: <input type="email" name="email" placeholder="Escriu el teu email">
        Edat: <input type="number" name="edat" placeholder="Escriu la teva edat">
        <input type="submit" name="submit" value="Enviar">
    </form>
    </br></br>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000    ">
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>

</body>
</html>