function abrirMenu () {
	var sociais = document.getElementsByClassName("sociais-item");
	for (var i = sociais.length - 1; i >= 0; i--) {
		sociais[i].style.display = 'none';
	}
	botaoMenuAberto = document.getElementById('sanduiche-menu-aberto');
	botaoMenuAberto.style.display = 'inline-block';
	botaoMenuFechado = document.getElementById('sanduiche-menu-fechado');
	botaoMenuFechado.style.display = 'none';
	menu = document.getElementById('lista-menu');
	menu.style.display = 'block';
}
function fecharMenu () {
	fecharItem();
	fecharItemCarros();
	fecharItemTestes();
	botaoMenuAberto = document.getElementById('sanduiche-menu-aberto');
	botaoMenuAberto.style.display = 'none';
	botaoMenuFechado = document.getElementById('sanduiche-menu-fechado');
	botaoMenuFechado.style.display = 'inline-flex';
	menu = document.getElementById('lista-menu');
	menu.style.display = 'none';	
	menu2 = document.getElementById('lista-menu-clicada');
	menu2.style.display = 'none';
}
function abrirPesquisa() {
	lupa = document.getElementById('lupa');
	lupa.style.display = 'none';
	fechador = document.getElementById('fechador');
	fechador.style.display = 'inline-block';
	barra = document.getElementById('barra-pesquisa-responsivo');
	barra.style.display = 'inline-block';
	barra.style.width = '80px';
}
function fecharPesquisa() {
	lupa = document.getElementById('lupa');
	lupa.style.display = 'inline-block';
	fechador = document.getElementById('fechador');
	fechador.style.display = 'none';
	barra = document.getElementById('barra-pesquisa-responsivo');
	barra.style.display = 'none';
	barra.style.width = '0';	
}
function abrirItemCarros (){
	fecharItem();
	fecharItemTestes();
	fecharMenuMenor();
	item = document.getElementById('item-carro');
	item.style.width = '100%';
	item.style.height = '150px';
	item.style.display = 'block';
	listaClicada = document.getElementById('lista-menu-clicada');
		if (document.documentElement.clientWidth > 960) {
		listaClicada.style.display = 'flex';
	}
	else {
		listaClicada.style.display = 'block';
	}
	listaSemClick = document.getElementById('lista-menu');
	listaSemClick.style.display = 'none';
	listaItens = document.getElementById('lista-carros');
	setTimeout(function(){listaItens.style.display = 'flex'}, '120');	

}
function fecharItemCarros(){
	if (document.documentElement.clientWidth > 960) {
		abrirMenuMenor();
	}
	item = document.getElementById('item-carro');
	item.style.height = '0';
	listaClicada = document.getElementById('lista-menu-clicada');
	listaClicada.style.display = 'none';
	listaSemClick = document.getElementById('lista-menu');
	if (document.documentElement.clientWidth > 960) {
		listaSemClick.style.display = 'flex';
	}
	else {
		listaSemClick.style.display = 'block';
	}
	listaItens = document.getElementById('lista-carros');
	setTimeout(function(){listaItens.style.display = 'none'}, '10');	
}
function abrirItemTestes(){
	fecharItem();
	fecharItemCarros();
	fecharMenuMenor();
	item = document.getElementById('item-testes');
	item.style.width = '100%';
	item.style.height = 'auto';
	item.style.display = 'block';
	listaClicada = document.getElementById('lista-menu-clicada');
		if (document.documentElement.clientWidth > 960) {
		listaClicada.style.display = 'flex';
	}
	else {
		listaClicada.style.display = 'block';
	}
	listaSemClick = document.getElementById('lista-menu');
	listaSemClick.style.display = 'none';
}
function fecharItemTestes(){
	if (document.documentElement.clientWidth > 960) {
		abrirMenuMenor();
	}
	item = document.getElementById('item-testes');
	item.style.height = '0';
	item.style.display = 'none';
	listaClicada = document.getElementById('lista-menu-clicada');
	listaClicada.style.display = 'none';
	listaSemClick = document.getElementById('lista-menu');
	if (document.documentElement.clientWidth > 960) {
		listaSemClick.style.display = 'flex';
	}
	else {
		listaSemClick.style.display = 'block';
	}
}
function abrirItem(){
	fecharItemCarros();
	fecharItemTestes();
	fecharMenuMenor();
	item = document.getElementById('box-item-placeholder');
	item.style.display = 'block';
	item.style.width = '100%';
	item.style.height = '50px';
	item.style.background = '#fff'
	listaClicada = document.getElementById('lista-menu-clicada');
		if (document.documentElement.clientWidth > 960) {
		listaClicada.style.display = 'flex';
	}
	else {
		listaClicada.style.display = 'block';
	}
	listaSemClick = document.getElementById('lista-menu');
	listaSemClick.style.display = 'none';
}
function fecharItem(){
	if (document.documentElement.clientWidth > 960) {
		abrirMenuMenor();
	}
	item = document.getElementById('box-item-placeholder');
	item.style.height = '0';
	listaClicada = document.getElementById('lista-menu-clicada');
	listaClicada.style.display = 'none';
	listaSemClick = document.getElementById('lista-menu');
	if (document.documentElement.clientWidth > 960) {
		listaSemClick.style.display = 'flex';
	}
	else {
		listaSemClick.style.display = 'block';
	}
}

