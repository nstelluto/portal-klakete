<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
   <div class="container">
	   <section class="pt-5">
<nav aria-label="breadcrumb">
  <ol id="drama" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="drama.php">Drama</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[32][$idioma];?></li>
  </ol>
	</nav>
	</section>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tparodia"><?php echo $vetIdioma[32][$idioma];?></h1>
				 <h6><?php echo $vetIdioma[37][$idioma];?></h6>
          </div>
	  </section>
	   <article class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
			  <img src="images/drama_rom_um.jpg" id="imgbesteirol" class="img-fluid rounded mx-auto d-block" alt="500 Dias com Ela" title="500 Dias com Ela">
          </div>
		       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
			  <p class="text-justify"  id="pparodia1">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi finibus tempus mi laoreet scelerisque. Donec tincidunt erat felis, id dapibus ligula lacinia quis. Donec id sapien in leo gravida condimentum. Sed elementum vestibulum risus, ut sodales dui dignissim et. Donec cursus lorem vitae metus maximus auctor. Nam sed fermentum erat, ac bibendum nisl. Proin porta lacus placerat lorem condimentum condimentum. Vestibulum est est, cursus sit amet vehicula vitae, vulputate quis urna. </p>
				<p class="text-justify"  id="pparodia1">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. Aliquam erat volutpat. Nulla aliquam purus massa, quis hendrerit lorem semper a. Nam eleifend, arcu non euismod fringilla, urna mauris bibendum turpis, ac tincidunt ante felis placerat enim. Mauris eget ornare felis.</p>
          </div>
	  </article>
	 <section class="row">
	 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
		<h6><?php echo $vetIdioma[19][$idioma];?></h6>
		 </div>
		</section>
	   <section class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 pt-4">
			 <img src="images/drama_rom_dois.jpg" id="parodia" class="img-fluid" alt="Feitos um para o Outro" title="Feitos um para o Outro">
          </div>
		  <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 pt-4">
		  <h3 id="h3parodia"><?php echo $vetIdioma[38][$idioma];?></h3>
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </div>
	  </section>
	   <section class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 pt-4">
			 <img src="images/drama_rom_tres.jpg" id="parodia" class="img-fluid" alt="Como Eu Era Antes de Você" title="Como Eu Era Antes de Você">
          </div>
		  <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 pt-4">
		  <h3 id="h3parodia"><?php echo $vetIdioma[39][$idioma];?></h3>
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </div>
	  </section>
	   <section class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 pt-4">
			 <img src="images/drama_rom_quatro.jpg" id="parodia" class="img-fluid" alt="Um Dia" title="Um Dia">
          </div>
		  <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
		  <h3 id="h3parodia"><?php echo $vetIdioma[40][$idioma];?></h3>
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </div>
	  </section>
	   <section class="row">
	   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
	   <h6><?php echo $vetIdioma[22][$idioma];?></h6>
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
      <th class="text-center" scope="row">Nasce Uma Estrela</th>
      <td class="text-center">Bradley Cooper</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2018</td>
    </tr>
      <tr>
      <th class="text-center" scope="row">Querido John</th>
      <td class="text-center">Lasse Hallström</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2010</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Um Porto Seguro</th>
      <td class="text-center">Lasse Hallström</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2013</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">P.S. Eu Te Amo</th>
      <td class="text-center">Richard LaGravenese</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2008</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Orgulho e Preconceito</th>
      <td class="text-center">Joe Wright</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2006</td>
    </tr>
	   <tr>
      <th class="text-center" scope="row">Um Homem de Sorte</th>
      <td class="text-center">Robert Scott Hicks</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2012</td>
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
    <a class="nav-link" href="dramamilitar.php">Drama Militar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="comedia.php">Comédia</a>
  </li>
	<li class="nav-item">
    <a class="nav-link" href="entrevistas.php">Entrevista</a>
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
		</section>
		 </div>
	</nav>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>