<html>
<head>
<meta charset="utf-8">
	<title>Sonaka Pharmacy</title>
	<link rel = "stylesheet" type = "text/css" href = "estilosite.css">
	<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css"/>
	<script src="JQuery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>

    	<div data-role="page" data-theme="a">
		<div data-role="header">
		<h1><strong>Cadastre-se no Chat de Atendimento</strong></h1>
		   
		<a href="loja.php" type="button" data-icon="home">Loja</a>
		</div><!--/header -->
		<div data-role="content" >
			<form action="dados_cliente_chart.php" method="POST" id="form_clientes_chart" data-transition="flow">
					<h1><strong>Formulário de Cadastro no Chat</strong></h1>
				<label>
				Digite seu nome completo para cadastro:
					<input name="nome" type="text" size="20"  />
				</label>
				<label>
				Digite seu endereço de E-mail:
					<input type="text" size="40" value="" id="e-mail" name="e-mail" />
				</label>
				<label>
				CPF:
					<input type="text" name="cpf" value="" size="40" />
				</label>
				<label>
				RG:
					<input type="text" name="rg" value="" size="40" />
				</label>
				<label>
				Telefone(fixo) ou celular:
					<input type="text" name="tel" value="" size="40" />
				</label>
				
				<div data-role="content">
	
		<div data-role="collapsible">
		<h3>Informações adicionais</h3>
			
		<fieldset data-role="controlgruop">
		<lengend>Tipo de Cliente</lengend>
 <input type="radio" name="cliente_p" id="cliente_p" value="cliente personalizado" />	
 <label for="cliente_p">Cliente personalizado</label>
 <input type="radio" name="cliente_p" id="cliente_p2" value="cliente comum" />	
 <label for="cliente_p2">Cliente comum</label><br>
 <lengend>Receber informações no seu E-mail</lengend>
 <div data-role="content">
	<input type="checkbox" name="checkbox-1" id="checkbox_0" />
	<label for="checkbox_0">Sim</label>
	<input type="checkbox" name="checkbox-1" id="checkbox_2" />
	<label for="checkbox_2">Não</label>
	</div><!--/content-->
	</fieldset>
	</div>
</div><!--/content-->
				<input type="submit" value="Enviar" data-icon="check" >
				</form>
		</div><!--/content-->
		<div data-role="footer"><!-- rodape -->
		<p style="color:#0099ff; text-align: center;">Agradecemos sua confiança</p>
		</div><!-- rodape -->
			</div><!--page-->
	 
</body>
</html>