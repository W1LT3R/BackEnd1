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
				<li><a href="index.php" title="Home" alt="Home">Home</a></li>
				<li><a href="dona_rita.php" title="Sobre" alt="Sobre">Sobre</a></li>
				<li><a href="contato.php" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Experimente as marmitas da Dona Rita!!</h1>
                    </header>
                    <p>Deliciosas e feitas com carinho.</p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Marmitas</h1>
				<p>Quem provou, adorou!!</p>
			</header>
			<?php
				foreach($menu as $key => $value){
			?>
			<article>
                <h2><?=$value['prato'];?></h2>
				<a href="detalhe_prato.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?> width="200px" height="150px"></a>
				<p>A partir de R$ <strong><?=$value['preco_m'];?></strong></p>
			</article>
			<?php
				}
			?>
			
		</section>

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

	</main>

	<footer>
	<p><center>Desenvolvido por Wilter da Silva Ferreira</center></p>
	</footer>
</body>
</html>