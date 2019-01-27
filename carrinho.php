<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.css"/>
<script src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquerymobile/jquery.mobile-1.4.5.js"></script>
</head>
<body>
	<div data-role="header">
		<h1>Carrinho de Compras</h1>
    </div><br><br>
<?php 

ini_set("display_errors",0);

$produto=$_POST['compra'];

echo '<form method="post" action="carro.php"> ';
if ($produto == ""){
	echo "<p align=center><h3>O carrinho está vazio <a href=loja.php>
	clique aqui para começar a comprar</h3></p>";
} 
foreach($produto as $key => $value){
	if ($value == "A"){

	echo "Omega 3";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

else if ($value == "B"){
	echo "Fralda Huggies Turma da Mônica (G) - Tripla Proteção ";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

else if ($value == "C"){
	echo "Paracetamol";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

else if ($value == "D"){
	echo "Onglyza";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

else if ($value == "E"){
	echo "Papel Higienico - Neve Supreme";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

else if ($value == "F"){
	echo "Fralda Huggies Turma da Mônica (G) - Tripla Proteção ";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}


else if ($value == "G"){
	echo "Ômega 3";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

else if ($value == "H"){
	echo "Paracetamol";
	echo "<input type=number  placeholder=Quantidade name=quant[$value] min=1 max=250 /><br>";
}

}
echo "<br> <input type=submit value=Comprar />
</form>";

?>
</body>
</html>