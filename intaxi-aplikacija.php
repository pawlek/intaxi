<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> InTaxi Aplikacija</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>

    </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row align-items-center justify-content-md-center content home" id="home" hidden>
            <div class="col-12">
                <div class="row align-items-center justify-content-md-center">
                   <nav class="top" id="nav">
                   		<a href="" class="logo"></a>
						<a href="#home"> BOOK NOW</a>
						<a href="#payments"> PLAČILA</a>
						<a href="#app"> APLIKACIJA</a>
						<a href="#company"> ZA PODJETJA</a>
						<a href="#work"> ZAPOSLITEV</a>
					</nav>
                </div>
            </div>
		</div>
       <a href="#" class="back"> BACK</a>
        <div class="row align-items-center justify-content-md-center parallax-window content app app-home" id="app" data-parallax="scroll" data-image-src="img/bg/app.jpeg">
        	<div class="col-12 col-md-6 video">
        		<div class="iphone-video">
					<p>
						<video id="iphone-video"  width="282" height="500" data-video="0">
							<source src="content/intaxi.mp4" type="video/mp4">
						</video>
						<br>
						<button onclick="playPause()" id="video-iphone" class="play"></button>
					</p>
       			</div>
        	</div>
        	<div class="col-12 col-md-5">
        		<div class="row">
        			<div class="col-12">
        				<h3 class="purple-title"> <span>FIKSNA CENA</span><br /> BREZ PROBLEMA!</h3>
        			</div>
        			<div class="col-12 app-text">
        				<strong>Bi se peljali po fiksni ceni z taksi v Ljubljani? <a href="index">NAROČI ONLINE </a> ali preko Aplikacije!</strong>
        				<ol>
        					<li>Aplikacija najprej zahteva Tvojo registracijo!</li>
        					<ul><li>Zaupaj nam svojo telefonsko številko in elektronski naslov.</li></ul>
        					<li>Na zaslonu določi mesto prevzema in lokacijo kam bi se rad peljal.</li>
        					<li>Izberi vrsto vozila z že izpisano fixno ceno in počakaj nekaj sekund.</li>
        					<ul><li>Aplikacija izbere najbljižje Tebi taxi vozilo.</li></ul>
							<ul><li>Ta čas lahko na zaslonu vidiš kateri voznik je na poti.</li> </ul>
							<ul><li>Svojo vožnjo lahko deliš s prijatelji na družbenih omrežjih.</li> </ul>
        				</ol>
       		
						
							Poglej si video kako enostavno naročiš taxi!
							<button onclick="playPause()" id="video-click" class="play2">CLICK and VIEW</button>
						
        			</div>
        			<div class="col-12 store">
        				<div class="row">
        					<div class="col-lg-3 hidden-md-down"></div>
        					<div class="col-6 col-lg-3 col-sm-6">
        						<a href="https://play.google.com/store/apps/details?id=com.yta.passenger.intaxi&amp;hl=sl"><img class="playstore" src="img/playstore.png" alt="intaxi_googleplay" width="128" height="128" /></a>
        					</div>
        					<div class="col-6 col-lg-3 col-sm-6">
        						<a href="https://appsto.re/si/THhcib.i"><img class="appstore" src="img/appstore.png" alt="intaxi_appstore" width="128" height="128" /></a>
        					</div>
        					<div class="col-lg-3 hidden-md-down"></div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-12" hidden>
        		NIMAŠ ČASA ZA NALAGANJE? BOOK NOW
        	</div>
        </div>
    </div>
    <footer hidden>
		<div class="row">
			<div class="col-12"> SOCIAL </div>
		</div>
   		<div class="row">
   			<div class="col-12 col-md-6"> 1 block</div>
   			<div class="col-12 col-md-6"> 2 block</div>
   		</div>
   		<div class="row">
   			<div class="col-12"> COPYRIGHT</div>
   		</div>
    </footer>
    
    
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js"></script>
    <script>
		$(document).ready(function(){
			$('a.back').click(function(){
				parent.history.back();
				return false;
			});
		});
		$(window).on("scroll touchmove", function () {
			"use strict";
			$('#nav').toggleClass('fix-nav', $(document).scrollTop() > 35);
		});
		
		var myVideo = document.getElementById("iphone-video"); 

		function playPause() { 
			if (myVideo.paused) 
				myVideo.play(); 
			else 
				myVideo.pause(); 
		}

		function videoIphone() {
			this.classList.toggle('play');
			this.classList.toggle('pause');
		}
		document.querySelector('#video-iphone').addEventListener('click', videoIphone);

		function videoClick() {
			this.classList.toggle('play2');
			this.classList.toggle('pause2');
		}
		document.querySelector('#video-click').addEventListener('click', videoClick);
	</script>
</body>
</html>