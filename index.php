<?php 
	get_header();
?>

	<main id="main">
		<section class="linha_noticias_principais">
			<div class="noticia_principal_1">
				<a href="#" class="link-noticia"><img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-principal.jpg" alt="">
			</div></a>
			<div class="parte">
				<div class="noticias_principais">
					<div class="noticia_principal_2">
							<a href="#" class="link-noticia"><img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-topo-esquerda.jpg"></a>
					</div>
					<div class="noticia_principal_3">
							<a href="#" class="link-noticia"><img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-baixo-esquerda.jpg"></a>
					</div>
				</div>
			</div>
			<div class="parte quebra">
				<div class="adv_pequenos">
					<div class="banner_adv_pequeno">
						<a href="#" class="link-noticia"><img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-topo-direita.jpg"></a>
					</div>
					<div class="noticia_promovida">
							<a href="#" class="link-noticia"><img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-baixo-direita.jpg"></a>
					</div>
				</div>
			</div>
		</section>
		<div class="quebra"></div>
		<section class="noticias_inferior">
			<div class="quarto">
			<a href="">
					<img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-inferior-01.png">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					</p>
					<!-- <p class="categoria"></p> -->
			</a>
				<a class="relacionado"><span class="mais">+ </span>Troller T4 x Jeep Renegade</a>
			</div>
			<div class="quarto">
			<a href="">
					<img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-inferior-02.png">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					</p>
					<!-- <p class="categoria"></p> -->
			</a>
				<a class="relacionado"><span class="mais">+ </span>Troller T4 x Jeep Renegade</a>
			</div>
			<div class="quarto">
			<a href="">
					<img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-inferior-03.png">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					</p>
					<!-- <p class="categoria"></p> -->
			</a>
				<a class="relacionado"><span class="mais">+ </span>Troller T4 x Jeep Renegade</a>
			</div>
			<div class="quarto">
			<a href="">
					<img src="<?php echo get_template_directory_uri() ?>/_imagens/noticia-inferior-04.png">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					</p>
					<!-- <p class="categoria"></p> -->
			</a>
				<a class="relacionado"><span class="mais">+ </span>Troller T4 x Jeep Renegade</a>
			</div>
		</section>
	</main>
<?php include('footer.php'); ?>