<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = 'SELECT * From fluxo_caixa where id =' .$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Alteração Fluxo de Caixa</h1>
    <div id="id">
        <form method="post" action="altera_fluxo_exe.php">
            <fieldset>
                <legend>Alteração</legend>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" value="<?php echo $row['data'] ?>" placeholder="Digite a data">
                </div>
                <div class="form-item">
                    <label id="tipo"></label>Tipo:
                    <input type="radio" name="tipos" value="Entrada"> Entrada
                    <input type="radio" name="tipos" value="Saida"> Saída
                    
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor'] ?>" placeholder="Digite o valor">
                </div>
                <div class="form-item">
                    <label for="historico">Histórico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico'] ?>" placeholder="Digite o historico">
                </div>
                <div>
                    <label id="cheque"></label>Cheque: 
                    <select id="cheque" name="cheque" value="<?php echo $row['cheque'] ?>">
                        <option>Selecionar</option>
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>

                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>