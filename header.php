<!DOCTYPE html>
<html>
<head>
	<title>Quatro Rodas | Teste Victor Tineo</title>
	<?php $dir = get_template_directory_uri() ?>
	<link rel="stylesheet" type="text/css" href="<?= $dir; ?>/style.css">
	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<meta charset="utf-8">
</head>
<body onresize="aumentarTela()" onscroll="mudarMenu()">
	<div class="filtro_responsivo">
	<header>

	<!-- cabecalho -->

		<div class="adv topo"></div>
		<nav class="menu_principal" id="menuPrincipal">
			<a><img src="<?php echo $dir; ?>/_imagens/logo.png" class="logo"></a>
			<span class="lupa" id="lupa" onclick="abrirPesquisa()"></span>
			<span class="sanduiche" id="sanduiche-menu-aberto" onclick="fecharMenu()">X</span>
			<span class="sanduiche" id="sanduiche-menu-fechado" onclick="abrirMenu()"></span>
			<div class="pesquisar-responsivo"><form><input type="text" name="pesquisa" placeholder="Pesquisar" id="barra-pesquisa-responsivo"> <span class="fecharPesquisa" id="fechador" onclick="fecharPesquisa()">X</span></form></div>
			<ul id="lista-menu" class="sem-click">
				<li class="sociais-item"><a><span class="sociais facebook" id="facebook2"></span></a></li>
				<li class="sociais-item"><a><span class="sociais instagram" id="instagram2"></span></a></li>
				<li class="sociais-item"><a><span class="sociais twitter" id="twitter2"></span></a></li>
				<li class="sociais-item"><a><span class="sociais abril" id="abril2"></span></a></li>
				<li><a onclick="abrirItemCarros()">Carros <span class="seta-baixo"></span></a></li>
				<li><a onclick="abrirItemTestes()">Testes  <span class="seta-baixo"></span></a></li>
				<li><a onclick="abrirItem()">Notícias <span class="seta-baixo"></span></a></li>
				<li><a onclick="abrirItem()">Auto-Serviço <span class="seta-baixo"></span></a></li>
				<li><a onclick="abrirItem()">Guia de compras <span class="seta-baixo"></span></a></li>
				<li><a onclick="abrirItem()">Tabela Fipe <span class="seta-baixo"></span></a></li>
				<li><a>Assine </span></a></li>
				<li class="pesquisar"><form><input type="text" name="pesquisa" placeholder="Pesquisar"><span class="lupa"></span></form></li>					
			</ul>
			<ul id="lista-menu-clicada" class="clicada">
				<li class="sociais-item"><a><span class="sociais facebook" id="facebook"></span></a></li>
				<li class="sociais-item"><a><span class="sociais instagram" id="instagram"></span></a></li>
				<li class="sociais-item"><a><span class="sociais twitter" id="twitter"></span></a></li>
				<li class="sociais-item"><a><span class="sociais abril" id="abril"></span></a></li>
				<li><a onclick="fecharItemCarros()">Carros <span class="seta-baixo"></span></a></li>
				<li><a onclick="fecharItemTestes()">Testes  <span class="seta-baixo"></span></a></li>
				<li><a onclick="fecharItem()">Notícias <span class="seta-baixo"></span></a></li>
				<li><a onclick="fecharItem()">Auto-Serviço <span class="seta-baixo"></span></a></li>
				<li><a onclick="fecharItem()">Guia de compras <span class="seta-baixo"></span></a></li>
				<li><a onclick="fecharItem()">Tabela Fipe <span class="seta-baixo"></span></a></li>
				<li><a>Assine </span></a></li>
				<li class="pesquisar"><form><input type="text" name="pesquisa" placeholder="Pesquisar"><span class="lupa"></span></form></li>	
			</ul>
		</nav>
			<div id="box-item-placeholder"></div>
			<div id="item-carro">
				<ul id="lista-carros">
				<div>
					<li><button>Ver todos os campos</button></li>
				</div>
				<div>
					<li class="carros"><a>Audi</a></li>
					<li class="carros"><a>Bentley</a></li>
					<li class="carros"><a>BMW</a></li>
					<li class="carros"><a>Chevrolet</a></li>
				</div>
				<div>
					<li class="carros"><a>Chrysler</a></li>
					<li class="carros"><a>Dodge</a></li>
					<li class="carros"><a>Ferrari</a></li>
					<li class="carros"><a>Fiat</a></li>
				</div>
				<div>
					<li class="carros"><a>Ford</a></li>
					<li class="carros"><a>Honda</a></li>
					<li class="carros"><a>Hyunday</a></li>
					<li class="carros"><a>Jac Motors</a></li>
				</div>
				<div>
					<li class="carros"><a>Jaguar</a></li>
					<li class="carros"><a>Jeep</a></li>
					<li class="carros"><a>Kia</a></li>
					<li class="carros"><a>Lamborghini</a></li>
				</div>
				</ul>
			</div>
			<div id="item-testes">
				<ul id="lista-testes">
				<div>
					<li><a href="">Ver tudo de testes <span class="seta-direita"></span></a></li>
					<li><a href="">Comparativos <span class="seta-direita"></span></a></li>
					<li><a href="">Impressões <span class="seta-direita"></span></a></li>
					<li><a href="">Longa duração <span class="seta-direita"></span></a></li>
					<li><a href="">Teste de pista <span class="seta-direita"></span></a></li>
				</div>
				<div>
					<li class="teste"><a><img src="<?php echo $dir; ?>/_imagens/teste1.jpg">Carro</a></li>
					<li class="teste"><a><img src="<?php echo $dir; ?>/_imagens/teste2.jpg">Carro</a></li>
					<li class="teste"><a><img src="<?php echo $dir; ?>/_imagens/teste3.jpg">Carro</a></li>
					<li class="teste"><a><img src="<?php echo $dir; ?>/_imagens/teste4.jpg">Carro</a></li>
					<li class="teste"><a><img src="<?php echo $dir; ?>/_imagens/teste5.jpg">Carro</a></li>
				</div>
				</ul>
			</div>
		<nav class="menu_secundario" id="menuMenor">
			<div class="img-area">	
				<img src="<?php echo $dir; ?>/_imagens/mais-acessado.png" class="mais-acessado">
			</div>
			<ul>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
				<li><a>item</a></li>
			</ul>
		</nav>
	</header>