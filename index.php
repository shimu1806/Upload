<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload arquivo</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Upload</h1>
        <div>
            <form action="./envia.php" method="post" enctype="multipart/form-data">
                <label>Selecione a imagem</label>
                <input type="file" name="arquivo">
                <input type="submit" class="Enviar">

            </form>
        </div>

        <h2>Arquivos enviados</h2>
        <?php require 'lista.php';?>

</body>
</html>