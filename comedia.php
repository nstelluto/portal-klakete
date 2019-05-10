<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
	<div class="container">
<nav class="pt-5" aria-label="breadcrumb">
  <ol id="comedia" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[24][$idioma];?></li>
  </ol>
	</nav>
	   <section class="row">
		      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
				 <h1 class="text-center" id="tcomedia"><?php echo $vetIdioma[24][$idioma];?></h1>
				 <h6 class="text-center" id="subcomedia"><?php echo $vetIdioma[23][$idioma];?></h6>
          </div>
	  </section>
	   <article class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <img src="images/comedia_um.jpg" alt="<?php echo $vetIdioma[308][$idioma];?>" title="L'arroseur arrosé" id="imgcomedia1" class="img-fluid rounded mx-auto d-block">
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <p class="text-justify" id="pcomedia1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis suscipit elit. Nullam sapien arcu, facilisis et erat id, congue egestas purus. Nam tempus mauris fermentum, suscipit lectus at, ultrices lacus. Suspendisse potenti. Praesent nunc odio, malesuada eu eros eget, viverra euismod massa. Suspendisse dapibus libero vitae pharetra rhoncus. In scelerisque maximus justo, ac pretium neque porttitor quis. Nulla dapibus, metus at mattis commodo, metus elit tincidunt velit, eu lobortis lacus ligula vel dui. Quisque justo justo, porttitor id enim vel, pulvinar dapibus felis.</p>
				 <p class="text-justify" id="pcomedia1"> Sed eleifend lobortis justo maximus efficitur. Curabitur et gravida leo. Nullam pellentesque, massa at sodales tincidunt, lectus diam vulputate tellus, in hendrerit neque ipsum et nisl. Cras at dolor vel quam tempor egestas. Integer vel ante in elit ultricies suscipit at nec metus. Etiam scelerisque mi nec vehicula scelerisque. Phasellus pulvinar erat ut vestibulum pulvinar. Praesent dui dui, volutpat quis facilisis facilisis, tempus at magna. Integer egestas ligula ac ipsum efficitur congue. Vivamus et lacus vel orci molestie pretium vel id dui.</p>
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <p class="text-justify" id="pcomedia1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis suscipit elit. Nullam sapien arcu, facilisis et erat id, congue egestas purus. Nam tempus mauris fermentum, suscipit lectus at, ultrices lacus. Suspendisse potenti. Praesent nunc odio, malesuada eu eros eget, viverra euismod massa. Suspendisse dapibus libero vitae pharetra rhoncus. In scelerisque maximus justo, ac pretium neque porttitor quis. Nulla dapibus, metus at mattis commodo, metus elit tincidunt velit, eu lobortis lacus ligula vel dui. Quisque justo justo, porttitor id enim vel, pulvinar dapibus felis.</p>
          </div>
	  </article>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-4">
				 <a href="besteirol.php?idioma=<?php echo $idioma;?>"><img src="images/besteirol_um.jpg" width="600" id="imgcomedia2" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[300][$idioma];?>"></a>
				 <h2 id="h2comedia" class="text-center"><a id="titulonat" href="besteirol.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[16][$idioma];?></a></h2>
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-4">
				  <a href="parodia.php?idioma=<?php echo $idioma;?>"><img src="images/parodia_um.jpg" width="600" id="imgcomedia3" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[304][$idioma];?>"></a>
				  <h2 id="h2comedia" class="text-center"><a id="titulonat" href="parodia.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[17][$idioma];?></a></h2>
          </div>
	  </section>
	</div>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>