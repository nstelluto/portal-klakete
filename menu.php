<!doctype html>
<html lang="pt-br" class="h-100">
    <header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>KLAKETE</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		 <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	</header>

<?php
	require_once("vetor.php");
$active = basename($_SERVER['SCRIPT_NAME']);
?> 
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
		<div class="container">
        <a class="navbar-brand" aria-controls="home" <?php if ($active=='index.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="index.php?idioma=<?php echo $idioma;?>"><img src="images/Logo-claquete.png" alt="Logo Claquete, página inicial"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
<div class="dropdown">
  <button class="btn btn-secondary font-weight-bold  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $vetIdioma[1][$idioma];?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item"<?php if ($active=='estreia.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="estreia.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[2][$idioma];?></a>
    <a class="dropdown-item" <?php if ($active=='noticias.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="noticias.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[3][$idioma];?></a>
    <a class="dropdown-item" <?php if ($active=='entrevistas.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="entrevistas.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[4][$idioma];?></a>
	<a class="dropdown-item" <?php if ($active=='criticas.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="criticas.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[5][$idioma];?></a>
  </div> 
</div>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $vetIdioma[6][$idioma];?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a id="titulochico" class="dropdown-item"<?php if ($active=='homeHQS.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="homeHQS.php?idioma=<?php echo $idioma;?>">HQS</a>
    <a id="tituloiury" class="dropdown-item" <?php if ($active=='animacao.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="animacao.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[7][$idioma];?></a>
    <a id="titulogui" class="dropdown-item" <?php if ($active=='doc_um.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="doc_um.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[8][$idioma];?></a>
    <a id="titulonat" class="dropdown-item" <?php if ($active=='comedia.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="comedia.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[10][$idioma];?></a>
    <a id="titulona" class="dropdown-item" <?php if ($active=='romance.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="romance.php?idioma=<?php echo $idioma;?>">ROMANCE</a>
	<a id="titulonati" class="dropdown-item" <?php if ($active=='drama.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="drama.php?idioma=<?php echo $idioma;?>">DRAMA</a>
  </div>
</div>
			  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $vetIdioma[14][$idioma];?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" <?php if ($active=='sobre.php'){ echo " aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="sobre.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[12][$idioma];?></a>
    <a class="dropdown-item" <?php if ($active=='normas.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?> href="normas.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[13][$idioma];?></a>
  </div>
</div>
     <li class="nav-item font-weight-bold pb-1 ml-3">
       <a id="menu" <?php if ($active=='contato.php'){ echo "class='nav-link active' aria-selected='true'";} else{  echo"class='nav-link'  aria-selected='false'"; } ?> href="contato.php?idioma=<?php echo $idioma;?>"><?php echo $vetIdioma[11][$idioma];?></a>
            </li>
            </ul>
			 <section class="row pb-4">
				 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<p id="idiomasp"><?php echo $vetIdioma[328][$idioma];?></p>
					  </div>
				  </section>
			  <section  id="idiomas" class="row">
			   <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
			 <a class="nav-link"  href="?idioma=1"><img src="images/eua.png"<?php if ($active=='?idioma=1'){ echo "class= aria-selected='true'";} else{  echo"class= aria-selected='false'"; } ?> alt="<?php echo $vetIdioma[329][$idioma];?>"></a>&nbsp;&nbsp;
			  </div>
			  <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <a class="nav-link" href="?idioma=2"><img src="images/espanha.png" <?php if ($active=='?idioma=2'){ echo "class= aria-selected='true'";} else{  echo"class= aria-selected='false'"; } ?> alt="<?php echo $vetIdioma[330][$idioma];?>"></a>&nbsp;&nbsp;
			  </div>
  			<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <a class="nav-link" href="?idioma=0"><img src="images/brasil.png" <?php if ($active=='?idioma=3'){ echo "class= aria-selected='true'";} else{  echo"class= aria-selected='false'"; } ?> alt="<?php echo $vetIdioma[331][$idioma];?>"></a>&nbsp;&nbsp;
			  </div>
		  </section>
      </div>
		  </div>
      </nav>