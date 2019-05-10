<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
   <div class="container">
   <section class="pt-5">
<nav aria-label="breadcrumb">
  <ol id="romance" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="romance.php">ROMANCE</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[44][$idioma];?></li>
  </ol>
	</nav>
	</section>
	   <section id="parodia" class="pt-1">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tparodia"><?php echo $vetIdioma[44][$idioma];?></h1>
				 <h6><?php echo $vetIdioma[43][$idioma];?></h6>
          </div>
		   </div>
	  </section>
	<section id="parodia1" class="pt-4">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <img src="images/romance_alc_um.jpg" id="imgbesteirol" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[316][$idioma];?>" title="Brilho Eterno de uma Mente Sem Lembrança">
          </div>
		       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <p class="text-justify"  id="pparodia1">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi finibus tempus mi laoreet scelerisque. Donec tincidunt erat felis, id dapibus ligula lacinia quis. Donec id sapien in leo gravida condimentum. Sed elementum vestibulum risus, ut sodales dui dignissim et. Donec cursus lorem vitae metus maximus auctor. Nam sed fermentum erat, ac bibendum nisl. Proin porta lacus placerat lorem condimentum condimentum. Vestibulum est est, cursus sit amet vehicula vitae, vulputate quis urna. </p>
				<p class="text-justify"  id="pparodia1">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis.</p>
          </div>
		   </div>
	  </section>
	 <section class="pt-4">
	 <div class="row">
	 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<h6><?php echo $vetIdioma[19][$idioma];?></h6>
		 </div>
		 </div>
		</section>
	<section id="section3" class="pt-4">
	   <div class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-5">
		   <img class="rounded-circle mx-auto d-block" src="images/romance_alc_dois.jpg" alt="<?php echo $vetIdioma[317][$idioma];?>" title="Com Amor, Simon">
			  	<h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[46][$idioma];?></h3>
          </div>
		  <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-7">

			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus.</p>
			<p class="text-justify" id="pparodia">Duis a neque eget justo rutrum efficitur et eu mi. Fusce nec mauris nec ligula rhoncus facilisis. Pellentesque interdum, metus sed fermentum dapibus, ante erat vestibulum arcu, sed lacinia diam urna in erat. Vivamus tempor, felis feugiat volutpat vulputate, arcu lacus pharetra orci, et dictum arcu elit non ex. </p>
          </div>
		   </div>
	  </section>
	 		<section id="section3" class="pt-4">
	   <div class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-5">
		   <img class="rounded-circle mx-auto d-block" src="images/romance_alc_tres.jpeg" alt="<?php echo $vetIdioma[318][$idioma];?>" title="A Culpa é das Estrelas">
		<h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[47][$idioma];?></h3>
          </div>
		  <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-7">
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti.Sed non vulputate metus.</p>
			<p class="text-justify" id="pparodia">Duis a neque eget justo rutrum efficitur et eu mi. Fusce nec mauris nec ligula rhoncus facilisis. Pellentesque interdum, metus sed fermentum dapibus, ante erat vestibulum arcu, sed lacinia diam urna in erat. Vivamus tempor, felis feugiat volutpat vulputate, arcu lacus pharetra orci, et dictum arcu elit non ex. </p>
          </div>
		   </div>
	  </section>
	   	<section id="section3" class="pt-4">
	   <div class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-5">
		   <img class="rounded-circle mx-auto d-block" src="images/romance_alc_quatro.jpg" alt="<?php echo $vetIdioma[319][$idioma];?>" title="Tudo e Todas as Coisas">
		<h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[48][$idioma];?></h3>
          </div>
		  <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-7">
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti.Sed non vulputate metus.</p>
			<p class="text-justify" id="pparodia">Duis a neque eget justo rutrum efficitur et eu mi. Fusce nec mauris nec ligula rhoncus facilisis. Pellentesque interdum, metus sed fermentum dapibus, ante erat vestibulum arcu, sed lacinia diam urna in erat. Vivamus tempor, felis feugiat volutpat vulputate, arcu lacus pharetra orci, et dictum arcu elit non ex. </p>
          </div>
		   </div>
	  </section>
	   <section id="section3" class="pt-4">
	   <div class="row">
	   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	    <h6><?php echo $vetIdioma[41][$idioma];?></h6>
		  </div>
		 </div>
	   </section>
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
      <th class="text-center" scope="row">To All the Boys I've Loved Before</th>
      <td class="text-center"> Susan Johnson</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
      <tr>
      <th class="text-center" scope="row">Com Amor, Simon</th>
      <td class="text-center">Greg Berlanti</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Todo Dia</th>
      <td class="text-center"> Michael Sucsy</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Sol da Meia-Noite</th>
      <td class="text-center">Scott Speer</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">A Barraca do Beijo</th>
      <td class="text-center">Vince Marcello</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
	   <tr>
      <th class="text-center" scope="row">Dude</th>
      <td class="text-center">Olivia Milch</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
  </tbody>
</table>
	</div>
 <nav id="submenu" class="navbar-dark bg-dark">
	 	 <div class="container">
			  <div class="row">
  <div class="col-md-6 col-lg-5 offset-md-3">
	 <h3 id="relacionados">Relacionados</h3>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a href="dramaromantico.php">Drama</a>
  </li>
  <li class="nav-item">
    <a href="besteirol.php">Besteirol</a>
  </li>
	<li class="nav-item">
    <a href="noticias.php">Notícias</a>
  </li>
  <li class="nav-item">
    <a href="estreia.php">Estréia</a>
  </li>
	<li class="nav-item">
    <a href="entrevistas.php">Entrevista</a>
  </li>
  <li class="nav-item">
    <a href="parodia.php">Paródia</a>
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