<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css"/>
<script src="JQuery/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="index.css">

</head>

<body>

    <div data-role="header">
		<a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <p align="center"><img src="logomarca.png"></p>
		<form method="POST" action="carrinho.php">
	
		<table align="center" border="0" bgcolor="white" color="black" cellspacing="9" cellpadding="9">

<tr>
<th>
<img src="img/omega3.jpg" id="remedio1" width="300px" height="300px">
<h4>Ômega 3<br></h4>
<s>R$ 30,00</s><br>R$ 19,50  <br>Comprar
<input type="checkbox"  name="compra['A']" value="A">
</th>


<th>
<img src="img/Fralda.jpg" id="remedio2" width="300px" height="300px">
<h4>Fralda Huggies Turma da Mônica (G)<br> Tripla Proteção <br></h4>
<s>R$ 34,90</s><br>R$ 17,45  <br>Comprar
<input type="checkbox"  name="compra['B']" value="B">
</th>


<th>
<img src="img/Paracetamol.jpg" id="remedio3" width="300px" height="300px">
<h4>Paracetamol<br></h4>
<s>R$ 8,20</s><br>R$ 3,30<br>Comprar
<input type="checkbox"  name="compra['C']" value="C">
</th></tr>

<tr>
<th>
<img src="img/onglyza.jpg" id="remedio4" width="300px" height="300px">
<h4>Onglyza<br></h4>
R$ 25,40  <br>Comprar
<input type="checkbox"  name="compra['D']" value="D">
</th>


<th>
<img src="img/Papel.png" id="remedio5" width="300px" height="300px">
<h4>Papel Higienico<br>Neve Supreme<br></h4>
<s>R$ 6,00</s><br>R$ 4,50  <br>Comprar
<input type="checkbox"  name="compra['E']" value="E">
</th>
</tr>
<br><br>

<tr><th>
<input type= "submit" value= "Adicionar ao carrinho de compra">
</th></tr>
</table>

</form>
        
    </div><!-- /header -->
    <div role="main" class="ui-content jqm-content jqm-fullwidth">
        
     <div data-demo-html="#panel-responsive-page1"></div><!--/demo-html -->
        
    </div><!-- /content -->
    <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">
        <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Fechar</a></li>
                <li><a href="index.php">Menu</a></li>
				<li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="form_cliente_chart.php">Atendimento</a></li>	
        </ul>
    </div>

</body>
</html>