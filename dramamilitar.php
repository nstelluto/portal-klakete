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
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[31][$idioma];?></li>
  </ol>
	</nav>
	</section>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tparodia"><?php echo $vetIdioma[31][$idioma];?></h1>
				 <h6 id="subparodia">
				 <?php echo $vetIdioma[33][$idioma];?></h6>
          </div>
	  </section>
	   <article class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
			  <img src="images/drama_mil_um.jpg" id="imgbesteirol" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[309][$idioma];?>" title="Cavalo de Guerra">
          </div>
		       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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
		  <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 pt-4">
			 <img src="images/drama_mil_dois.jpg" id="parodia" class="img-fluid" alt="<?php echo $vetIdioma[311][$idioma];?>" title="Até o Limite da Honra">
			 <h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[34][$idioma];?></h3>
          </div>
		  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 pt-4">
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </div>
	  </section>
	   <section class="row">
		  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 pt-4 my-md-5">
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </div>
		      <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 pt-4 my-md-5">
			 <img src="images/drama_mil_tres.jpg" id="parodia" class="img-fluid" alt="<?php echo $vetIdioma[312][$idioma];?>" title="Uma Guerra">
			 <h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[35][$idioma];?></h3>
          </div>
	  </section>
	   <section class="row">
		  <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 pt-4">
			 <img src="images/drama_mil_quatro.jpg" id="parodia" class="img-fluid" alt="<?php echo $vetIdioma[313][$idioma];?>" title="O Medo">
			 <h3 class="text-center" id="h3parodia"><?php echo $vetIdioma[36][$idioma];?></h3>
          </div>
		  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 pt-4">
			<p class="text-justify" id="pparodia">Lorem Ipsum Ut vel arcu quis erat tempor dictum ut at arcu. In fringilla, felis ac porta facilisis, lacus nisl malesuada augue, ut blandit turpis justo et massa. Nam tempor a ipsum ac tempus. Aenean pretium nunc tortor, eu faucibus nulla rhoncus sit amet. Morbi et diam ullamcorper, blandit velit id, finibus odio. Aenean arcu massa, cursus ac volutpat id, ornare in nisl. Sed in eros sit amet velit gravida accumsan quis at metus. Praesent maximus libero sed lectus finibus mattis. Suspendisse potenti. </p>
          </div>
	  </section>
	   <section class="row">
	   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-4">
	   <p class="font-weight-bold"><?php echo $vetIdioma[22][$idioma];?></p>
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
      <th class="text-center" scope="row">Até o Último Homem</th>
      <td class="text-center">Mel Gibson</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2016</td>
    </tr>
      <tr>
      <th class="text-center" scope="row">Dunkirk</th>
      <td class="text-center">Christopher Nolan</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2017</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Coração de Ferro</th>
      <td class="text-center">David Ayer</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2014</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">Sniper Americano</th>
      <td class="text-center">Clint Eastwood</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2015</td>
    </tr>
	    <tr>
      <th class="text-center" scope="row">O Menino do Pijama Listrado</th>
      <td class="text-center">Mark Herman</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">2008</td>
	  </tr>
	   <tr>
      <th class="text-center" scope="row">O Resgate do Soldado Ryan</th>
      <td class="text-center">Steven Spielberg</td>
      <td class="text-center"><img src="images/5estrelas.jpg"></td>
      <td class="text-center">1999</td>
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
    <a class="nav-link" href="dramaromantico.php">Drama Romantico</a>
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
    <a class="nav-link" href="ficcao.php">Ficção Cientifica</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="doc_um.php">Documentário</a>
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