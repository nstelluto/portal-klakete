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
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[132][$idioma];?></li>
    </ol>
    </nav>
        
    <div id="Alinhar" class="pt-5 col-lg-">    
    <h1><?php echo $vetIdioma[113][$idioma];?></h1>
    <h4><?php echo $vetIdioma[132][$idioma];?></h4>
   
    <article>
 <?php echo $vetIdioma[133][$idioma];?>
</article>
 <img class="img-fluid" id="imgsn" src="images/cowspiracy.jpg" alt="<?php echo $vetIdioma[1105][$idioma];?>">
    <h6 id="legenda" class="text-center">Documentário: Cowspiracy</h6>
<article>
<?php echo $vetIdioma[134][$idioma];?>
</article>
            
<h4><?php echo $vetIdioma[124][$idioma];?></h4>
        </div>
     <div id="imgDoc"class="row">
          <div class="col-lg-4">
            <a href="http://www.whatthehealthfilm.com/"><img class="rounded" src="images/whatthehealth.jpg" width="220" height="220" alt="What the Health" ></a>
              <p>  </p>
      </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="https://www.forksoverknives.com/"><img class="rounded" src="images/forksoverknives.jpg" alt="Forks Over Knives" width="220" height="220" ></a>
              <p>  </p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="https://www.imdb.com/title/tt4144504/"><img class="rounded" src="images/comomudaromundo.jpg" alt="How To Change the World" width="220" height="220" ></a>
              <p>  </p>
          </div>
         <div class="col-lg-4">
            <a href="https://plasticoceans.org/about-film/"><img class="rounded" src="images/plasticocean.jpg" alt="Plastic Ocean" width="220" height="220" ></a>
             <p>  </p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="https://www.netflix.com/title/80168188"><img class="rounded" src="images/chasingcoral.jpg" alt="Chasing Coral" width="220" height="220" ></a>
              <p>  </p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="http://www.catchingthesun.tv/"><img class="rounded" src="images/catchingthesun.jpg" alt="Catching the sun" width="220" height="220" ></a>
          <p>  </p>
          </div><!-- /.col-lg-4 -->
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
      <th scope="row">Citizen Four</th>
      <td>Mark</td>
      <td>✦✦✦</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">Awake the life of Yogananda</th>
      <td>Jacob</td>
      <td>✦✦✦</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Ilha das Flores</th>
      <td>Larry</td>
      <td>✦✦✦</td>
      <td>@twitter</td>
    </tr>
      <tr>
      <th scope="row">Rede Sombria</th>
      <td>Larry</td>
      <td>✦✦✦</td>
      <td>@twitter</td>
    </tr>
      <tr>
      <th scope="row">Living in the Material World</th>
      <td>Martin Scorcesee</td>
      <td>✦✦✦✦✦</td>
      <td>@twitter</td>
    </tr>
      <tr>
      <th scope="row">Panteras Negras</th>
      <td>Larry</td>
      <td>✦✦✦</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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