<html>
<head>
	<meta charset = "utf8">
	<title>Dados do Cliente</title>
		<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css"/>
		<script src="JQuery/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="header">
<p style="color:#0099ff;text-align:center;font-size:36pt;font-family:arial">Sonaka Pharmacy</p>
</div>
<div data-role="content" data-transition="pop">
<p style="color:#000000; background:#0099ff;font-size:36pt;font-family:arial,garamond;text-align:justify; font-weight:bold; font-style:oblique;">Dados do Cliente</p>
<p style="background-color:#cccccc;">

	<?php
	
	echo '<b>Nome: </b>', @$nome=$_POST['nome'];
	echo '<br><b>Email: </b>', @$email=$_POST['e-mail'],'</b></br>';
	echo '<b>CPF: </b>',@$cpf=$_POST['cpf'],'</b><br>';
	echo '<b>RG: </b>', @$rg=$_POST['rg'];
	echo '<br><b>Telefone: </b>', @$tel=$_POST['tel'],'</b></br>';
	
 @$cliente_p=$_POST['cliente_p'];
 @$cliente_p2=$_POST['cliente_p'];
		
		if($cliente_p =="cliente personalizado"){
			echo "<b>Cliente personalizado</b>";

		}else if($cliente_p2 =="cliente comum"){
			echo "<b>Cliente comum</b>";

}?>
<div data-role="content">
<script type="text/javascript">alert( 'Cadastro realizado com sucesso!!!' );</script>
</div>
<div data-role="footer" data-theme="a" style="border:25px solid white; background-color:"#cccccc"; text-align:justify; ">
<div>
<?php
	$time = date('h:m');
	if(($time>=7.00)&&($time<=12.00)||($time>=13.00)&&($time<=18.00)){
	echo '<button data-role="button" data-icon="refresh"><a href="chat.php" >Entrar no Chat</a></button><br>';
}
else{
	echo '<button data-role="button" data-icon="refresh"><a href="chatoff.php" >Entrar no Chat</a></button><br>';
}
?>
<button data-role="button" data-icon="back"><a href="form_cliente_chart.php" >Voltar a página anterior</a></button><br>
<button data-role="button" data-icon="alert"><a href="loja.php">Clique em loja para saber as últimas promoções da Sonaka Pharmacy</button></p>
<button data-role="button" data-icon="alert"><a href="carrinho.php"   align = "center">Carrinho de Compras</a></button><br>
</div>
</div>
</body>
</html>