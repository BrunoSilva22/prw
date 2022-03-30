<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="exercicio3.php" method="post">
Velocidade Máxima: <input type=number name=velocidade><br> 
Velocidade Verificada: <input type=number name=verificada><br>
<input type=submit value="OK"></form>

</body>
</html>

<?php
	if(!empty($_POST["velocidade"])){
		if(!empty($_POST["verificada"])){
			$vmax = $_POST["velocidade"]; //passando o valor do campo 1 para a variável $vmax
			$vdir = $_POST["verificada"]; //passando o valor do campo 2 para a variável $vdir
	
			if($vdir<($vmax+($vmax/100*10))){
				echo 'A multa é de R$50,00';
			}
			else if($vdir>($vmax+($vmax/100*10)) & $vdir<($vmax+($vmax/100*20))){
				echo 'A multa é de R$100,00';
			}
			else if($vdir>($vmax+($vmax/100*20))){
				echo 'A multa é de R$200,00';
			}
			else {echo 'Velocidade verificada dentro da permitida';}
		}
	}
	
		
	
	
?>