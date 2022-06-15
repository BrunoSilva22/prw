<?php
    include('conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipos'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];	
    $cheque = $_POST['cheque'];		

    $sql = "UPDATE fluxo_caixa SET
        $data = 'data',
        $tipo = 'tipos',
        $valor = 'valor',
        $historico = 'historico',		
        $cheque = 'cheque',	
        WHERE id = $id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados alterados com sucesso";
    } else {
        echo "<br><br>Dados não alterados: ".mysqli_error($con);
    }
?>