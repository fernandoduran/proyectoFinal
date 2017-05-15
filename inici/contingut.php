<?php

if(!$_SESSION['rol']){

	$_SESSION['rol'] = "";
}
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

	<?php
		if($_SESSION['rol'] == ""){
	?>

	
		<div class="col-lg-7 col-sm-7">
			<div class="login-container">
            	<div id="output"></div>
            	<div class="avatar"></div>
            	<div class="form-box">
                <form action="" method="">
                    <input name="user" type="text" placeholder="username">
                    <input type="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                </form>
            </div>
           </div>
        
        <script type="text/javascript">
$(function(){
var textfield = $("input[name=user]");
            $('button[type="submit"]').click(function(e) {
                e.preventDefault();
                //little validation just to check username
                if (textfield.val() != "") {
                    //$("body").scrollTo("#output");
                    $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
                    $("#output").removeClass(' alert-danger');
                    $("input").css({
                    "height":"0",
                    "padding":"0",
                    "margin":"0",
                    "opacity":"0"
                    });
                    //change button text 
                    $('button[type="submit"]').html("continue")
                    .removeClass("btn-info")
                    .addClass("btn-default").click(function(){
                    $("input").css({
                    "height":"auto",
                    "padding":"10px",
                    "opacity":"1"
                    }).val("");
                    });
                    
                    //show avatar
                    $(".avatar").css({
                        "background-image": "url('http://api.randomuser.me/0.3.2/portraits/women/35.jpg')"
                    });
                } else {
                    //remove success mesage replaced with error message
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
                }
                //console.log(textfield.val());

            });
	});

	</script>
	        
	</div>
	<?php } ?>
</div>