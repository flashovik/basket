<!DOCTYPE html>
<html>
	<head>
		<title>Basket</title>
		<style>
			*{padding:0; margin:0; box-sizing:border-box;}
			html{background:#aaa; padding:20px;}

			#basket_main{width:1500px; height:2800px; background:#af6830; border:5px solid #fff; position:relative; margin:0 auto;}
			#basket_left{position:absolute; top:0; left:0; width:100%;}
			#basket_1{position:absolute; top:0; left:50%; width:1320px; margin:0 0 0 -660px; height:299px; border-left:5px solid #fff; border-right:5px solid #fff;}
			#basket_2{position:absolute; top:0; left:50%; width:490px; margin:0 0 0 -245px; height:580px; border:5px solid #fff; border-top:none;}
			#basket_3{position:absolute; top:580px; left:50%; width:360px; margin:0 0 0 -180px; height:180px; border:5px solid #fff; border-top:none; border-radius:0 0 180px 180px;}
			#basket_4{position:absolute; top:157px; left:50%; width:250px; margin:0 0 0 -125px; height:125px; border:5px solid #fff; border-top:none; border-radius:0 0 180px 180px;}
			#basket_5{position:absolute; top:120px; left:50%; width:250px; margin:0 0 0 -125px; height:37px; border-left:5px solid #fff; border-right:5px solid #fff;}
			#basket_6{position:absolute; top:157px; left:50%; width:1350px; margin:0 0 0 -675px; height:675px; border:5px solid #fff; border-top:none; border-radius:0 0 675px 675px;}
			#basket_7{position:absolute; top:0; left:0; width:85px; height:500px; background:#af6830;}
			#basket_8{position:absolute; top:0; right:0; width:85px; height:500px; background:#af6830;}
			#basket_20{position:absolute; width:180px; top:120px; left:50%; margin:0 0 0 -90px; height:5px; background:#fff;
box-shadow:-1px 1px 1px rgba(0,0,0,0.1),-2px 2px 1px rgba(0,0,0,0.1),-3px 3px 1px rgba(0,0,0,0.1),-4px 4px 1px rgba(0,0,0,0.1),-5px 5px 1px rgba(0,0,0,0.1),-6px 6px 1px rgba(0,0,0,0.1),-7px 7px 1px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.1),-9px 9px 1px rgba(0,0,0,0.1),-10px 10px 1px rgba(0,0,0,0.1);
}
			#basket_21{position:absolute; width:4px; top:120px; left:50%; margin:0 0 0 -2px; height:19px; background:#fff;
box-shadow:-1px 1px 1px rgba(0,0,0,0.1),-2px 2px 1px rgba(0,0,0,0.1),-3px 3px 1px rgba(0,0,0,0.1),-4px 4px 1px rgba(0,0,0,0.1),-5px 5px 1px rgba(0,0,0,0.1),-6px 6px 1px rgba(0,0,0,0.1),-7px 7px 1px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.1),-9px 9px 1px rgba(0,0,0,0.1),-10px 10px 1px rgba(0,0,0,0.1);
}
			#basket_22{position:absolute; width:46px; top:139px; left:50%; margin:0 0 0 -23px; height:46px; border:5px solid #fff; border-radius:50%;

box-shadow:-1px 1px 1px rgba(0,0,0,0.1),-2px 2px 1px rgba(0,0,0,0.1),-3px 3px 1px rgba(0,0,0,0.1),-4px 4px 1px rgba(0,0,0,0.1),-5px 5px 1px rgba(0,0,0,0.1),-6px 6px 1px rgba(0,0,0,0.1),-7px 7px 1px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.1),-9px 9px 1px rgba(0,0,0,0.1),-10px 10px 1px rgba(0,0,0,0.1),
-1px 1px 1px rgba(0,0,0,0.1) inset,-2px 2px 1px rgba(0,0,0,0.1) inset,
-3px 3px 1px rgba(0,0,0,0.1) inset,-4px 4px 1px rgba(0,0,0,0.1) inset,
-5px 5px 1px rgba(0,0,0,0.1) inset,-6px 6px 1px rgba(0,0,0,0.1) inset,
-7px 7px 1px rgba(0,0,0,0.1) inset,-8px 8px 1px rgba(0,0,0,0.1) inset,
-9px 9px 1px rgba(0,0,0,0.1) inset,-10px 10px 1px rgba(0,0,0,0.1) inset;
}
			
			#basket_center{position:absolute; top:50%; left:0; width:100%;}
			#basket_9{position:absolute; top:0; left:50%; width:360px; height:360px; margin:-180px 0 0 -180px; border:5px solid #fff; border-radius:50%;}
			#basket_10{position:absolute; top:0; left:0; width:100%; height:4px; margin:-2px 0 0; background:#fff;}
