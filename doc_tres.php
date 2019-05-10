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
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[123][$idioma];?></li>
    </ol></nav>        
    <div id="Alinhar" class="pt-5 col-lg-">    
    <h1><?php echo $vetIdioma[113][$idioma];?></h1>
    <h4><?php echo $vetIdioma[123][$idioma];?></h4>
        <article>
            <?php echo $vetIdioma[120][$idioma];?>
            </article>
 <img class="img-fluid" id="imgsn" src="images/yogananda.jpg" alt="<?php echo $vetIdioma[1102][$idioma];?>">
    <h6 id="legenda" class="text-center">Documentário: Awake the Life of Yogananda</h6>
  <article>
<?php echo $vetIdioma[121][$idioma];?><?php echo $vetIdioma[122][$idioma];?><a href="http://www.abcine.org.br/artigos/?id=1377&/o-sujeito-no-documentario-torna-se-o-sujeito-do-documentario-um-estudo-sobre-a-autobiografia-em-santiago">Abcine</a></article>
    <h4>Trailer</h4>
           <div class="embed-responsive embed-responsive-16by9">
            <iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/fJh9O8pI4Ck" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
            <h4><?php echo $vetIdioma[124][$idioma];?></h4>
        </div>
     <div id="Bio"class="row">
          <div class="col-lg-4">
            <a href="https://pt.wikipedia.org/wiki/Martin_Scorsese"><img class="rounded-circle" src="images/martinscor.jpg" alt="Martin Scorcese" width="190" height="190"></a>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
        <a href="https://twitter.com/gabriel_chaim"><img class="rounded-circle" src="images/gabrielchaim.jpg" alt="Gabriel Chaim" width="190" height="190"></a>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="https://www.imdb.com/name/nm2578458/bio"><img class="rounded-circle" src="images/hemal.jpg" alt="Hemal" width="190" height="190"></a>
          </div>
         </div><!-- /.col-lg-4 -->
        
<h4>Documentários Recomendados</h4>
     <div id="Bio"class="row">
          <div class="col-lg-4">
            <img class="rounded" src="images/harekrishna.jpg" alt="<?php echo $vetIdioma[1109][$idioma];?>" width="140" height="140">
            <h2>Hare Krishna! </h2>
            <p><?php echo $vetIdioma[125][$idioma];?></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded" src="images/fortheloveofspock.jpg" alt="<?php echo $vetIdioma[1110][$idioma];?>" width="140" height="140">
            <h2>For the Love of Spock</h2>
            <p><?php echo $vetIdioma[126][$idioma];?></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded" src="images/sunshinemakers.jpg" alt="<?php echo $vetIdioma[1111][$idioma];?>" width="140" height="140">
            <h2>The Sunshine Makers</h2>
            <p><?php echo $vetIdioma[127][$idioma];?></p>
          </div>
        </div>   

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Direção</th>
      <th scope="col">Classificação</th>
      <th scope="col">Ano</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Living in the Material World</th>
      <td>Martin Scorsese</td>
      <td>✦✦✦✦✦</td>
      <td>2015</td>
    </tr>
    <tr>
      <th scope="row">The Sunshine Makers</th>
      <td>Jeremy</td>
      <td>✦✦✦✦✦</td>
      <td>2015</td>
    </tr>
    <tr>
      <th scope="row">Hare Krishna!</th>
      <td>Larry</td>
      <td>✦✦✦✦✦</td>
      <td>2017</td>
    </tr>
      <tr>
      <th scope="row">For the Love of Spock</th>
      <td>Larry</td>
      <td>✦✦✦✦✦</td>
      <td>2016</td>
    </tr>
      <tr>
  </tbody>
</table>
</div>
</div>


  
<nav id="submenu" class="navbar-dark bg-dark">
		 <div class="container">
			  <div class="row">
  <div class="col-md-6 col-lg-5 offset-md-3">
	 <h3 id="relacionados"><?php echo $vetIdioma[29][$idioma];?></h3>
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
<?php
// incluindo rodapé da página
include_once('footer.php');
?>