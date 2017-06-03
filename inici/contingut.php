<?php

if(empty($_SESSION['rol'])){

	$_SESSION['rol'] = "";
}

if($_SESSION['rol'] == ""){
	?>
	<div class="container" style="padding-top: 10%">
		<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-lg-7 col-sm-7 col-xs-12">
					<div id="logo">
						<img alt="Logo página" src="../img/logoF1_2.jpg" width="350" id="f1_logo" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-lg-5 col-md-6 col-md-push-3 col-sm-12 col-xs-12">
			<div class="login-container">
            	<div id="output"></div>
            	<div class="avatar"></div>
            	<div class="form-box">
                <form action="" method="POST">
                    <input name="fMail" type="text" placeholder="email">
                    <input type="password" placeholder="password" name="fPass"><br><br>
                    
                    <input class="btn btn-lg btn-success active login" type="submit" name="fLogin" value="Login">
                </form>
            </div>
           </div>
		</div>
</div>
<?php 

	} else {?>
	<div class="container">
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div id="logo">
						<img alt="Logo página" src="../img/logoF1_2.jpg" width="350" id="f1_logo2" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?
	if($_SESSION['rol'] == 'registrado' || $_SESSION['rol'] == 'super'){

		echo clasificacion($connect, "2017");
	} else {
?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Bienvenidos a F1 History</h1>      
    <p>La primera web con datos históricos de este deporte</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Ventajas de estar registrado</h3><br>
  <div class="row">
  <h4>Imágenes de accidentes</h4><br>
    <div class="col-sm-3" id="img-1">
      <img src="../img/portada/accidente.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <img src="../img/portada/accidente1.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <img src="../img/portada/accidente2.jpg" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <img src="../img/portada/accidente3.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
  <h4>Merchandasing</h4><br>
    <div class="col-sm-3">
      <img src="../img/portada/producto.jpg" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <img src="../img/portada/producto1.jpg" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <img src="../img/portada/producto2.jpg" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <img src="../img/portada/producto3.jpg" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
<div class="container-fluid bg-3 text-center">   
  <div class="row">
  <h4>Videos exclusivos</h4><br>
    <div class="col-sm-3">
      <video class="video" controls src="../media/video1.mp4" style="width:100%"></video>
    </div>
    <div class="col-sm-3"> 
      <video class="video" controls src="../media/video2.mp4" style="width:100%"></video>
    </div>
    <div class="col-sm-3"> 
      <video class="video" controls src="../media/video3.mp4" style="width:100%"></video>
    </div>
    <div class="col-sm-3">
      <video class="video" controls src="../media/video4.mp4" style="width:100%"></video>
    </div>
  </div>
</div><br><br>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Y mucho más...</h1>      
    <p><a class="various" data-fancybox-type="iframe" href="../acceso/index2.php?sec=registro" style="text-decoration: none;">Registrate</a> ahora!</p>
  </div>
</div>
<?}?>
<script type="text/javascript">
  $(function(){
    $('.video').on('mouseenter', function(){
        if( this.paused) this.play();
    }).on('mouseleave', function(){
        if( !this.paused) this.pause();
    });
});
</script>