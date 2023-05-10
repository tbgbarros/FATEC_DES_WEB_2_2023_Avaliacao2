

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de candidatos</title>
</head>
<body><fieldset>
<?php
require_once('function.php');

$objeto1 = new DBConnect(); 
$del = $_POST['id'];



if ($objeto1->apagar_candidato($del)){
    print("Apagado com sucesso ! ...");
};

unset($objeto1);

$objeto1 = new DBConnect(); 
?>
    <form action="" method=""><br>

        <div class="form-group">
            <a href="index.php" class="btn btn-danger">INICIO</a><br>
        </div>
    </form>


</body>
</html>
