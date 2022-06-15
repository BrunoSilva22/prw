<?php
include('conexao.php');
$tipo = $_GET['tipos'];

if ($tipo == 'Entrada') {
    $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'Entrada'";
} 

else if ($tipo == 'Saída') {
    $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'Saída'";
}

else if ($tipo == 'Saldo') {
    $sql = "SELECT  SUM(CASE WHEN tipo = 'Entrada' THEN valor ELSE 0 END) -
                    SUM(CASE WHEN tipo = 'Saída' THEN valor ELSE 0 END) AS valor FROM fluxo_caixa";
}

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
echo "Total: R$".number_format($row['valor'], 2, ",", ".") ;

?>

<br><br><a href="index.php">Voltar</a>