function aumentarTela(){
	if (document.documentElement.clientWidth > 960) {
		menu = document.getElementById('lista-menu');
		menu.style.display = 'flex';
		botaoMenuAberto = document.getElementById('sanduiche-menu-aberto');
		botaoMenuAberto.style.display = 'none';
		botaoMenuFechado = document.getElementById('sanduiche-menu-fechado');
		botaoMenuFechado.style.display = 'none';
	}
	else {
		fecharMenu();
	}
}
function mudarMenu(){
	fecharItemTestes();
	fecharItemCarros();
	fecharItem();
	if (document.documentElement.clientWidth > 960) {
		if (document.documentElement.scrollTop > 0) {
		fecharMenuMenor();
		main = document.getElementById('main');
		main.style.margin = '62px 0 0 0';
		menuPrincipal = document.getElementById('menuPrincipal');
		menuPrincipal.style.padding = '10px 40px';
		abril = document.getElementById('abril');
		abril.style.display = 'block';
		facebook = document.getElementById('facebook');
		facebook.style.display = 'block';
		twitter = document.getElementById('twitter');
		twitter.style.display = 'block';
		instagram = document.getElementById('instagram');
		instagram.style.display = 'block';
		abril2 = document.getElementById('abril2');
		abril2.style.display = 'block';
		facebook2 = document.getElementById('facebook2');
		facebook2.style.display = 'block';
		twitter2 = document.getElementById('twitter2');
		twitter2.style.display = 'block';
		instagram2 = document.getElementById('instagram2');
		instagram2.style.display = 'block';
		}
		else {
		abrirMenuMenor();
		fecharSociais();
		main = document.getElementById('main');
		main.style.margin = '';
		menuPrincipal = document.getElementById('menuPrincipal');
		menuPrincipal.style.padding = '';
		}
	}
}
function fecharSociais(){
		abril = document.getElementById('abril');
		abril.style.display = 'none';
		facebook = document.getElementById('facebook');
		facebook.style.display = 'none';
		twitter = document.getElementById('twitter');
		twitter.style.display = 'none';
		instagram = document.getElementById('instagram');
		instagram.style.display = 'none';
		abril2 = document.getElementById('abril2');
		abril2.style.display = 'none';
		facebook2 = document.getElementById('facebook2');
		facebook2.style.display = 'none';
		twitter2 = document.getElementById('twitter2');
		twitter2.style.display = 'none';
		instagram2 = document.getElementById('instagram2');
		instagram2.style.display = 'none';
}
function fecharMenuMenor(){
	menuMenor = document.getElementById('menuMenor');
	menuMenor.style.display = 'none';
}
function abrirMenuMenor(){
	menuMenor = document.getElementById('menuMenor');
	menuMenor.style.display = '';
}