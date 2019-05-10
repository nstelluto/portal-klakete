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
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[116][$idioma];?></li>
    </ol></nav>    
    <div id="Alinhar" class="pt-5 col-lg-">    
    <h1><?php echo $vetIdioma[113][$idioma];?></h1>
    <h4><?php echo $vetIdioma[116][$idioma];?></h4>
    <img class="img-fluid" id="imgsn" src="images/winteronfire.jpg" alt="<?php echo $vetIdioma[1106][$idioma];?>">
    <h6 id="legenda" class="text-center">Documentário Winter on Fire</h6>
    <article>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor est, mollis vel enim nec, facilisis blandit sapien. Duis et lorem vitae felis accumsan scelerisque vitae eget augue. Maecenas tortor lacus, finibus et sem ultrices, porta sollicitudin nulla. Pellentesque dictum purus dolor, a consectetur metus eleifend vel. Integer ut accumsan leo, sed blandit risus. Cras placerat tincidunt enim, non dapibus lorem convallis sed. Integer congue quam mi, eu dapibus est aliquet et. Integer ut efficitur libero, posuere dignissim risus.

In ut lorem in lectus dapibus mattis a tempus sapien. Sed ac nunc vitae tellus placerat ultricies ut sed nisl. Nunc sapien ante, venenatis nec facilisis eu, auctor quis risus. Morbi gravida molestie lectus sed molestie. Quisque at velit et dui venenatis tristique. Mauris convallis blandit ante sit amet ornare. In in dolor iaculis massa tempus viverra. Morbi tellus ipsum, vehicula quis eleifend a, fringilla ac neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse varius dapibus tortor non vehicula. Nunc dictum dolor at nibh facilisis fermentum. Sed sed faucibus lorem. Praesent luctus est nec hendrerit molestie. Sed placerat nisi vel quam auctor tempor. Ut nisl urna, faucibus eget pharetra et, dapibus eu nunc. </article>
<h4><?php echo $vetIdioma[117][$idioma];?></h4>
        </div>
     <div id="Bio"class="row">
          <div class="col-lg-4">
            <img class="rounded" src="images/thesquare.jpg" alt="<?php echo $vetIdioma[1107][$idioma];?>" width="140" height="140">
            <h2>The Square</h2>
            <p><?php echo $vetIdioma[118][$idioma];?></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded" src="images/restrepo.jpg" alt="<?php echo $vetIdioma[1108][$idioma];?>" width="140" height="140">
            <h2>Restrepo</h2>
            <p><?php echo $vetIdioma[119][$idioma];?></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Doc3</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
      <th scope="row">The Square</th>
      <td>Jehane Noujaim</td>
      <td>✦✦✦✦✦</td>
      <td>2013</td>
    </tr>
    <tr>
      <th scope="row">Winter on Fire: Ukraine's Fight for Freedom</th>
      <td> Evgeny Afineevsky</td>
      <td>✦✦✦✦✦</td>
      <td>2015</td>
    </tr>
    <tr>
      <th scope="row">Restrepo</th>
      <td> Tim Hetherington, Sebastian Junger</td>
      <td>✦✦✦✦</td>
      <td>2010</td>
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
    <a class="nav-link" href="doc_tres.php?idioma=<?php echo $idioma;?>">Biografico</a>
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