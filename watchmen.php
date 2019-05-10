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
    <li id="letras" class="breadcrumb-item active" aria-current="page">Watchmen</li>
  </ol>
	</nav>
    </section>    
</div>
	<div class="container">
		<section id="estreia" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um">WATCHMEN</h1>
          </div>
		   </div>
	  </section>
	<div class="container-fluid">
	 <section id="section2" class="pt-4 my-md-5 pt-md-5">
         <div class="row"> 
		   <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			  <img src="images/Alan-Moore.jpg" id="hqima" class="img-fluid">
          </div>
		    <div class="col-11 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<h3 class="titulo_um"> <?php echo $vetIdioma[217][$idioma];?></h3>
				<p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis. </p>
				
          </div>
           </div>
	 </section>
        
	<div class="container-fluid">
	 <section id="section2" class="pt-4 my-md-5 pt-md-5">
         <div class="row"> 
		   
		    <div class="col-11 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<h3 class="titulo_um"> <?php echo $vetIdioma[218][$idioma];?></h3>
				<p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis. </p>
				
          </div>
             <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			  <img src="images/wat.jpg" id="hqima" class="img-fluid">
          </div>
           </div>
	 </section>
          <section id="estreia" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um"><?php echo $vetIdioma[219][$idioma];?></h1>
          </div>
		   </div>
	  </section>
		  <div class="container">
	        <div id="Bio"class="row">
          <div class="col-lg-4">
            <img src="images/person.jpg" id="imgestreia1" class="img-fluid">  
            <h3 class="titulo_um"> Malin Akerman/Espectral </h3> 
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 aqui é está a coluna certa -->
		  
          <div class="col-lg-4">
            <img src="images/person.jpg" id="imgestreia1" class="img-fluid">
            <h3 class="titulo_um"> Jackie Earle/Rorschach </h3> 
				 <p id="pestreia1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 -->
		  
          <div class="col-lg-4">
             <img src="images/person.jpg" id="imgestreia1" class="img-fluid">
             <h3 class="titulo_um">Patrick Wilson/Coruja II</h3> 
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 -->
                <div id="Bio"class="row">
          <div class="col-lg-4">
            <img src="images/person.jpg" id="imgestreia1" class="img-fluid">  
            <h3 class="titulo_um"> Jeffrey Dean Morgan/ Comediante</h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 aqui é está a coluna certa -->
                <div class="col-lg-4">
            <img src="images/person.jpg" id="imgestreia1" class="img-fluid">
            <h3 class="titulo_um"> Matthew Goode/Ozymandias </h3>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 -->  
            <div class="col-lg-4">
             <img src="images/person.jpg" id="imgestreia1" class="img-fluid">
             <h3 class="titulo_um">BillyCrudup/Doutor Manhattan </h3>    
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac metus id elit posuere suscipit. Suspendisse dapibus quam sit amet mauris ullamcorper laoreet. Morbi dictum consectetur leo, sit amet consectetur enim ullamcorper at. Nullam nisl felis, placerat tempor luctus at, aliquet eu dui. </p>
				 
          </div><!-- /.col-lg-4 -->        
                
            </div>    
			  </div></div></div></div>
		
	</div>
<?php
// incluindo submenu na página
include_once('submenu.php');
// incluindo rodapé da página
include_once('footer.php');
?>