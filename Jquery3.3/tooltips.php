<html>
<head>
	<title>Trabalhando Tooltips</title>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('.dica + span')
	.css({display: 'none',
		border: '1px solid #add6ef',
		padding: '2px 4px',
		background: '#d6e2e5',
		marginLeft: '10px'
	});
	$('.dica').focus(function(){
		$(this).next().fadeIn(1500);
	}).blur(function(){
		$(this).next().fadeOut(1500);
	});
	});
</script>
</head>
<body>
<form action="" method="get" id="formulario">
	<label for="cpf">CPF</label><br />
	<input name="cpf" type="text" id="cpf" class="dica" /> <span>Somente números</span><br />
	<label for="data">DATA</label><br />
	<input name="data" type="text" id="data" class="dica" /> <span>Digite a data no formato dd/mm/yyyy</span>
</form>

</body>
</html>