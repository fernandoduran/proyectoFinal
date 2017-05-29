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
	if($_SESSION['rol'] != 'admin'){

		echo clasificacion($connect, "2017");
	}
?>