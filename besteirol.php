<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
<div class="container">
<nav class="pt-5" aria-label="breadcrumb">
  <ol id="comedia" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="comedia.php"><?php echo $vetIdioma[24][$idioma];?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[16][$idioma];?></li>
  </ol>
	</nav>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-1">
				 <h1 id="tbesteirol"><?php echo $vetIdioma[16][$idioma];?></h1>
				 <h6 id="subbesteirol"><?php echo $vetIdioma[18][$idioma];?></h6>
          </div>
	  </section>
	   <article class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2">
			  <img src="images/besteirol_um.jpg" id="imgbesteirol" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[300][$idioma];?>" title="clark gable it happened one night">
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <p class="text-justify"  id="pbesteirol1">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi finibus tempus mi laoreet scelerisque. Donec tincidunt erat felis, id dapibus ligula lacinia quis. Donec id sapien in leo gravida condimentum. Sed elementum vestibulum risus, ut sodales dui dignissim et. Donec cursus lorem vitae metus maximus auctor. Nam sed fermentum erat, ac bibendum nisl. Proin porta lacus placerat lorem condimentum condimentum. Vestibulum est est, cursus sit amet vehicula vitae, vulputate quis urna. </p>
				  <p class="text-justify"  id="pbesteirol1">Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis.</p>
          </div>
	  </article>
	 <section class="row">
	 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
		<h6> <?php echo $vetIdioma[19][$idioma];?></h6>
		 </div>
		</section>
		<div class="marketing-container">
		<section class="row">
			<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<img id="imgultimo" src="images/besteirol_dois.jpg" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[301][$idioma];?>" title="American Pie">
				<h3 class="text-center" id="tultimos"> American Pie </h3>
				<p class="text-justify"  id="pultimo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros. Sed vitae mauris nunc. Nullam aliquet nisi quam, nec fringilla mi lobortis in. Vivamus finibus egestas augue. </p>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<img id="imgultimo" src="images/besteirol_tres.jpg" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[302][$idioma];?>" title="Show de Vizinha">
				<h3 class="text-center" id="tultimos"><?php echo $vetIdioma[20][$idioma];?></h3>
				<p class="text-justify"  id="pultimo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros. Sed vitae mauris nunc. Nullam aliquet nisi quam, nec fringilla mi lobortis in. Vivamus finibus egestas augue. </p>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<img id="imgultimo" src="images/besteirol_quatro.jpg" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[303][$idioma];?>" title="O Balconista">
				<h3 class="text-center" id="tultimos"><?php echo $vetIdioma[21][$idioma];?></h3>
				<p class="text-justify"  id="pultimo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis sodales est ac ornare. Duis ac velit eros. Sed vitae mauris nunc. Nullam aliquet nisi quam, nec fringilla mi lobortis in. Vivamus finibus egestas augue. </p>
			</div>
		</section>
		</div>
		<section class="row">
		<h6><?php echo $vetIdioma[22][$idioma];?></h6>
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">Títulos</th>
      <th class="text-center" scope="col">Direção</th>
      <th class="text-center" scope="col">Classificação</th>
      <th class="text-center" scope="col">Ano</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center" scope="row">A Casa das Coelhinhas </th>
      <td class="text-center">Fred Wolf</td>
      <td class="text-center"><img src="images/5estrelas.jpg" alt="5 estrelas"></td>
      <td class="text-center">2008</td>
    </tr>
      <tr>
      <th class="text-center" scope="row">A Fraternidade</th>
      <td class="text-center">Warren P. Sonoda</td>
      <td class="text-center"><img src="images/5estrelas.jpg" alt="5 estrelas"></td>
      <td class="text-center">2016</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Aprovados</th>
      <td class="text-center">Steve Pink</td>
      <td class="text-center"><img src="images/5estrelas.jpg" alt="5 estrelas"></td>
      <td class="text-center">2006</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Caindo na Estrada</th>
      <td class="text-center">Todd Phillips</td>
      <td class="text-center"><img src="images/5estrelas.jpg" alt="5 estrelas"></td>
      <td class="text-center">2000</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Caindo na Estrada 2: O Jogo da Cerveja</th>
      <td class="text-center">Steve Rash</td>
      <td class="text-center"><img src="images/5estrelas.jpg" alt="5 estrelas"></td>
      <td class="text-center">2006</td>
    </tr>
	   <tr>
      <th class="text-center" scope="row">O Dono da Festa</th>
      <td class="text-center">Walt Becker</td>
      <td class="text-center"><img src="images/5estrelas.jpg" alt="5 estrelas"></td>
      <td class="text-center">2002</td>
    </tr>
  </tbody>
</table>
</section>
	</div>
<nav id="submenu" class="navbar-dark bg-dark">
		 <div class="container">
			  <section class="row">
  <div class="col-md-6 col-lg-5 offset-md-3">
	 <h3 id="relacionados"><?php echo $vetIdioma[29][$idioma];?></h3>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link"  href="parodia.php">Paródia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="noticias.php">Notícias</a>
  </li>
	<li class="nav-item">
    <a class="nav-link" href="entrevistas.php">Entrevistas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="romanceadolescente.php">Romace Adolescente</a>
  </li>
	<li class="nav-item">
    <a class="nav-link" href="fantasiaromantica.php">Fantasia Romantica</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="animacao.php">Animação</a>
  </li>
</ul>
		 </div>
		</section>
		 </div>
	</nav>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>