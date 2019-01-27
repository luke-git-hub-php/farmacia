<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
  <meta="viewport" content="width=device-width, initial-scale=100">
  <title>Page Title</title> 
  <link rel="stylesheet" href="JQM/jquery.mobile-1.4.5.css" />
  <script src="jquery-1.10.2.js"></script>
  <script src="JQM/jquery.mobile-1.4.5.js"></script>
  <script type="text/javascript">
  	function telefone(mascara){
  		if(mascara.value.length==0)
  			mascara.value = '(' + mascara.value;
  		if (mascara.value.length == 3)
  			mascara.value = mascara.value + ')';
		if (mascara.value.length == 8)
			mascara.value = mascara.value + '-';


  	}
  </script>
	</head>

<body>
		<div data-role="page">
		<header data-role="header">
			<h1>Formulário de Compra</h1>
		</header>

		<div data-role="content">
			<form method="post">
				<label for="nome">Digite seu nome:</label>
				<input type="text" name= "nome" placeholder="Digite seu nome">
				<label for="tel">Telefone:</label>
				<input type= "text" name= "tel" value="" onkeypress="telefone(this);" maxlength="13" placeholder="(xx)xxxx-xxxx">
				<label for="email">Email:</label>
				<input type="text" name="email" placeholder="nome@example.com">
				<input type="submit" value="Enviar">
			
<?php

@$nome = $_POST['nome'];
@$tel = $_POST['tel'];
if (($nome == "")||($tel == "")){
	echo " ";
}else{
echo "Nome: $nome<br>";
echo "Telefone: $tel<br>";
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Email: $email";
		
	}else{
		$email = "Email inválido";
		echo $email;
	}
	if ($email != "Email inválido"){
		echo "<script language=javascript>alert( 'Compra efetuada com sucesso' );</script>";
	}
}
?>
		</form>
	</div>
	</div>
</body>
</html>