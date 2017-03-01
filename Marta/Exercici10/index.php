<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercici 10</title>
</head>
<br/>
<form action="add_task.php" method="POST" accept-charset="utf-8">
    Nova tasca: <input type="text" name="tasca" placeholder="Escriu la tasca">
    <input type="submit" name="submit" value="Enviar">
</form>
<br/><br/>
<form action="remove_task.php" method="GET" accept-charset="utf-8">
    Tasca a eliminar: <input type="text" name="tasca" placeholder="Escriu la tasca">
    <input type="submit" name="submit" value="Eliminar">
</form>

</body>
</html>