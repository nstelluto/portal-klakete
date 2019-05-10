<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	require_once('menu.php');
	// incluindo corpo da página
?>
	<div class="container">
		<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[13][$idioma];?></li>
  </ol>
	</nav>
	</section>
		<article class="pt-1 my-md-1 pt-md-1">
	   <div class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 class="titulo_um"><?php echo $vetIdioma[13][$idioma];?></h1>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis gravida. Integer dapibus dui ex, eget placerat sapien tincidunt in. Fusce suscipit a nisi eget ullamcorper. Vivamus et congue libero, eu vestibulum odio. Morbi eget nibh ut ex bibendum convallis. Mauris volutpat vitae nisi eget porttitor. Nullam bibendum, odio non tristique tempus, dui est efficitur lorem, id gravida nibh ligula eu nunc. Morbi cursus leo non odio gravida suscipit. Aenean quis lacinia magna. Integer semper lorem eros, id placerat est iaculis ut. Etiam arcu nunc, iaculis nec aliquam in, aliquam a magna.
Nulla semper varius augue, sed egestas est consectetur eu. Integer pharetra dictum ex, in accumsan felis luctus id. Ut dui nisi, hendrerit non erat nec, scelerisque fringilla orci. Suspendisse potenti. Fusce pharetra, tortor ornare faucibus convallis, nibh ligula tristique sapien, in dignissim est turpis vel ligula. Donec blandit, purus vitae egestas porta, ex sem volutpat lectus, vestibulum aliquet ligula diam non odio. Etiam convallis lobortis velit, quis finibus urna lacinia et. Nunc aliquam arcu felis, vestibulum lobortis arcu suscipit eget. Nullam ac arcu ut ligula condimentum porttitor. Suspendisse vehicula lectus ut ligula dictum, et auctor libero facilisis.
</p>
                 <h1 class="titulo_um"><?php echo $vetIdioma[96][$idioma];?></h1>
				 <p class="texto_um">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis gravida. Integer dapibus dui ex, eget placerat sapien tincidunt in. Fusce suscipit a nisi eget ullamcorper. Vivamus et congue libero, eu vestibulum odio. Morbi eget nibh ut ex bibendum convallis. Mauris volutpat vitae nisi eget porttitor. Nullam bibendum, odio non tristique tempus, dui est efficitur lorem, id gravida nibh ligula eu nunc. Morbi cursus leo non odio gravida suscipit. Aenean quis lacinia magna. Integer semper lorem eros, id placerat est iaculis ut. Etiam arcu nunc, iaculis nec aliquam in, aliquam a magna.
</p>
                 
                 <h1 class="titulo_um"><?php echo $vetIdioma[97][$idioma];?></h1>
				 <p class="texto_um">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis gravida. Integer dapibus dui ex, eget placerat sapien tincidunt in. Fusce suscipit a nisi eget ullamcorper. Vivamus et congue libero, eu vestibulum odio. Morbi eget nibh ut ex bibendum convallis. Mauris volutpat vitae nisi eget porttitor. Nullam bibendum, odio non tristique tempus, dui est efficitur 
</p>
                 
                <h1 class="titulo_um"><?php echo $vetIdioma[98][$idioma];?></h1>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis gravida. Integer dapibus dui ex, eget placerat sapien tincidunt in. Fusce suscipit a nisi eget ullamcorper. Vivamus et congue libero, eu vestibulum odio. Morbi eget nibh ut ex bibendum convallis. Mauris volutpat vitae nisi eget porttitor. Nullam bibendum, odio non tristique tempus, dui est efficitu.
</p>
                 
                 <h1 class="titulo_um"><?php echo $vetIdioma[99][$idioma];?></h1>
                 <p class="texto_recuo">1- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis.</p>
                 <p class="texto_recuo">2- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis.</p>
                 <p class="texto_recuo">3- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis.</p>
                 <p class="texto_recuo">4- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis.</p>
                 <p class="texto_recuo_final">5- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis.</p>
                     
                <h1 class="titulo_um"><?php echo $vetIdioma[100][$idioma];?></h1>
				 <p class="texto_um"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat arcu sit amet odio maximus luctus. Vestibulum quis finibus elit, vel dapibus augue. Integer pretium justo in facilisis gravida. Integer dapibus dui ex, eget placerat sapien tincidunt in. Fusce suscipit a nisi eget ullamcorper. Vivamus et congue libero, eu vestibulum odio. Morbi eget nibh ut ex bibendum convallis. Mauris volutpat vitae nisi eget porttitor. Nullam bibendum, odio non tristique tempus, dui est efficitur.
</p>
          </div>
		   </div>
	  </article>
	
	</div>
<?php

	// incluindo rodapé da página
	include('footer.php');
?>