<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");	
// incluindo topo da página
	include_once('menu.php');
?>
  

<div class="container">	
    <section id="anima" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tanima"><?php echo $vetIdioma[7][$idioma];?></h1>
          </div>
		   </div>
	  </section>
	<section id="anima2" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <img src="images/animation.jpg" id="imganima" alt="<?php echo $vetIdioma[900][$idioma];?>" class="img-fluid rounded mx-auto d-block">
          </div>
		     
		   </div>
	  </section>
		<section class="row">
			<div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h3 id="tiury"><?php echo $vetIdioma[148][$idioma];?> </h3>
			 <a href="stopmotion.php"><img src="images/jack.jpg" id="imganima2" alt="<?php echo $vetIdioma[901][$idioma];?>" class="img-fluid rounded mx-auto d-block"></a>
			</div>
			<div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h3 id="tiury"><?php echo $vetIdioma[149][$idioma];?> </h3>
				 <a href="classicos.php"><img src="images/branca.jpg"  id="imganima3" alt="<?php echo $vetIdioma[902][$idioma];?>"class="img-fluid rounded mx-auto d-block"></a>
			</div>
			<div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h3 id="tiury"><?php echo $vetIdioma[150][$idioma];?></h3>
				 <a href="infantil.php"><img src="images/t.jpg" id="imganima4" alt="<?php echo $vetIdioma[903][$idioma];?>" class="img-fluid rounded mx-auto d-block"></a>
			</div>
			<div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h3 id="tiury"><?php echo $vetIdioma[151][$idioma];?> </h3>
				 <a href="nipon.php"><img src="images/chih.jpg" id="imganima5" alt="<?php echo $vetIdioma[904][$idioma];?>" class="img-fluid rounded mx-auto d-block"></a>
			</div>
			<div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h3 id="tiury"><?php echo $vetIdioma[152][$idioma];?>  </h3>
				 <a href="cgi.php"><img src="images/sw.jpg"  width="323" height="324"id="imganima6" alt="<?php echo $vetIdioma[905][$idioma];?>"class="img-fluid rounded mx-auto d-block"></a>
			</div>
			<div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h3 id="tiury"><?php echo $vetIdioma[143][$idioma];?> </h3>
				 <a href="adulto.php"><img src="images/sp.jpg" width="326" height="600" id="imganima7" alt="<?php echo $vetIdioma[906][$idioma];?>"class="img-fluid rounded mx-auto d-block"></a>
			</div>
		</section>
</div>
        <?php
// incluindo rodapé da página
include_once('footer.php');
?>