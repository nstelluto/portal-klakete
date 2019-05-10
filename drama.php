<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
	<div class="container">
		<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol id="drama" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page">DRAMA</li>
  </ol>
	</nav>
	</section>
	   <section class="row">
		      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
				 <h1 class="text-center" id="tcomedia">Drama</h1>
				 <p class="text-center" id="subcomedia"><?php echo $vetIdioma[30][$idioma];?></p>
          </div>
	  </section>
	   <article class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  <img src="images/drama_um.jpg" id="imgcomedia1" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[308][$idioma];?>">
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <p class="text-justify" id="pcomedia1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis suscipit elit. Nullam sapien arcu, facilisis et erat id, congue egestas purus. Nam tempus mauris fermentum, suscipit lectus at, ultrices lacus. Suspendisse potenti. Praesent nunc odio, malesuada eu eros eget, viverra euismod massa. Suspendisse dapibus libero vitae pharetra rhoncus. In scelerisque maximus justo, ac pretium neque porttitor quis. Nulla dapibus, metus at mattis commodo, metus elit tincidunt velit, eu lobortis lacus ligula vel dui. Quisque justo justo, porttitor id enim vel, pulvinar dapibus felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in augue blandit, posuere dolor id, tempus ante. Aliquam gravida arcu risus. Nam hendrerit turpis nec metus rutrum sagittis. Nulla pulvinar consectetur pharetra. Morbi ut enim quis urna volutpat pellentesque. Cras tempor turpis at dolor ultricies facilisis.</p>
				 <p class="text-justify" id="pcomedia1"> Sed eleifend lobortis justo maximus efficitur. Curabitur et gravida leo. Nullam pellentesque, massa at sodales tincidunt, lectus diam vulputate tellus, in hendrerit neque ipsum et nisl. Cras at dolor vel quam tempor egestas. Integer vel ante in elit ultricies suscipit at nec metus. Etiam scelerisque mi nec vehicula scelerisque. Phasellus pulvinar erat ut vestibulum pulvinar. Praesent dui dui, volutpat quis facilisis facilisis, tempus at magna. Integer egestas ligula ac ipsum efficitur congue. Vivamus et lacus vel orci molestie pretium vel id dui. Mauris et tincidunt justo, eu dignissim sapien.</p>
				 <p class="text-justify" id="pcomedia1"> Sed iaculis enim fringilla, imperdiet dolor eu, suscipit libero. Sed elementum imperdiet ante sit amet varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin accumsan sollicitudin pulvinar. Mauris eleifend pellentesque est ut ultricies. Duis quis mi euismod diam luctus aliquam ac et dolor. Ut nec posuere lectus. Nullam malesuada dictum nulla, sed egestas tellus accumsan nec. In hac habitasse platea dictumst. Suspendisse finibus elit in risus ultricies, cursus suscipit augue interdum. Mauris vitae efficitur ipsum, a blandit dolor. Nunc non tincidunt justo, a sollicitudin nunc. Praesent cursus imperdiet rutrum. Proin a lacinia turpis. </p>
          </div>
	  </article>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-4">
				 <a href="dramamilitar.php?idioma=<?php echo $idioma;?>"><img src="images/drama_mil_um.jpg" id="imgcomedia2" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[309][$idioma];?>" title="Cavalo de Guerra"></a>
				  <h2 id="h2comedia" class="text-center"><a id="titulonati" href="dramamilitar.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[31][$idioma];?></a></h2>
          </div>
		      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-4">
				  <a href="dramaromantico.php?idioma=<?php echo $idioma;?>"><img src="images/drama_rom_um.jpg" id="imgcomedia3" class="img-fluid rounded mx-auto d-block" alt="<?php echo $vetIdioma[310][$idioma];?>"></a>
				   <h2 id="h2comedia" class="text-center"><a id="titulonati" href="dramaromantico.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[32][$idioma];?></a></h2>
          </div>
	  </section>
	</div>
<?php
// incluindo rodapé da página
include_once('footer.php');
?>