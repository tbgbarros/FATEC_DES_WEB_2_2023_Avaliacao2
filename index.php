<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de candidatos</title>
</head>
<body><fieldset>
    <form action="connect.php" method="post"><br>
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="rg_cpf">CPF ou RG:</label>
        <input type="text" id="rg_cpf" name="rg_cpf"><br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>
        </fieldset>

        <fieldset>
            <legend>Estudou em escola publica?</legend>
            <div>
            <input type="radio" id="1" name="1">
            <label >SIM</label>
            <input type="radio" id="0" name="0">
            <label >NAO</label>
            </div>
        </fieldset>


        <input type="submit" value="Enviar"><br>
        <br>
        <div class="form-group">
            <a href="list.php" class="btn btn-danger">Listar candidatos</a><br>
        </div>
        <br>
        <div class="form-group">
            <a href="apagar.php" class="btn btn-danger">Apagar candidatos</a><br>
        </div>
    </form>


</body>
</html>
