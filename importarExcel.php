<!-- <!DOCTYPE html>
<html lang="en">

<h1 class="my-2">Importar Clientes</h1>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="processaExcel.php" enctype="multipart/form-data">
        <label>Arquivo: </label>
        <input type="file" name="arquivo" id:"arquivo"><br><br>
        <input type="submit" value="enviar">

        <label for="avatar">Choose a profile picture:</label>

        <input type="file"
       id="arquivo" name="avatar"
       >
    </form>
</body>

</html> -->

<html>
<head>
</head>
<body>
<form method="POST" action="processaExcel.php" enctype="multipart/form-data">
    <p>File to upload : <input type ="file" name = "UploadFileName"></p><br />
    <input type = "submit" name = "Submit" value = "Press THIS to upload">
</form>
</body>
</html>