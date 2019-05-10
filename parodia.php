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
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[17][$idioma];?></li>
  </ol>
	</nav>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-1">
				 <h1 id="tparodia"><?php echo $vetIdioma[17][$idioma];?></h1>
				 <h6 id="subparodia"><?php echo $vetIdioma[25][$idioma];?></h6>
          </div>
	  </section>
	   <article class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-1">
			  <img src="images/parodia_um.jpg" id="imgbesteirol" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[25][$idioma];?>" title="Apertem os Cintos... O Piloto Sumiu">
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <p class="text-justify"  id="pparodia1">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi finibus tempus mi laoreet scelerisque. Donec tincidunt erat felis, id dapibus ligula lacinia quis. Donec id sapien in leo gravida condimentum. Sed elementum vestibulum risus, ut sodales dui dignissim et. Donec cursus lorem vitae metus maximus auctor. Nam sed fermentum erat, ac bibendum nisl. Proin porta lacus placerat lorem condimentum condimentum. Vestibulum est est, cursus sit amet vehicula vitae, vulputate quis urna. </p>
				<p class="text-justify"  id="pparodia1">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis.</p>
          </div>
		   </article>
	 <section class="row">
	 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-1">
		<h6><?php echo $vetIdioma[19][$idioma];?></h6>
		 </div>
		  <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 pt-1">
		  <h3 id="h3parodia"><?php echo $vetIdioma[26][$idioma];?></h3>
			<p id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis. </p>
          </div>
		     <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 pt-1">
			 <img src="images/parodia_dois.jpg" id="parodia" class="img-fluid" alt="<?php echo $vetIdioma[305][$idioma];?>" title="Todo Mundo Quase Morto">
          </div>
					</section>
					<section class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 pt-1">
		  <h3 id="h3parodia"><?php echo $vetIdioma[27][$idioma];?></h3>
			<p id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis.</p>
          </div>
		     <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 pt-1">
			 <img src="images/parodia_tres.jpg" id="parodia" class="img-fluid" alt="<?php echo $vetIdioma[306][$idioma];?>" title="Inatividade Paranormal">
          </div>
					</section>
					<section class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 pt-1">
		  <h3 id="h3parodia"><?php echo $vetIdioma[28][$idioma];?></h3>
			<p id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis. </p>
          </div>
		     <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 pt-1">
			 <img src="images/parodia_quatro.jpg" id="parodia" class="img-fluid" alt="<?php echo $vetIdioma[307][$idioma];?>" title="Todo Mundo em Pânico">
		   </div>
			 </section>
			 <section class="row">
	   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-1">
	   <h6><?php echo $vetIdioma[22][$idioma];?> </h6>
		  </div>
			</section>
			<section class="row">
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
      <th class="text-center" scope="row">Shaun of the Dead</th>
      <td class="text-center">Edgar Wright</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2007</td>
    </tr>
      <tr>
      <th class="text-center" scope="row">Hot Fuzz</th>
      <td class="text-center">Edgar Wright</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2007</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Team America: World Police</th>
      <td class="text-center">Trey Parker</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2004</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">This Is The End</th>
      <td class="text-center">Evan Goldberg, Seth Rogen</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2013</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Copa de Elite</th>
      <td class="text-center"> Vitor Brandt</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2014</td>
    </tr>
	   <tr>
      <th class="text-center" scope="row">Top Gang - Ases Muito Loucos</th>
      <td class="text-center">Jim Abrahams</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">1991</td>
    </tr>
  </tbody>
</table>
</section>
	</div>
<nav id="submenu" class="navbar-dark bg-dark">
		 <div class="container">
			  <article class="row">
  <div class="col-md-6 col-lg-5 offset-md-3">
	 <h3 id="relacionados"><?php echo $vetIdioma[29][$idioma];?></h3>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="besteirol.php">Besteirol</a>
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
    <a class="nav-link" href="homeHQS.php">HQs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="animacao.php">Animação</a>
  </li>
</ul>
		 </div>
		</article>
		 </div>
	</nav>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>