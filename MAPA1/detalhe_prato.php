<?php
	include("marmitas.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <title>Rita Marmita</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Sobre" alt="Sobre">Sobre</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>

		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Marmitas</h1>
				<p>Quem provou, adorou!!</p>
			</header>
			<?php
                $id = $_GET['id'];

				foreach($menu as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
                <h2><?=$value['prato'];?></h2>
				<a href="#"><img src=<?=$value['imagem'];?> width="200px" height="150px"></a>
				<p><?=$value['descricao'];?><br>Tamanhos:<br>Média - R$<?=$value['preco_m'];?><br>Grande - R$<?=$value['preco_g'];?><br><br></p>
				<h3>Peça AGORA! Ligue: 11 98765-4321</h3>
			</article>
			<?php
                    }
				}
			?>
			
		</section>

		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Experimente também:</h1>
			</header>
			<?php
				foreach($menu as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['prato'];?></h2>
	    	</article>
			<?php
                    }
				}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Fique por dentro das novidades e promoções!!</h1>
                    <p>Registre-se com seu nome e e-mail para se manter atualizado</p>.
                </header>
                <form>
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="E-mail">
                    <button>Registrar</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<p>Desenvolvido por Wilter da Silva Ferreira</p>
	</footer>
</body>
</html>