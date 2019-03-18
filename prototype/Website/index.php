<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prime Log Solutions</title>
<link rel="stylesheet" href="css/css.css" type="text/css">
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	
	
	 $(window).load(function() {
			$('#slider').nivoSlider({
				//effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
				pauseTime: 4000
				});
	 });

</script>
</head>
<body>
   
    <div id="main">
<!--FUNDOS-->
    <div class="slider-wrapper theme-default">
       <div id="slider" class="nivoSlider">
          <img src="images/fundos/fundo1.jpg" width="1000" height="729" />
          <img src="images/fundos/fundo2.jpg" width="1000" height="729" />
          <img src="images/fundos/fundo3.jpg" width="1000" height="729" />
       </div>
    </div>
<!--FUNDOS-->

<!--TOPO-->
<div id="topo">

<div class="idioma">
<div class="bandeira" style="margin-right:15px;"><a href="pt/"><img src="images/br.png" width="36" height="46" /></a></div>
<div class="bandeira"><a href="en/"><img src="images/en.png" width="35" height="45" /></a></div>
<div class="clear"></div>
</div>
<div class="clear"></div>

</div>
<!--TOPO-->


<!--RODAPE-->
<div id="rodape">

<div id="mp3-player">
    <a id="player1" href="javascript:parent.frames['topFrame'].sendEvent('play');"><span>Play</span></a>
    <a id="player2" href="javascript:parent.frames['topFrame'].sendEvent('play','false')"><span>Pause</span></a>
    <a id="player3" href="javascript:parent.frames['topFrame'].sendEvent('next')"><span>Next</span></a>
    <a id="player4" href="javascript:parent.frames['topFrame'].sendEvent('prev')"><span>Prev</span></a>
</div>

</div>
<!--RODAPE-->
</div>
   
</body>
</html>
