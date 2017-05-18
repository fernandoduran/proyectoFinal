<?php

if(!$_SESSION['rol']){

	$_SESSION['rol'] = "";
}

if($_SESSION['rol'] == ""){
	?>
		<div class="container">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-7 col-sm-7">
						<div id="logo">
							<img alt="Logo página" src="../img/logoF1_2.jpg" width="350" id="f1_logo">
						</div>
					</div>
				</div>
			</div>
	
		<div class="col-lg-7 col-sm-7">
			<div class="login-container">
            	<div id="output"></div>
            	<div class="avatar"></div>
            	<div class="form-box">
                <form action="" method="POST">
                    <input name="fMail" type="text" placeholder="email">
                    <input type="password" placeholder="password" name="fPass"><br><br>
                    
                    <input class="btn btn-lg btn-success active" type="submit" name="fLogin" value="Login">
                </form>
            </div>
           </div>
	</div>
</div>
<?php } else {?>
	<div class="container">
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-7 col-sm-7">
					<div id="logo">
						<img alt="Logo página" src="../img/logoF1_2.jpg" width="350" id="f1_logo2">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>