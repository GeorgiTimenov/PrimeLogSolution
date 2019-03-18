
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>Player</title> 
 
<script type='text/javascript' src='swfobject.js'></script> 
<script type='text/javascript' src='jwplayer.js'></script>
 
<!-- JW PLAYER CONTROL FUNCTION --> 
<script type="text/javascript"> 
	var currentItem;
 
	function sendEvent(typ,prm) {
		thisMovie("thePlayerId").sendEvent(typ,prm);
	};
	
	
	function loadFile(fil,tit,lnk,img,fid) {
		thisMovie("thePlayerId").loadFile(fil,tit,lnk,img,fid);
	};
	
	
	function getUpdate(typ,pr1,pr2,pid) {
		if(typ == "item") { currentItem = pr1; setTimeout("getItemData(currentItem)",100); }
	};
	
	function getItemData(idx) { 
		//self.parent.showUpdate("item: "+idx);
		showUpdate("item: "+idx);
	};
	
	
	// This is a javascript handler for the player and is always needed.
	function thisMovie(movieName) {
	    if(navigator.appName.indexOf("Microsoft") != -1) {
			return window[movieName];
		} else {
			return document[movieName];
		}
	}
</script> 
 
</head> 
<body> 
 
<h2>JW Player</h2> 
 
<div id='placeholder'>This div will be replaced</div> 
 
<script type='text/javascript'> 
  var s1 = new SWFObject("jwplayer.swf","thePlayerId","300","120","7");
	s1.addParam("allowfullscreen","true");
	s1.addVariable("width","300");
	s1.addVariable("height","120");
	s1.addVariable("displayheight","45");
	s1.addVariable("file","http://bandamonovox.com.br/prime/player/playlist.xml");
	s1.addVariable("linktarget","_blank");
	s1.addVariable("showicons","true");
	s1.addVariable("showeq","true");
	s1.addVariable("shuffle","true");
	s1.addVariable("repeat","list");
	s1.addVariable("volume","70");
	s1.addVariable("enablejs","true");
	s1.addVariable("autostart","true");
	s1.addVariable("javascriptid","thePlayerId"); 
	s1.write("placeholder");
</script> 
 
<br /> 
 
<a href="javascript:sendEvent('play');">Play</a><br /> 
<a href="javascript:sendEvent('play','false')">Pause</a><br /> 
<a href="javascript:sendEvent('stop')">Stop</a><br /><br /> 
<a href="javascript:sendEvent('next')">Next</a><br> 
<a href="javascript:sendEvent('prev')">Prev</a><br><br> 
 
<a href="javascript:sendEvent('volume',100)">Volume 100</a><br /> 
<a href="javascript:sendEvent('volume',70)">Volume 70</a><br /> 
<a href="javascript:sendEvent('volume',40)">Volume 40</a><br /> 
<a href="javascript:sendEvent('volume',10)">Volume 10</a><br /><br /> 
 
</body> 
</html>