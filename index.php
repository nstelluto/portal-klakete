<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	require_once('menu.php');
	// incluindo corpo da página
	include_once('carrossel.php');
?>
   <div class="container">
	 <article class="row">
		   <div class="col-12 col-sm-12 col-md-7 col-lg-5 col-xl-4 pt-4">
			  <iframe width="370" height="200" src="https://www.youtube-nocookie.com/embed/CD-SZObz7QU" 
				frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
				 allowfullscreen></iframe>
          </div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-7 col-xl-8 pt-4">
				<h3><a id="tituloindex" href="estreia.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[67][$idioma];?>: <?php echo $vetIdioma[71][$idioma];?></a></h3>
				<p id="pliga"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis. </p>
				<p id="pliga2"> Data de Publicação: 22/11/2018. </p>
				<p id="pliga3"> Autor: Natalia Stelluto. </p>
          </div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-5 col-xl-4 pt-4">
				  <iframe width="370" height="200" src="https://www.youtube-nocookie.com/embed/uiYjLvrJztI" 
					 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
					  allowfullscreen></iframe>
        </div>
		 <div class="col-12 col-sm-12 col-md-5 col-lg-7 col-xl-8 pt-4">
			 <h3><a id="tituloindex" href="entrevistas.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[60][$idioma];?>: <?php echo $vetIdioma[61][$idioma];?></a></h3>
				<p id="ppredador"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis. </p>
				<p id="ppredador2"> Data de Publicação: 22/11/2018. </p>
				<p id="ppredador3"> Autor: Francisco Anderson. </p>
          </div>		    
	  </article>
		<section class="row">
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<a href="noticias.php?idioma=<?php echo $idioma;?>"><img src="images/vingadores.jpg" alt="vingadores" id="img300" class="img-fluid"></a>
				<h3 class="text-center" id="h3300"><a id="tituloindex" href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[79][$idioma];?></a></h3>
				</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<a href="noticias.php?idioma=<?php echo $idioma;?>"><img src="images/aspanteras.jpg" alt="as panteras" id="img300" class="img-fluid"></a>
			  <h3 class="text-center" id="h3300"><a id="tituloindex" href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[81][$idioma];?></a></h3>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<a href="noticias.php?idioma=<?php echo $idioma;?>"><img src="images/osincriveis2.jpg" alt="os incriveis" id="img300" class="img-fluid"></a>
            <h3 class="text-center" id="h3300"><a id="tituloindex" href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[80][$idioma];?></a></h3>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<a href="noticias.php?idioma=<?php echo $idioma;?>"><img src="images/wifi-ralph.jpg" alt="wifi ralph" id="img300" class="img-fluid"></a>
              <h3 class="text-center" id="h3300"><a id="tituloindex" href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[78][$idioma];?></a></h3>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<a href="noticias.php?idioma=<?php echo $idioma;?>"><img src="images/aladdin.jpg" alt="aladdin" id="img300" class="img-fluid"></a>
              <h3 class="text-center" id="h3300"><a id="tituloindex" href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[77][$idioma];?></a></h3>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<a href="noticias.php?idioma=<?php echo $idioma;?>"><img src="images/animais-fantasticos.jpg" alt="animais fantasticos" id="img300" class="img-fluid"></a>
              <h3 class="text-center" id="h3300"><a id="tituloindex" href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[76][$idioma];?></a></h3>
			</div>
		</section>
	</div>
<?php
// incluindo rodapé da página
require_once('footer.php');
?>