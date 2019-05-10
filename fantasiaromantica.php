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
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="romance.php">Romance</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[43][$idioma];?></li>
  </ol>
	</nav>
	</section>
		<section id="besteirol" class="pt-1">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tbesteirol"><?php echo $vetIdioma[43][$idioma];?></h1>
				 <p id="subbesteirol"><?php echo $vetIdioma[49][$idioma];?></p>
          </div>
		   </div>
	  </section>
	<section id="besteirol1" class="pt-4">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <img src="images/fantasia_rom_um.jpg" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[315][$idioma];?>" title="Valley of Flowers">
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <p class="text-justify"  id="pbesteirol1">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi finibus tempus mi laoreet scelerisque. Donec tincidunt erat felis, id dapibus ligula lacinia quis. Donec id sapien in leo gravida condimentum. Sed elementum vestibulum risus, ut sodales dui dignissim et. Donec cursus lorem vitae metus maximus auctor. Nam sed fermentum erat, ac bibendum nisl. Proin porta lacus placerat lorem condimentum condimentum. Vestibulum est est, cursus sit amet vehicula vitae, vulputate quis urna. </p>
				  <p class="text-justify"  id="pbesteirol1">Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis.</p>
          </div>
		   </div>
	  </section>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<p class="font-weight-bold"><?php echo $vetIdioma[19][$idioma];?></p>
		 </div>
      <div class="container marketing">
        <div class="row">
          <section class="col-lg-4">
            <img class="rounded-circle mx-auto d-block" src="images/fantasia_rom_dois.jpg" width="300" height="200" alt="<?php echo $vetIdioma[320][$idioma];?>" title="A Princesa Prometida">
            <h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[50][$idioma];?></h3>
            <p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </section>
			<section class="col-lg-4">
            <img class="rounded-circle mx-auto d-block" src="images/fantasia_rom_tres.jpg" width="300" height="200" alt="<?php echo $vetIdioma[321][$idioma];?>" title="O Labirinto do Fauno">
            <h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[51][$idioma];?></h3>
            <p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </section>
			<section class="col-lg-4">
            <img class="rounded-circle mx-auto d-block" src="images/fantasia_rom_quatro.jpg" width="300" height="200" alt="<?php echo $vetIdioma[322][$idioma];?>" title="O Mágico de Oz">
            <h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[52][$idioma];?></h3>
            <p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </section>
		  </div>
        </div>
		<p class="font-weight-bold"><?php echo $vetIdioma[22][$idioma];?></p>
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
      <th class="text-center" scope="row">A Bela e a Fera</th>
      <td class="text-center">Bill Condon</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2017</td>
    </tr>
      <tr>
      <th class="text-center" scope="row">A Vida Após a Vida</th>
      <td class="text-center">Zhang Hanyi</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2017</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Personal Shopper</th>
      <td class="text-center">Olivier Assayas</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">0000</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Lorem Ipsum</th>
      <td class="text-center">Lorem Ipsum</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2017</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">A Monster Calls</th>
      <td class="text-center">Juan Antonio Bayona</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2016</td>
    </tr>
	   <tr>
      <th class="text-center" scope="row">Fallen</th>
      <td class="text-center">Scott Hicks</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2016</td>
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
    <a href="romanceadolescente.php">Romance Adolescente</a>
  </li>
  <li class="nav-item">
    <a href="animacao.php">Animação</a>
  </li>
	<li class="nav-item">
    <a href="noticias.php">Notícias</a>
  </li>
  <li class="nav-item">
    <a href="estreia.php">Estréia</a>
  </li>
	<li class="nav-item">
    <a href="homeHQS.php">HQs</a>
  </li>
  <li class="nav-item">
    <a href="ficcao.php">Ficção Cientifica</a>
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