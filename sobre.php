<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
    <div class="container">
		<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[12][$idioma];?></li>
  </ol>
	</nav>
	</section>
        <div class="pt-1">    
    <h1 id="tbesteirol"><?php echo $vetIdioma[82][$idioma];?></h1>
    <article>
<p><?php echo $vetIdioma[83][$idioma];?></p>
			</article>
</div>
        <div id="Bio"class="row">
          <div class="col-lg-6">
            <img class="rounded-circle mx-auto d-block" src="images/francisco.jpg" alt="<?php echo $vetIdioma[323][$idioma];?>">
            <h2 id="h3parodia" class="text-center">Francisco Anderson</h2>
			<h6 class="text-center">RA: 2650831813006</h6>
            <p class="text-justify"><?php echo $vetIdioma[101][$idioma];?> <a class="quem5" href="homeHQS.php">HQS</a>, <?php echo $vetIdioma[102][$idioma];?></p>
          </div>
          <div class="col-lg-6">
            <img class="rounded-circle mx-auto d-block" src="images/guilherme.jpg" alt="<?php echo $vetIdioma[324][$idioma];?>">
            <h2 id="h3parodia" class="text-center">Guilherme Alacoc</h2>
			<h6 class="text-center">RA: 2650831813009</h6>
            <p class="text-justify"><?php echo $vetIdioma[103][$idioma];?> <a class="quem6" href="doc_um.php"><?php echo $vetIdioma[8][$idioma];?></a>, <?php echo $vetIdioma[104][$idioma];?></p>
          </div>
          <div class="col-lg-6">
            <img class="rounded-circle mx-auto d-block" src="images/iury.jpg" alt="<?php echo $vetIdioma[325][$idioma];?>">
            <h2 id="h3parodia" class="text-center">Iury Kuklik</h2>
			<h6 class="text-center">RA: 2650831813011</h6>
            <p class="text-justify"><?php echo $vetIdioma[106][$idioma];?> <a class="quem7" href="animacao.php"><?php echo $vetIdioma[7][$idioma];?></a>.</p>
          </div>
         <div class="col-lg-6">
            <img class="rounded-circle mx-auto d-block" src="images/natalia.jpeg" alt="<?php echo $vetIdioma[326][$idioma];?>">
            <h2 id="h3parodia" class="text-center">Natalia Stelluto</h2>
			<h6 class="text-center">RA: 2650831813020</h6>
			 <p class="text-justify"><?php echo $vetIdioma[84][$idioma];?> <a class="quem1" href="comedia.php"><?php echo $vetIdioma[10][$idioma];?></a>, <a class="quem2" href="drama.php">DRAMA</a> e <a class="quem3" href="romance.php">ROMANCE</a>. <?php echo $vetIdioma[85][$idioma];?></p>
          </div>
        </div>
   </div>    
<?php
// incluindo rodapé da página
include_once('footer.php');
?>