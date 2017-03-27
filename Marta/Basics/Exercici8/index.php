<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercici 8</title>
</head>
<body>
    <form id="registrar" action="exercici8.php" method="POST" accept-charset="utf-8">
        Nom: <input type="text" name="nom" placeholder="Escriu el teu nom">
        Email: <input type="email" name="email" placeholder="Escriu el teu email">
        Edat: <input type="number" name="edat" placeholder="Escriu la teva edat">
        <input type="submit" name="submit" value="Enviar">
    </form>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('@registrar').submit(function(event) {
               var data = $(this).serialize();
               $.ajax({
                   type: 'POST',
                   url: 'exercici8.php',
                   data: data,
                   dataType: 'json',
                   encode: true
               }).done (function (response) {
                   console.log(response);
               })
                event.preventDefault();
            });
        });
    </script>

</body>
</html>