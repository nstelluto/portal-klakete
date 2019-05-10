<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
	<div class="container">
		<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[3][$idioma];?></li>
  </ol>
	</nav>
	</section>
		<section id="estreia" class="pt-1">
	   <div class="row">
		     <div class="col-4">
				 <h1 id="testreia"><?php echo $vetIdioma[3][$idioma];?></h1>
				 <h6 id="subestreia"><?php echo $vetIdioma[75][$idioma];?></h6>
          </div>
		   </div>
	  </section>
        <div id="Bio"class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="images/animais-fantasticos.jpg" alt="<?php echo $vetIdioma[332][$idioma];?>" id="imgestreia1" class="img-fluid">
            <h3 id="h3estreia1"><?php echo $vetIdioma[76][$idioma];?></h3>
				 <p id="pestreia1"> Novas imagens trazem os protagoniasta Newt Scamander,Alvo Dumbledore e Gerardo Grindelwald </p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		  
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="images/aladdin.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[333][$idioma];?>" class="img-fluid">
            <h3 id="h3estreia1"><?php echo $vetIdioma[77][$idioma];?></h3>
				 <p id="pestreia1"> Filme tem estreia para 24 de maio de 2019 no EUA </p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.  </p>
          </div>
		  
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
             <img src="images/wifi-ralph.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[334][$idioma];?>" class="img-fluid">
             <h3 id="h3estreia1"><?php echo $vetIdioma[78][$idioma];?></h3>
				 <p id="pestreia1"> A animação estraia de 3 de janeiro de 2019 no Brasil </p>
				 <p id="pestreia2">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		  
		  
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="images/vingadores.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[335][$idioma];?>" class="img-fluid">
            <h3 id="h3estreia1"><?php echo $vetIdioma[79][$idioma];?></h3>
				 <p id="pestreia1"> Os novos trajes são mostrados em uma embalagem de brinquedo que deve ser lançado na mesma época em que o filme  </p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		  
         <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="images/osincriveis2.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[336][$idioma];?>" class="img-fluid">
            <h3 id="h3estreia1"><?php echo $vetIdioma[80][$idioma];?></h3>
                <p id="pestreia1"> NVersões em Blu-ray 4K Ultra HD, Blu-ray e DVD têm lançamento previsto para o próximo mês</p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		  
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
             <img src="images/aspanteras.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[337][$idioma];?>" class="img-fluid">
             <h3 id="h3estreia1"><?php echo $vetIdioma[81][$idioma];?></h3>
                 <p id="pestreia1"> Kristen Stewart, Naomi Scott, Ella Ballinska e Noah Centineo foram vistos durante as gravações em Hamburgo, na Alamnaha </p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
			 <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="images/hb.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[338][$idioma];?>" class="img-fluid">
            <h3 id="h3estreia1"><?php echo $vetIdioma[93][$idioma];?></h3>
				 <p id="pestreia1"> O novo serviço terá conteúdo da HBO, WarnerBros e Turner</p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="images/time-freak.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[339][$idioma];?>" class="img-fluid">
            <h3 id="h3estreia1"><?php echo $vetIdioma[94][$idioma];?></h3>
                <p id="pestreia1"> O filme estreia nos cinemas americanos no dia 09 de novembro </p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>		  
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
             <img src="images/quebra-nozes.jpg" id="imgestreia1" alt="<?php echo $vetIdioma[340][$idioma];?>" class="img-fluid">
             <h3 id="h3estreia1"><?php echo $vetIdioma[95][$idioma];?></h3>
                 <p id="pestreia1"> NFilme tem estreia prevista para 1º de novembro no Brasil</p>
				 <p id="pestreia2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
			 </div>
</div>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>