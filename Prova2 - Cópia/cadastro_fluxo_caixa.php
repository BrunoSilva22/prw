<?php
    include('conexao.php');
    $data = $_POST['data'];
    $tipo = $_POST['tipos'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    $erro = false;

    if (empty($data)){
        $erro = true;
    }
    if (empty($tipo)){
        $erro = true;
    }
    if (empty($valor)) {
        $erro = true;
    }
    if (empty($historico)){
        $erro = true;
    }
    if ($cheque == "Selecionar"){
        $erro = true;
    }

    if($erro) {
        echo "Preencha os campos corretamente!!";
    } else {
        $sql = "INSERT INTO fluxo_caixa (data,tipo,valor,historico,cheque) 
	        VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
	    
	    $result = mysqli_query($con, $sql);
	    if($result)
		    echo "Dados inseridos com sucesso";
	    else
		    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
    }
?>