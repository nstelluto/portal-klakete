<?php
	
	
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
require_once("vetor.php");

// incluindo topo da página 
include_once('menu.php');
?>
	<div class="container">
		<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol id="topiury" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="animacao.php"><?php echo $vetIdioma[7][$idioma];?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[145][$idioma];?></li>
  </ol>
	</nav>
	</section>
        <section id="adulto" class="pt-5 my-md-5 pt-md-5">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tadult"><?php echo $vetIdioma[145][$idioma];?></h1>
				
          </div>
            </div>
        </section>            
        <section id="adulto1" class="pt-5  ">
	   <div class="row">
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
				 <h2 id="inf1"><?php echo $vetIdioma[145][$idioma];?></h2>
                  <p class="text-justify"  id="panime1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.</p>
          </div>
            </div>
        </section>
    <section id="adulto2" class="pt-5  float-rigth">
	   <div class="row">
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
				 <h2 id="ad1"><?php echo $vetIdioma[146][$idioma];?></h2>
                  <p class="text-justify"  id="ptec1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem.Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, </p>
          </div>
             
           <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
			  <img src="images/sp.jpg" width="420" height="500" id="imgjack" alt="<?php echo $vetIdioma[906][$idioma];?>" class="img-fluid rounded mx-auto d-block"> 
           </div>
              <section id="adulto3" class="pt-5  float-rigth">
	   <div class="row">
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
				 <h2 id="ad2"><?php echo $vetIdioma[147][$idioma];?></h2>
                  <p class="text-justify"  id="panime1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.</p>
          </div>
                  </div>
        </section>
</div>
        </section>
</div>

           <?php
// incluindo submenu na página
include_once('submenu_iury.php');
// incluindo rodapé da página
include_once('footer.php');
?>
