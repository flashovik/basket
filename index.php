<!DOCTYPE html>
<html>
	<head>
		<title>Basket</title>
<link rel="stylesheet" href="style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(window).ready(function(){
	$('#basket_19').mousedown(function(coords){
		$cursorBlock=$("#basket_19").offset();
		$cursorBlockX=coords.pageX-Math.round($('#basket_19').offset().left);
		$cursorBlockY=coords.pageY-Math.round($('#basket_19').offset().top);
		$(document).mousemove(function(coords){
			$cmx=coords.pageX;
			$cmy=coords.pageY;
			$('#basket_19').css({'top':$cmy, 'left':$cmx, 'margin':'-'+$cursorBlockY+'px 0 0 -'+$cursorBlockX+'px',opacity:'0.9'});
		});
	}).mouseup(function(){
		$newX=$('#basket_19').css('top');
		$newY=$('#basket_19').css('left');
		$(document).mousemove(function(){
			$('#basket_19').css({'top':$newX, 'left':$newY,opacity:'1'});
		});
	});
});
</script>
	</head>
	<body>
<div id="basket_19">
	<div id="basket_19_1">111</div>
	<div id="basket_19_2"></div>
	<div id="basket_19_3"></div>
	<div id="basket_19_4"></div>
</div>

<div id="basket_main">
	<div id="basket_left">
		<div id="basket_1"></div>
		<div id="basket_2"></div>
		<div id="basket_3"></div>
		<div id="basket_4"></div>
		<div id="basket_5"></div>
		<div id="basket_6"></div>
		<div id="basket_7"></div>
		<div id="basket_8"></div>
		<div id="basket_20"></div>
		<div id="basket_21"></div>
		<div id="basket_22"></div>
	</div>
	
	<div id="basket_center">
		<div id="basket_9"></div>
		<div id="basket_10"></div>
		
	</div>
	
	<div id="basket_right">
		<div id="basket_11"></div>
		<div id="basket_12"></div>
		<div id="basket_13"></div>
		<div id="basket_14"></div>
		<div id="basket_15"></div>
		<div id="basket_16"></div>
		<div id="basket_17"></div>
		<div id="basket_18"></div>
		<div id="basket_23"></div>
		<div id="basket_24"></div>
		<div id="basket_25"></div>
	</div>
	
</div>

	</body>
</html>