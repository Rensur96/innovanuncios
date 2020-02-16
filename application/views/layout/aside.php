<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

<h1 id="fh5co-logo"><a href="index.html"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
<nav id="fh5co-main-menu" role="navigation">
    <ul>
    <?php
        if ($login) {
    ?>
        <li class="fh5co-active"><a href="index.html">Home</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
    <?php
        } else{
    ?>
<a href="" class="btn btn--primary">Registro</a>
<h4 class="card-title mb-4 mt-1">Entrar</h4>
	 <form>
    <div class="form-group">
    	<label>Correo electronico:</label>
        <input name="" class="form-control" placeholder="Email" type="email">
    </div> 
    <div class="form-group">
    	<a class="float-right" href="#">La olvidaste?</a>
    	<label>Contraseña</label>
        <input class="form-control" placeholder="******" type="password">
    </div> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Recordar </label>
    </div> 
    </div>  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Iniciar  </button>
    </div>                                                          
</form>

        <?php
            }
        ?>
     
    </ul>
</nav>

<div class="fh5co-footer">
    
    <p><small>&copy; 2018 Nitro Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Distributed by: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></span></small></p>
    <ul>
        <li><a href="#"><i class="icon-facebook"></i></a></li>
        <li><a href="#"><i class="icon-twitter"></i></a></li>
        <li><a href="#"><i class="icon-instagram"></i></a></li>
        <li><a href="#"><i class="icon-linkedin"></i></a></li>
    </ul>
</div>

</aside>

<div id="fh5co-main">