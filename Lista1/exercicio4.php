<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="exercicio4.php" method="post">
Preço do produto: <input type=number name=preco><br> 
<input type=submit value="OK"></form>

</body>
</html>

<?php
	if(!empty($_POST["preco"])){
		$preco = $_POST["preco"]; //passando o valor do campo 1 para a variável $a
	
		$avista = $preco - ($preco/100*10);
		echo 'O preço do produto á vista é de R$' . $avista;
		
		$sjuros = $preco / 5;
		echo '<br>O preço da parcela em 5x sem juros é de R$' . $sjuros;
		
		$cjuros = ($preco + ($preco/100*20)) / 10;
		echo '<br>O preço da parcela em 10x com juros é de R$' . $cjuros;
	}
?>