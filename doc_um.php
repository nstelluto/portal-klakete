<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	include_once('menu.php');
?>
<div class="container">
<section class="pt-5">
<nav aria-label="breadcrumb">
  <ol id="doc" class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li id="breadcrumb-item"class="breadcrumb-item"><a href="doc_um.php">Documentários</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[113][$idioma];?></li>
    </ol>
</nav>
    
        <div id="Alinhar" class="pt-5 col-lg-">    
    <h1><?php echo $vetIdioma[113][$idioma];?></h1>
    <h4><?php echo $vetIdioma[114][$idioma];?></h4>       
    <img class="img-fluid" id="imgsn" src="images/amongbelievers.jpg" alt="Document" alt="<?php echo $vetIdioma[1101][$idioma];?>">
        <h6 id="legenda" class="text-center">Documentário Among Believers</h6>
   <article>
<?php echo $vetIdioma[108][$idioma];?>
 </article>
            <img class="img-fluid" id="imgsn" src="images/yogananda.jpg" alt="<?php echo $vetIdioma[1102][$idioma];?>">
            <h6 id="legenda" class="text-center">Documentário Awake: The Life of Yogananda</h6>
   <article>
<?php echo $vetIdioma[109][$idioma];?>

 </article>
            <img class="img-fluid" id="imgsn" src="images/risk.jpg" alt="<?php echo $vetIdioma[1103][$idioma];?>">
            <h6 id="legenda" class="text-center">Documentário Risk</h6>
   <article>
<?php echo $vetIdioma[110][$idioma];?>
            </article>
            <img class="img-fluid" id="imgsn" src="images/winteronfire.jpg" alt="<?php echo $vetIdioma[1104][$idioma];?>">
            <h6 id="legenda" class="text-center">Documentário Winter on Fire</h6>
   <article>
<?php echo $vetIdioma[111][$idioma];?>
            </article>
            <img class="img-fluid" id="imgsn" src="images/cowspiracy.jpg" alt="<?php echo $vetIdioma[1105][$idioma];?>">
            <h6 id="legenda" class="text-center">Documentário Cowspiracy</h6>
   <article>
<?php echo $vetIdioma[112][$idioma];?> <a href="https://pt.wikipedia.org/wiki/Document%C3%A1rio">Wikipédia, </a>
       <a href="http://www.gostodeler.com.br/materia/14415/o_que_e_documentario.html">Gosto de Ler, </a>
          <a href="https://www.iar.unicamp.br/docentes/fernaoramos/o_que_e_documentario.pdf">Fernão Pessoa Ramos.</a>
            </article>
    
</div>
      </section>
</div>
    
	<nav id="submenu" class="navbar-dark bg-dark">
		 <div class="container">
			  <div class="row">
  <div class="col-md-6 col-lg-5 offset-md-3">
	 <h3 id="relacionados"><?php echo $vetIdioma[115][$idioma];?></h3>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="doc_dois.php?idioma=<?php echo $idioma;?>">Guerra</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="doc_tres.php?idioma=<?php echo $idioma;?>">Biográfico</a>
  </li>
	<li class="nav-item">
    <a class="nav-link" href="doc_quatro.php?idioma=<?php echo $idioma;?>">Investigativo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="doc_cinco.php?idioma=<?php echo $idioma;?>">Ecológico</a>
  </li>
	<li class="nav-item">
    <a class="nav-link" href="doc_seis.php?idioma=<?php echo $idioma;?>">Religioso</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="doc_sete.php?idioma=<?php echo $idioma;?>">Reflexivo</a>
  </li>
</ul>
		 </div>
		</div>
		 </div>
	</nav>
	
</div>

<?php
// incluindo rodapé da página
include_once('footer.php');
?>