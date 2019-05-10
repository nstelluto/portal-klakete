<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
require_once("vetor.php");
     // incluindo topo da página
	include_once('menu.php');
?>
	<div class="container">
		<section id="nipon" class="pt-5">
	  <nav aria-label="breadcrumb">
  <ol id="topiury" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="animacao.php"><?php echo $vetIdioma[7][$idioma];?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[151][$idioma];?></li>
  </ol>
	</nav>
           
            <div class="row "> 
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tnipon"><?php echo $vetIdioma[151][$idioma];?></h1>
          </div>
            </div>
        </section>    
        <section id="chi1" class="pt-5  float-rigth">
	   <div class="row">
           <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
				 <h2 id="anime1"><?php echo $vetIdioma[158][$idioma];?></h2>
                  <p class="text-justify"  id="panime1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt inLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum.</p>
          </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
			 <img src="images/chih.jpg" width="500" height="500" id="imgchi" alt="<?php echo $vetIdioma[904][$idioma];?>" class="img-fluid mx-auto d-block">
                       <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 "> 
                
                </div>
                </div>
               </div>
        </section>
           
     <section id="bebop1" class="pt-5  float-rigth">
	   <div class="row">
           <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 "> 
				 <h2 id="anime2"><?php echo $vetIdioma[159][$idioma];?></h2>
                  <p class="text-justify"  id="pcinema1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum.</p>
          </div>
	  <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-6">
			  <img src="images/bebop.jpg"  width="500" height="500" id="imgbebop" alt="<?php echo $vetIdioma[907][$idioma];?>" class="img-fluid  mx-auto d-block">
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">  
        
          </div>
          </div>
            </div>
          </section>    
  <section id="madoka1" class="pt-5 " float-rigth>
	   <div class="row">
		     <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-6">
				 <h2 id="anime3"><?php echo $vetIdioma[160][$idioma];?></h2>
                  <p class="text-justify"  id="poriginal1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis.Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis.Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
	   <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <img src="images/madoka.jpg"  width="500" height="500" id="imgmadoka" alt="<?php echo $vetIdioma[908][$idioma];?>" class="img-fluid  mx-auto d-block">
           </div>
            </div>
           </section>	 
 <section id="nipon3" class="pt-5">
	<div class="row">	      
    <div class=" col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h2 id="anime4"><?php echo $vetIdioma[147][$idioma];?></h2>
                  <p class="text-justify"  id="pcuriosidades1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut aliquet felis. Vestibulum pellentesque ligula vel purus maximus, nec finibus mi aliquam. Etiam ac luctus lorem, et ornare lorem. Duis feugiat venenatis viverra. Ut tempor ac lacus ac mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in dui aliquam, tristique est facilisis, pellentesque nibh. Aenean ullamcorper elit ut mi eleifend, eu vestibulum lacus consectetur. Vivamus sodales lacus non tincidunt dapibus. Curabitur mattis, elit quis vulputate elementum, tellus nibh mollis tellus, vel pretium erat dolor interdum odio. Aenean erat mauris, faucibus quis ultricies sed, dictum a purus. Sed mi libero, blandit id mi ac, consectetur vestibulum quam. Maecenas sit amet tincidunt metus. Etiam sollicitudin libero at pharetra dictum. Donec scelerisque ex odio, in imperdiet mauris tincidunt in Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
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