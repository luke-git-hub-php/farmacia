<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css"/>
<script src="JQuery/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>

    <div data-role="header">
		<a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <p align="center"><img src="img/logomarca.png"></p>
	<form method="post" action="carrinho.php">

			<table align="center" border="0" bgcolor="white" cellspacing="9" cellpadding="9">
			<tr><th colspan=3><p align="center"><h1>PROMOÇÕES</h1></p></th>	</tr>
		<tr>
		<th>
		<img src="img/Fralofer.jpg" id="escolha" width="300px" height="200px">
		<h4>Fralda Huggies Turma da Mônica (G)<br>Tripla Proteção<br>
		</h4>
		<s>R$ 34,90</s><br>R$ 17,45<br>Comprar<br>
		<input type="checkbox" name="compra['F']" value="F">

		</th>
		<th>
		<img src="img/omeofer.jpg" id="escolha1" width="300px" height="200px">
		<h4>Ômega 3<br></h4>
		<s>R$ 30,00</s><br>R$ 19,50<br>Comprar
		<input type="checkbox"  name="compra['G']" value="G">
		</th>

		<th>
		<img src="img/parofer.jpg" id="escolha2" width="300px" height="200px">
		<h4>Paracetamol<br></h4>
		<s>R$ 8,20</s><br>R$ 3,30<br>Comprar
		<input type="checkbox"  name="compra['H']" value="H">
		</th></tr>

		<tr><td><input type="submit" value="Comprar" id="botao1"></td></tr>
		</table>
		</div>
    </div><!-- /header -->
    <div role="main" class="ui-content jqm-content jqm-fullwidth">
        
        <div data-demo-html="#panel-responsive-page1"></div><!--/demo-html -->
        
        
    </div><!-- /content -->
    <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">
        <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Fechar</a></li>
				<li><a href="loja.php">Loja</a></li>
				<li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="form_cliente_chart.php">Atendimento</a></li>	
        </ul>
    </div>
</form>
</body>
</html>