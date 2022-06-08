<?php
    include('conexao.php');
    $tipo = $_POST['tipos'];

    if ($tipo == 'Entrada') {
        echo "<td>" . $row['valor'] . "from fluxo_caixa where tipo = 'entrada'" . "</td>";
    }
?>