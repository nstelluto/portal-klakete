<?php
 if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
<div class="container">
<section id="estreia" class="pt-5 my-md-5 pt-md-5">
<nav aria-label="breadcrumb">
  <ol id="marvel" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="homeHQS.php">HomeHQs</a></li>
    <li id="letras" class="breadcrumb-item active" aria-current="page">Mangásl</li>
  </ol>
	</nav>
    </section>    
</div>
  
	<div class="container">
		<section id="estreia" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um">MANGÁS</h1>
          </div>
		   </div>
	  </section>
	<div class="container-fluid">
	 <section id="section2" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		   <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			  <img src="images/mangas.jpg" id="hqima" class="img-fluid">
          </div>
		    <div class="col-11 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<h3 class="titulo_um"><?php echo $vetIdioma[211][$idioma];?> </h3>
				<p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis. </p>
           </div>				
          </div>
       </section>
         
         <section id="estreia" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um"><?php echo $vetIdioma[212][$idioma];?></h1>
          </div>
		   </div>
	  </section>
		  
	        <div id="Bio"class="row">
          <div class="col-lg-4">
            <img src="images/bleach.jpg" id="imgestreia1" class="img-fluid">
            <h3 class="titulo_um"> <?php echo $vetIdioma[213][$idioma];?>  </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 aqui é está a coluna certa -->
		  
          <div class="col-lg-4">
            <img src="images/deathnote.jpg" id="imgestreia1" class="img-fluid">
            <h3 class="titulo_um"> <?php echo $vetIdioma[214][$idioma];?> </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 -->
		  
          <div class="col-lg-4">
             <img src="images/fullmetal.jpg" id="imgestreia1" class="img-fluid">
             <h3 class="titulo_um"> <?php echo $vetIdioma[215][$idioma];?> </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 -->
		  
		<section id="estreia" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um"><?php echo $vetIdioma[216][$idioma];?></h1>
          </div>
		   </div>
	  </section>  
       
	<div class="container-fluid">
	 <section id="section2" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		   <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			  <img src="images/Rurouni.jpg" id="liga" class="img-fluid">
          </div>
		    <div class="col-11 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper.</p>
		   </div>
          </div>
	 </section> 
        <div class="container-fluid">
	 <section id="section2" class="pt-4 my-md-5 pt-md-5">
	   <div class="row">
		   <div class="col-lg-12">
			  <img src="images/samuraix.jpg" id="liga" class="img-fluid">
          </div> 
	
		 </div></section></div></div></div></div></div>
<?php
// incluindo submenu na página
include_once('submenu.php');
// incluindo rodapé da página
include_once('footer.php');
?>