<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
require_once("vetor.php");
	
// incluindo topo da página
	include_once('menu.php');
?>
	<div class="container">
		<section id="stop" class="pt-5">
	   <nav aria-label="breadcrumb">
  <ol id="topiury" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="animacao.php"><?php echo $vetIdioma[7][$idioma];?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[148][$idioma];?></li>
  </ol>
	</nav>
            <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tstop"><?php echo $vetIdioma[148][$idioma];?></h1>
          </div>
            </div>
        </section>    
        <section id="jack1" class="pt-5  float-rigth">
	   <div class="row">
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
				 <h2 id="tec1"><?php echo $vetIdioma[161][$idioma];?></h2>
                  <p class="text-justify"  id="ptec1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis.Donec scelerisque ex odio, in imperdiet mauris tincidunt in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis.Donec scelerisque ex odio, in imperdiet mauris tincidunt in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis.</p>
          </div>
             
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
			  <img src="images/jack.jpg" width="500" height="500" id="imgjack" alt="<?php echo $vetIdioma[901][$idioma];?>" class="img-fluid rounded mx-auto d-block">
               <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 "> 
               </div>
           </div>   
           <section id="atecnica" class="pt-5  float-rigth">
	   <div class="row">
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 "> 
				 <h2 id="tec1"><?php echo $vetIdioma[162][$idioma];?></h2>
                  <p class="text-justify"  id="ptec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in.</p>
          </div>
	  <div class="col-lg-6">
		<h2 id="tec2"><?php echo $vetIdioma[147][$idioma];?></h2>		
          <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit.lacus non tincidunt dapibus. Curabitur mattis, elit.  </p>
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
