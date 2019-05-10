<?php
   if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>

 
<div class="container">
<section id="estreia" class="pt-5 my-md-5 pt-md-5">
<nav aria-label="breadcrumb">
  <ol  id="marvel" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="homeHQS.php">HomeHQs</a></li>
    <li id="letras" class="breadcrumb-item active"  aria-current="page">Marvel</li>
  </ol>
	</nav>
    </section>    
</div>

	<div class="container">
		<section id="estreia" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um">MARVEL</h1>
          </div>
		   </div>
	  </section>
	<div class="container-fluid">
	 <section id="section2" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		   <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			  <img src="images/mcucinematic.jpg" id="hqima"class="img-fluid rounded mx-auto d-block">
          </div>
		    <div class="col-11 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<h3 class="titulo_um"> <?php echo $vetIdioma[201][$idioma];?></h3>
				<p class="texto_um" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum. </p>
           </div>	
          </div>
	 </section>
		  
	        <div id="Bio"class="row">
          <div class="col-lg-6">
            <img  src="images/MCU1.jpg" id="imgohori" class="img-fluid">
            <h3 id="h3estreia1">  </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu </p>
				 
          </div><!-- /.col-lg-4 aqui é está a coluna certa -->
		  
          <div class="col-lg-6">
            <img src="images/MCU2.jpg" id="imgohori" class="img-fluid">
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu </p>
				 
          </div><!-- /.col-lg-4 -->
		  
          
		  
		<section id="estreia" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um" > <?php echo $vetIdioma[202][$idioma];?></h1>
          </div>
		   </div>
	  </section>   
		   
	<section id="estreia2" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-11 col-sm-4 col-md-4 col-lg-4 col-xl-3">
			  <img src="images/fase1.jpg" id="hqima" class="img-fluid">
          </div>
		      <div class="col-4 col-sm-6 col-md-6 col-lg-6 col-xl-5">
				<h3 class="titulo_um"> <?php echo $vetIdioma[203][$idioma];?> </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		   </div>
	  
		<section id="estreia3" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-11 col-sm-4 col-md-4 col-lg-4 col-xl-3">
			  <img src="images/fase2.jpg" id="hqima"class="img-fluid">
          </div>
		      <div class="col-4 col-sm-6 col-md-6 col-lg-6 col-xl-5">
				<h3 class="titulo_um"> <?php echo $vetIdioma[204][$idioma];?>  </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		   </div>
	  
		<section id="estreia4" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-11 col-sm-4 col-md-4 col-lg-4 col-xl-3">
			  <img src="images/fase3.jpg" id="hqima" class="img-fluid">
          </div>
		      <div class="col-4 col-sm-6 col-md-6 col-lg-6 col-xl-5">
				<h3 class="titulo_um"> <?php echo $vetIdioma[205][$idioma];?> </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
          </div>
		   </div>
	  </section>
		
		</section></section></div></div></div>
<?php
// incluindo submenu na página
include_once('submenu.php');     

// incluindo rodapé da página
include_once('footer.php');
?>