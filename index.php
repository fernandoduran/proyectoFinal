<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>F1 History</title>
        <style type="text/css">
        	* {
        	    margin: 0;
        	    padding: 0;
        	}

        	#content {
        	    background: #fff  ; /* Para Internet Explorer */
        	    background: rgba(255,255,255,.5)  ;
        	    border-radius: 10px;
        	    box-shadow: 5px 5px 10px rgb(200,200,200)  ;
        	    font-size: 2rem;
        	    margin: 0 auto;
        	    padding: 50px 0;
        	    text-align: center;
        	    text-shadow: 2px 2px 4px rgb(255, 255, 255)  ;
        	    width: 80%;
        	}

        	#skip {
		    background: transparent;
		    color: white;
		    width: 10%;
		}

        	#video {
        	    height: 100%;
        	    position: fixed;
        	    width: 100%;
        	    z-index: -100;
        	}
        </style>
       
        <script type="text/javascript">
        	$(document).ready(function() {
        	    $( "#skip" ).slideUp( 30 ).delay( 10000 ).fadeIn( 400 );
        	});
        </script>
        <script type="text/javascript">
        	function skip() {
                var video = document.getElementById("video");
                video.currentTime = 0;
            parent.location.assign("inicio.php");
            }
        </script>
    </head>
    <body>
    	<iframe id="video" src="https://player.vimeo.com/video/218791955?autoplay=1&title=0&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        
        <button type="button" class="btn btn-default" id="skip" onclick="skip()">Skip</button>
    </body>
</html>
