<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css"/>
<script src="JQuery/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="carro.css">
<style type="text/css">
table{
	margin-top: 0px;
}
table tr td {
	text-align: center;
}
</style>
</head>
<body> 
	<header data-role="header">
			<h1>Carrinho de Compra</h1>
		</header>
<?php

ini_set("display_errors",0);


$quant=$_POST['quant'];
$total = 0;

echo "<p align=center><table BORDER RULES=all class=tabela width=80%>
	<tr><th COLSPAN=4>Você comprou:</th></tr><br> ";
echo "<tr><th width=100>Quantidade</th><th width=100>Produto</th>
	<th width=100>Valor da compra</th><th>Valor unitário</th></tr><br> ";

foreach($quant as $key => $value){
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",",".");
$total = number_format($total,2,",",".");

if($key == ""){
	echo "<tr><td COLSPAN=4>O carrinho está vazio 
	<a href=loja.php>clique aqui para começar a comprar</a></td></tr></table>";
}

else if($key=="A"){
$valor_unitario = 19.50;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",",".");
echo "<tr><td>$value</td>
	<td>Ômega 3</td> 
	<td>R$$preco</td>
	<td>R$$valor_unitario</td>
	</tr><br>";
$total += $preco;
}

else if($key == "B"){
$valor_unitario = 17.45;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",",".");
echo "<tr><td>$value</td>
	<td>Fralda Huggies Turma da Mônica (G) - Tripla Proteção</td>
	<td>R$$preco</td>
	<td>R$$valor_unitario</td>
	</tr><br>";
$total += $preco;
}

else if($key == "C"){
$valor_unitario = 3.30;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",",".");
echo "<tr><td>$value</td>  
	<td>Paracetamol</td>
	<td>R$$preco</td>
	<td>R$$valor_unitario</td>
	</tr><br>";
$total += $preco;
}

else if($key == "D"){
$valor_unitario = 25.40;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",",".");
echo "<tr><td>$value</td>
	<td>Onglyza</td> 
	<td>R$$preco</td>
	<td>R$$valor_unitario</td>
	</tr><br>";
$total += $preco;
}

else if($key == "E"){
$valor_unitario = 4.50;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",",".");
echo "<tr><td>$value</td>  
	<td>Papel Higienico - Neve Supreme</td>
	<td>R$$preco</td>
	<td>R$$valor_unitario</td>
	</tr><br>";
$total += $preco;
}

else if($key == "F"){
$valor_unitario = 17.45;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",","."); 
echo "<tr><td>$value</td> 
	<td>Fralda Huggies Turma da Mônica (G) - Tripla Proteção</td>
    <td>R$$preco</td>
    <td>R$$valor_unitario</td>
    </tr><br>";
$total += $preco;
}
else if($key == "G"){
$valor_unitario = 19.50;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",","."); 
echo "<tr><td>$value</td> 
	<td>Ômega 3</td>
    <td>R$$preco</td>
    <td>R$$valor_unitario</td>
    </tr><br>";
$total += $preco;
}

else if($key == "H"){
$valor_unitario = 3.30;
$preco=$value*$valor_unitario;
$preco = number_format($preco,2,",",".");
$valor_unitario = number_format($valor_unitario,2,",","."); 
echo "<tr><td>$value</td> 
	<td>Paracetamol</td>
    <td>R$$preco</td>
    <td>R$$valor_unitario</td>
    </tr><br>";
$total += $preco;
}

}
$total = number_format($total,2,",",".");
echo "<tr><th COLSPAN=4>O total a ser pago é:R$$total</th></tr></table></p>";

?>
	<a href="form.php" data-transition="flip"><button > Confirmar Compra</button></a>

</body>
</html>