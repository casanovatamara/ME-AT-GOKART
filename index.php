<DOCTYPE html>

<html>

<head>
	<title> I LOVE CAT </title>
	<link href="magstart.css" rel="stylesheet" type="text/css">
</head>

<header>
<button class="closebutton"> Back </button>
	<h1> ME AT GO-KART</h1>

</header>

<body>
	
	<div class="divlogin"> 
		<form class="form">
		Enter your pilot name below and press go
		<input type="text" name="drivername" value=" Enter Pilot Name"><br>
		</form>
		<button class="login"> Go </button>
	</div>
	
	<button class="button"> <a href="yellowscreen.php">  Now on the track </a></button>
	<button class="button"> Make an inquiry</button>
	<!--<div id="Wimage">
	<img src="http://www.animatedimages.org/data/media/1631/animated-waiter-and-waitress-and-server-image-0049.gif" border="0" alt="animated-waiter-and-waitress-and-server-image-0049" />
	</div>-->
	<button class="button" onclick="Waiter()" >Call a waiter </button>

<script>
    var pleft = 0;
	
	function Waiter(){
	
		var tm = setInterval(mWaiter, 10); 
		
		var elem = document.getElementById("Wimage");
		
		function mWaiter() {
			pleft = pleft + 2;
			elem.style.left = pleft+"px";
			
			if (pleft>500) {
				clearInterval(tm)
			}
		}
		

	}
</script>
	
	
</body>


</html>
