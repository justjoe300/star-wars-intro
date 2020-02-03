<?php
// 012345678901234567890123456789001234567890123456789012345678900123456789012345678901234567890012345678901234567890123

/**
 *
 * @package JosephGage
 * @subpackage PHP
 * @copyright Copyright (c) 2014, JosephGageDesign
 * @version 1.0
 * @author Joe Gage <justjoe300@gmail.com>
 * @internal modified on 06/28/2016 by Joseph Gage
 * @since V1
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link href= "style-3.css" rel="stylesheet" type="text/css" media="all">
		
		
		<style type="text/css">
.star {
position:absolute;
layer-background-color:white;
visibility:visible;
top:-50px;
width:50px;
height:50px;
font-size:1px;
background-color:white;
}

.tab { font-weight:bold;font-size:12px; text-align:center; font-family: "Arial", "Helvetica";}
.tabb { font-weight:bold; font-size:14px; font-family: "Arial", "Helvetica"; text-align:center;}
.tabbb { font-weight:bold; font-size:10px; font-family: "Arial", "Helvetica"; text-align:center;}
</style>

<style class="Navbar">
			.navbar-content {
				display: flex;
				display: -webkit-flex;
				display: -moz-flex;
				flex-direction: row;
				-webkit-flex-direction: row;
				-moz-flex-direction: row;
				width: 1080px;
				margin-left: auto;
				margin-right: auto;
				padding: 10px;
				text-align: center;
			}
			.home {
				background-color: blue;
				width: 33%;
				
			}
			.portfolio {
				background-color: red;
				width: 33%;
			}
			.about {
				background-color: green;
				width: 33%;
			}
			
		</style>

<SCRIPT LANGUAGE="JavaScript">
<! >
<! >

<!-- Begin
var starnum = 75; // Number of stars
var isNS = (document.layers);
var _all = (isNS)? '' : 'all.';
var _style = (isNS) ? '' : '.style';
var xoffset, yoffset, w_x, w_y, tmpx, tmpy, scrlx, scrly;
function getstartpos(obj) {
obj.deltay = Math.floor(Math.random() * 12);
obj.deltax = Math.floor(Math.random() * 12);
obj.xdir = (Math.floor(Math.random() * 2) == 1) ? '+' : '-';
obj.ydir = (Math.floor(Math.random() * 2) == 1) ? '+' : '-';
obj.counter = 1;
if (isNS) {
obj.clip.width = 1;
obj.clip.height = 1;
obj.moveTo(xoffset+pageXOffset, yoffset+pageYOffset);
} else {
obj.width = 1;
obj.height = 1; 
obj.pixelTop = yoffset+document.body.scrollTop;
obj.pixelLeft = xoffset+document.body.scrollLeft;
   }
}
function movestar(starN) {
tmpx = starN.deltax*starN.counter+starN.counter;
tmpy = starN.deltay*starN.counter+starN.counter;
if (isNS) {
starN.clip.width = starN.counter / 3;
starN.clip.height = starN.counter / 3;
scrlx = pageXOffset;
scrly = pageYOffset;
if ((starN.left+tmpx >= w_x+scrlx) || (starN.top+tmpy >= w_y+scrly) || (starN.left-tmpx <= scrlx) || (starN.top-tmpy <= scrly)) {
getstartpos(starN);
} else {
eval('starN.moveBy('+starN.xdir+tmpx+', '+starN.ydir+tmpy+')');
   }
} else {
starN.width = starN.counter/3;
starN.height = starN.counter/3;
scrlx = document.body.scrollLeft;
scrly = document.body.scrollTop;
if ((starN.pixelLeft+tmpx >= w_x+scrlx)||(starN.pixelTop+tmpy >= w_y+scrly) || (starN.pixelLeft-tmpx <= scrlx)||(starN.pixelTop-tmpy <= scrly)) {
getstartpos(starN);
} else {
eval('starN.pixelTop'+starN.ydir+'=tmpy');
eval('starN.pixelLeft'+starN.xdir+'=tmpx');
   }
}
starN.counter++;
}
function animate() {
for(i=1; i <= starnum; i++) {
movestar(eval('star'+i));
}
setTimeout('animate()', 100);
}
function findwindowparams() {
var starnum = 75; // Number of stars
w_x = (isNS) ? window.innerWidth : document.body.clientWidth;
w_y = (isNS) ? window.innerHeight : document.body.clientHeight;
xoffset = w_x / 2;
yoffset = w_y / 2;
for (i = 1; i <= starnum; i++) {
getstartpos(eval('star'+i));
   }
}
function resizeNS() {
setTimeout('document.location.reload()', 400);
}
(isNS) ? window.onresize = resizeNS : window.onresize = findwindowparams;
window.onload = new Function("findwindowparams(); animate();");
//  End -->
</script>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
for (i = 1; i <= starnum; i++) {
document.writeln('<div id="star'+i+'" class="star"></div>');
eval('var star'+i+'=document.'+_all+'star'+i+_style);
}
// End -->
</script>	


<audio controls autoplay>
  <source src="xw3.mp3" type="audio/mpeg">
</audio>
		
		
		
	</head>
	
	
	<body background="http://allfreecodes.com/codes/pic/space.jpg">



  <div id="titles"><div id="titlecontent">

	<h2>Developer's Folly...</h2>
	<h3>...the quest for Coder's Cove!</h3>
	<p>A long, long time ago(like in the 90's), <br />
		in a galaxy far, far away...
	</p><br />
	<p>
        It is a period of Design war.
        Rebel developers, striking
        from a hidden server, have won
        their first victory against
        the evil Flat Design Empire.
      </p>

      <p>
        During the battle, Rebel
        code monkeys managed to steal secret
        URLs to the Empire's
        ultimate website, the DEATH 
        CODE, an armored PHP
        program with enough power to
        destroy the entire Internet.
      </p>

      <p>
        Pursued by the Empire's
        sinister hackers, Princess
        Javasacript races home aboard her
        codeship, custodian of the
        stolen code that can save
        her people and restore
        freedom to the internet....
      </p>

</div></div>	
	</body>
</html>
