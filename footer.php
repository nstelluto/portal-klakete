      <footer class="pt-4 my-md-5 pt-md-5">
	 <div class="container">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
			  <h2 id="klakete">KLAKETE</h2>
          </div>
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <h5 class="footer"><?php echo $vetIdioma[700][$idioma];?></h5>
            <ul class="list-unstyled text-small">
				<p id="siga">KLAKETE - 2018 <i style="font-size:24px" class="fa">&#xf25e;</i></p>
            </ul>
          </div>
			      <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <h5 class="footer">Menu</h5>
            <ul class="list-unstyled text-small">
              <li><a id="siga" href="index.php">Home</a></li>
              <li><a id="siga"<?php if ($active=='index.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?>  href="#"><?php echo $vetIdioma[1][$idioma];?></a></li>
              <li><a id="siga"<?php if ($active=='destaque.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?>  href="#"><?php echo $vetIdioma[6][$idioma];?></a></li>
              <li><a id="siga"<?php if ($active=='sobre.php') { echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?>  href="#"><?php echo $vetIdioma[14][$idioma];?></a></li>
              <li><a id="siga"<?php if ($active=='contato.php'){ echo "aria-selected='true'";} else{  echo"aria-selected='false'"; } ?>  href="contato.php"><?php echo $vetIdioma[11][$idioma];?></a></li>
            </ul>
           </div>
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <h5 class="footer"><?php echo $vetIdioma[701][$idioma];?></h5>
            <ul class="list-unstyled text-small">
				<a class="nav-link" href="#"><img src="images/facebook.png" alt="Facebook" class="img1"></a>
				<a class="nav-link" href="#"><img src="images/twitter.png" alt="Twitter" class="img2"></a>
				<a class="nav-link" href="#"><img src="images/instagram.png" alt="Instagram" class="img3"></a>
				<a class="nav-link" href="#"><img src="images/bitcoin.png" alt="Bitcoins" class="img4"></a>
            </ul>
          </div>
        </div>
	</div>
      </footer>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>