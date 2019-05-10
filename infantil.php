<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
require_once("vetor.php");
	
// incluindo topo da página
	include_once('menu.php');
?>
	<div class="container">
		<section id="infantil" class="pt-5 my-md-5 pt-md-5">
	  <nav aria-label="breadcrumb">
  <ol id="topiury" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="animacao.php"><?php echo $vetIdioma[7][$idioma];?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[150][$idioma];?></li>
  </ol>
	</nav>
            <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tinf"><?php echo $vetIdioma[150][$idioma];?></h1>
          </div>
            </div>
        </section>    
       	<section id="anima2" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <img src="images/t.jpg" id="imginf" alt="<?php echo $vetIdioma[903][$idioma];?>" class="img-fluid rounded mx-auto d-block">
          </div>
		   </div>
	  </section>
        <section id="infantil1" class="pt-5  float-rigth">
	   <div class="row">
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
				 <h2 id="inf1"><?php echo $vetIdioma[150][$idioma];?></h2>
                  <p class="text-justify"  id="pinf1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.</p>
          </div>
            <div class="col-lg-6">
		<h2 id="inf2"><?php echo $vetIdioma[156][$idioma];?></h2>		
          <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.lacus non tincidunt dapibus. Curabitur mattis, elit. </p>
				</div> 
               </div>
        </section>
           
     <section id="atecnica" class="pt-5 float-rigth">
	   <div class="row">
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 " float-rigth> 
				 <h2 id="inf3"><?php echo $vetIdioma[157][$idioma];?></h2>
                  <p class="text-justify"  id="ptec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.</p>
          </div>
 <div class="col-lg-6">
           <h2 id="inf4"><?php echo $vetIdioma[147][$idioma];?></h2>		
          <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.  </p>
           </div>
         </div>
        </section>
</div>

           <?php
// incluindo submenu na página
include_once('submenu_iury.php');
// incluindo rodapé da página
include_once('footer.php');
?>