/*
			#basket_19{position:absolute; z-index:10; top:50%; left:50%; width:100px; height:100px; margin:-50px 0 0 -50px; background:#ff6d00; border:4px solid #444; border-radius:50%; overflow:hidden; cursor:-webkit-grab;}
			#basket_19_1{position:absolute; top:0; left:50%; width:2px; height:100%; margin:0 0 0 -1px; background:#444;}
			#basket_19_2{position:absolute; top:50%; left:0; width:100%; height:2px; margin:-1px 0 0; background:#444;}
			#basket_19_3{position:absolute; top:50%; left:0; width:70px; height:70px; margin:-35px 0 0 -35px; border:2px solid #444; border-radius:50%;}
			#basket_19_4{position:absolute; top:50%; right:0; width:70px; height:70px; margin:-35px -35px 0 0; border:2px solid #444; border-radius:50%;}
*/		
			#basket_19{position:absolute; z-index:10; top:50%; left:50%; width:46px; height:46px; margin:-23px 0 0 -23px; background:#ff6d00; border:4px solid #444; border-radius:50%; overflow:hidden; cursor:-webkit-grab;}
			#basket_19_1{position:absolute; top:0; left:50%; width:2px; height:100%; margin:0 0 0 -1px; background:#444;}
			#basket_19_2{position:absolute; top:50%; left:0; width:100%; height:2px; margin:-1px 0 0; background:#444;}
			#basket_19_3{position:absolute; top:50%; left:0; width:26px; height:26px; margin:-13px 0 0 -13px; border:2px solid #444; border-radius:50%;}
			#basket_19_4{position:absolute; top:50%; right:0; width:26px; height:26px; margin:-13px -13px 0 0; border:2px solid #444; border-radius:50%;}

			#basket_right{position:absolute; bottom:0; left:0; width:100%;}
			#basket_11{position:absolute; bottom:0; left:50%; width:1320px; margin:0 0 0 -660px; height:299px; border-left:5px solid #fff; border-right:5px solid #fff;}
			#basket_12{position:absolute; bottom:0; left:50%; width:490px; margin:0 0 0 -245px; height:580px; border:5px solid #fff; border-bottom:none;}
			#basket_13{position:absolute; bottom:580px; left:50%; width:360px; margin:0 0 0 -180px; height:180px; border:5px solid #fff; border-bottom:none; border-radius:180px 180px 0 0;}
			#basket_14{position:absolute; bottom:157px; left:50%; width:250px; margin:0 0 0 -125px; height:125px; border:5px solid #fff; border-bottom:none; border-radius:180px 180px 0 0;}
			#basket_15{position:absolute; bottom:120px; left:50%; width:250px; margin:0 0 0 -125px; height:37px; border-left:5px solid #fff; border-right:5px solid #fff;}
			#basket_16{position:absolute; bottom:157px; left:50%; width:1350px; margin:0 0 0 -675px; height:675px; border:5px solid #fff; border-bottom:none; border-radius:675px 675px 0 0;}
			#basket_17{position:absolute; bottom:0; left:0; width:85px; height:500px; background:#af6830;}
			#basket_18{position:absolute; bottom:0; right:0; width:85px; height:500px; background:#af6830;}
			#basket_23{position:absolute; width:180px; bottom:120px; left:50%; margin:0 0 0 -90px; height:5px; background:#fff; z-index:2;
box-shadow:-1px 1px 1px rgba(0,0,0,0.1),-2px 2px 1px rgba(0,0,0,0.1),-3px 3px 1px rgba(0,0,0,0.1),-4px 4px 1px rgba(0,0,0,0.1),-5px 5px 1px rgba(0,0,0,0.1),-6px 6px 1px rgba(0,0,0,0.1),-7px 7px 1px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.1),-9px 9px 1px rgba(0,0,0,0.1),-10px 10px 1px rgba(0,0,0,0.1);
}
			#basket_24{position:absolute; width:4px; bottom:120px; left:50%; margin:0 0 0 -2px; height:19px; background:#fff; z-index:1;
box-shadow:-1px 1px 1px rgba(0,0,0,0.1),-2px 2px 1px rgba(0,0,0,0.1),-3px 3px 1px rgba(0,0,0,0.1),-4px 4px 1px rgba(0,0,0,0.1),-5px 5px 1px rgba(0,0,0,0.1),-6px 6px 1px rgba(0,0,0,0.1),-7px 7px 1px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.1),-9px 9px 1px rgba(0,0,0,0.1),-10px 10px 1px rgba(0,0,0,0.1);
}
			#basket_25{position:absolute; width:46px; bottom:139px; left:50%; margin:0 0 0 -23px; height:46px; border:5px solid #fff; border-radius:50%;
box-shadow:-1px 1px 1px rgba(0,0,0,0.1),-2px 2px 1px rgba(0,0,0,0.1),-3px 3px 1px rgba(0,0,0,0.1),-4px 4px 1px rgba(0,0,0,0.1),-5px 5px 1px rgba(0,0,0,0.1),-6px 6px 1px rgba(0,0,0,0.1),-7px 7px 1px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.1),-9px 9px 1px rgba(0,0,0,0.1),-10px 10px 1px rgba(0,0,0,0.1),
-1px 1px 1px rgba(0,0,0,0.1) inset,-2px 2px 1px rgba(0,0,0,0.1) inset,
-3px 3px 1px rgba(0,0,0,0.1) inset,-4px 4px 1px rgba(0,0,0,0.1) inset,
-5px 5px 1px rgba(0,0,0,0.1) inset,-6px 6px 1px rgba(0,0,0,0.1) inset,
-7px 7px 1px rgba(0,0,0,0.1) inset,-8px 8px 1px rgba(0,0,0,0.1) inset,
-9px 9px 1px rgba(0,0,0,0.1) inset,-10px 10px 1px rgba(0,0,0,0.1) inset;
}
			
			
		</style>
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
	<div id="basket_19_1"></div>
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