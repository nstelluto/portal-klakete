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
    <li id="letras" class="breadcrumb-item active"  aria-current="page">HomeHQs</li>
  </ol>
	</nav>
    </section>
		<section id="estreia" class="pt-1">
	   <div class="row">
		     <div class="col-12">
				 <h1 class="titulo_um">HQS</h1>
				 <p class="texto_um" ><?php echo $vetIdioma[200][$idioma];?></p>
                 <p class="texto_um">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis. </p>
          </div>
		   </div>
	  </section>	
	  
	  
        <div class="row">
          <div class="col-lg-4">
            <a href="marvel.php"><img src="images/capa1.jpg" id="liga" class="img-fluid">
            <h2>MARVEL</h2>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
			  <a href="dc.php"><img src="images/capa1.jpg" id="liga" class="img-fluid"></a>
            <h2>DC</h2>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
			  <a href="mangas.php"><img src="images/capa1.jpg" id="liga" class="img-fluid"></a>
            <h2>MANGÁS</h2>
          </div>
         <div class="col-lg-4">
            <a href="watchmen.php"><img src="images/capa1.jpg" id="liga" class="img-fluid">
				<h2>WATCHMEN</h2></a>
           
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="fox.php"><img src="images/capa1.jpg" id="liga" class="img-fluid">
            <h2>FOX</h2>
			  </a>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="sony.php"><img src="images/capa1.jpg" id="liga" class="img-fluid">
            <h2>SONY</h2>
			  </a>

          </div><!-- /.col-lg-4 -->
        </div>
    
    </div>    	
</div>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>