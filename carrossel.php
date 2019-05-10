  <?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
?>
<div class="container">
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" alt="<?php echo $vetIdioma[339][$idioma];?>" src="images/quebra-nozes-index.jpeg">
            <div class="container">
              <div class="carousel-caption">
				  <h1 class="footer"><?php echo $vetIdioma[67][$idioma];?>:</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique.</p>
                <p><a class="btn btn-lg btn-primary" href="estreia.php?idioma=<?php echo $idioma;?>" id="button"><?php echo $vetIdioma[15][$idioma];?></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" alt="<?php echo $vetIdioma[333][$idioma];?>" src="images/aladdin-index.jpg">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="footer"><?php echo $vetIdioma[86][$idioma];?>:</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique. </p>
                <p><a class="btn btn-lg btn-primary" href="criticas.php?idioma=<?php echo $idioma;?>" id="button"><?php echo $vetIdioma[15][$idioma];?></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/animais-fantasticos-index.jpg" alt="<?php echo $vetIdioma[332][$idioma];?>">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="footer"><?php echo $vetIdioma[60][$idioma];?>:</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices arcu sagittis metus semper tristique.</p>
                <p><a class="btn btn-lg btn-primary" href="entrevistas.php?idioma=<?php echo $idioma;?>" id="button"><?php echo $vetIdioma[15][$idioma];?></a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
	  </main>
		</div>
