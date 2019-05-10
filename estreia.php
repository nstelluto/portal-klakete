<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	require_once('menu.php');
?>

	<div class="container">
		<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[2][$idioma];?></li>
  </ol>
	</nav>
	</section>
		<section id="estreia" class="pt-1">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="testreia"><?php echo $vetIdioma[67][$idioma];?></h1>
				 <h6 id="subestreia"><?php echo $vetIdioma[68][$idioma];?></h6>
          </div>
		   </div>
	  </section>
		<div class="marketing-container">
		 <section class="pt-4">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
			 <iframe width="465" height="350"  class="center" src="https://www.youtube-nocookie.com/embed/FvAtEiP_MrE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 class="text-center" id="tultimos"><a id="tituloindex" href="https://www.youtube-nocookie.com/embed/FvAtEiP_MrE"><?php echo $vetIdioma[69][$idioma];?></a></h3>
				<p class="text-center" id="pestreia">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros.</p>
				<p class="text-center" id="pestreia2"> Direção:Steve McQueen (II). </p>
			    <p class="text-center" id="pestreia3"> Gênero: Suspense. </p>
			    <p class="text-center" id="pestreia4"> Data de lançamento: 29/11/2018. </p>
			</div>
			<div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
			<iframe width="465" height="350" src="https://www.youtube-nocookie.com/embed/LIV4-u8P8Pk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 class="text-center" id="tultimos"><a id="tituloindex" href="https://www.youtube-nocookie.com/embed/LIV4-u8P8Pk"><?php echo $vetIdioma[70][$idioma];?></a></h3>
				<p class="text-center" id="pestreia">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros.</p>
				<p class="text-center" id="pestreia2"> Direção: Diederik Van Rooijen. </p>
			    <p class="text-center" id="pestreia3"> Gênero: Terror. </p>
			    <p class="text-center" id="pestreia4"> Data de lançamento: 29/11/2018. </p>
			</div>
			 </div>
		</section>
		</div>
			<div class="marketing-container">
		 <section class="pt-4">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
			 <iframe width="465" height="350" src="https://www.youtube-nocookie.com/embed/CD-SZObz7QU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 class="text-center" id="tultimos"><a id="tituloindex" href="https://www.youtube-nocookie.com/embed/CD-SZObz7QU"><?php echo $vetIdioma[71][$idioma];?></a></h3>
				<p class="text-center" id="pestreia">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros.</p>
				<p class="text-center" id="pestreia2"> Direção: Sean Anders. </p>
			    <p class="text-center" id="pestreia3"> Gênero: Comédia. </p>
			    <p class="text-center" id="pestreia4"> Data de lançamento: 29/11/2018. </p>
			</div>
			<div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
			<iframe width="465" height="350" src="https://www.youtube-nocookie.com/embed/wX1s187VUWk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 class="text-center" id="tultimos"><a id="tituloindex" href="https://www.youtube-nocookie.com/embed/wX1s187VUWk"><?php echo $vetIdioma[72][$idioma];?></a></h3>
				<p class="text-center" id="pestreia">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros.</p>
				<p class="text-center" id="pestreia2"> Direção: Otto Bathurst. </p>
			    <p class="text-center" id="pestreia3"> Gênero: Aventura. </p>
			    <p class="text-center" id="pestreia4"> Data de lançamento: 29/11/2018. </p>
			</div>
			 </div>
		</section>
		</div>
			<div class="marketing-container">
		 <section class="pt-4">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
			 <iframe width="465" height="350" src="https://www.youtube-nocookie.com/embed/3FOIRVb9juA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 class="text-center" id="tultimos"><a id="tituloindex" href="https://www.youtube-nocookie.com/embed/3FOIRVb9juA"><?php echo $vetIdioma[73][$idioma];?></a></h3>
				<p class="text-center" id="pestreia">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros.</p>
				<p class="text-center" id="pestreia2"> Direção: Dan Fogelman. </p>
			    <p class="text-center" id="pestreia3"> Gênero: Drama. </p>
			    <p class="text-center" id="pestreia4"> Data de lançamento: 29/11/2018. </p>
			</div>
			<div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
			 <iframe width="465" height="350" src="https://www.youtube-nocookie.com/embed/qLwdSUdhY_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 class="text-center" id="tultimos"><a id="tituloindex" href="https://www.youtube-nocookie.com/embed/qLwdSUdhY_w"><?php echo $vetIdioma[74][$idioma];?></a></h3>
				<p class="text-center" id="pestreia">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros.</p>
				<p class="text-center" id="pestreia2"> Direção: Phil Johnston, Rich Moore. </p>
			    <p class="text-center" id="pestreia3"> Gênero: Animação. </p>
			    <p class="text-center" id="pestreia4"> Data de lançamento: 03/01/2019. </p>
			</div>
			 </div>
		</section>
		</div>
</div>
<nav id="submenu" class="navbar-dark bg-dark">
	 	 <div class="container">
			  <div class="row">
  <div class="col-md-6 col-lg-5 offset-md-3">
	 <h3 id="relacionados">Relacionados</h3>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a href="drama.php">Drama</a>
  </li>
  <li class="nav-item">
    <a href="animacao.php">Animação</a>
  </li>
	<li class="nav-item">
    <a href="comedia.php">Comédia</a>
  </li>
  <li class="nav-item">
    <a href="ficcao.php">Ficção Cientifica</a>
  </li>
	<li class="nav-item">
    <a href="criticas.php">Critícas</a>
  </li>
  <li class="nav-item">
    <a href="noticias.php">Notícias</a>
  </li>
</ul>
				  </div>
		 </div>
	 </div>
	</nav>
<?php
	// incluindo rodapé da página
	include_once('footer.php');
?>