<?php
if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
	require_once("vetor.php");
	// incluindo topo da página
	require_once('menu.php');
?>
<div class="container">
<nav class="pt-5" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $vetIdioma[55][$idioma];?></li>
  </ol>
	</nav>
	   <section class="row">
		     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				 <h1 id="tbesteirol"><?php echo $vetIdioma[55][$idioma];?></h1>
		   </div>
				 </section>
	<form>
	<div class="form-group">
    <label for="inputName"><?php echo $vetIdioma[54][$idioma];?></label>
    <input type="text" class="form-control" id="inputName" placeholder="Insira seu nome completo">
  </div>
 <div class="form-group">
    <label for="exampleFormControlInput1">E-mail:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu e-mail">
  </div>
	<div class="form-group">
 <label for="validationDefault05"><?php echo $vetIdioma[56][$idioma];?></label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Insira seu telefone com o DDD">
    </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1"><?php echo $vetIdioma[57][$idioma];?></label>
    <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3"></textarea>
  </div>
  <input id="button_c" class="btn btn-primary" type="submit" value="<?php echo $vetIdioma[58][$idioma];?>">
<input id="button_c" class="btn btn-primary" type="reset" value="<?php echo $vetIdioma[59][$idioma];?>">
</form>
</div>
			
<?php
include_once('footer.php');
?>