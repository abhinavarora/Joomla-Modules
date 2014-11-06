<?php session_start(); ?>
<html>
<head>
<meta name="Author" content="Abhinav Arora"> 
<meta name="Description" content="Deducto">
<title>
Deducto
</title>
<?php
$menu='<input type="submit" value="Reset"><br /><input type="button" onClick="trueboard();" value="True Board"> <input type="button" onClick="falseboard();" value="False Board"> ';
$resumebutton= '<input type="button" onClick="showload();" value="Resume"> ';
?>
<script type="text/javascript">
function showload()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var str= xmlhttp.responseText;
	temp = str.split('!@#$%^&*');
    document.getElementById("board").innerHTML=temp[0];
	document.getElementById("sample").innerHTML=temp[1]+' correct';
	document.getElementById("level").innerHTML=temp[2];
	document.getElementById("hide").innerHTML='<?php echo $menu;?>';
    }
  }
xmlhttp.open("GET","process.php?check=FALSE&sample=0",true);
xmlhttp.send();
}

function trueboard()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var str= xmlhttp.responseText;
	temp = str.split('!@#$%^&*');
	if (temp[3]!=0)
	document.getElementById("nextlevel").innerHTML=temp[3];
	else
	{
    document.getElementById("board").innerHTML=temp[0];
	document.getElementById("sample").innerHTML=temp[1]+' correct';
	document.getElementById("level").innerHTML=temp[2];
    }
    }
  }
xmlhttp.open("GET","process.php?check=TRUE&ans=T&sample=0",true);
xmlhttp.send();
}

function falseboard()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var str= xmlhttp.responseText;
	temp = str.split('!@#$%^&*');
	if (temp[3]!=0)
	document.getElementById("nextlevel").innerHTML=temp[3];
	else
	{
    document.getElementById("board").innerHTML=temp[0];
	document.getElementById("sample").innerHTML=temp[1]+' correct';
	document.getElementById("level").innerHTML=temp[2];
    }
	}
  }
xmlhttp.open("GET","process.php?check=TRUE&ans=F&sample=0",true);
xmlhttp.send();
}

function truesample()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var str= xmlhttp.responseText;
	temp = str.split('!@#$%^&*');
    document.getElementById("board").innerHTML=temp[0];
	document.getElementById("sample").innerHTML=temp[4];
	document.getElementById("level").innerHTML=temp[2];
	document.getElementById("hide").innerHTML='<?php echo $resumebutton;?>';
	}
  }
xmlhttp.open("GET","process.php?check=FALSE&sample=T",true);
xmlhttp.send();
}
function falsesample()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var str= xmlhttp.responseText;
	temp = str.split('!@#$%^&*');
    document.getElementById("board").innerHTML=temp[0];
	document.getElementById("sample").innerHTML=temp[4];
	document.getElementById("level").innerHTML=temp[2];
	document.getElementById("hide").innerHTML='<?php echo $resumebutton;?>';
	}
  }
xmlhttp.open("GET","process.php?check=FALSE&sample=F",true);
xmlhttp.send();
}
</script>
</head>
<div id="nextlevel">
<body onload="showload();">

<center><div id="board">
<table border="0" cellpadding="0" cellspacing="0" bgcolor="white"> 
  <tr> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>  
  </tr> 
  <tr> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>  
  </tr> 
  <tr> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>  
  </tr> 
  <tr> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>  
  </tr> 
  <tr> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td> 
<td width="50" height="50">&nbsp;</td>  
  </tr> 
</table>
</div>
<font color="#A6A6A6" size=+4><b>deducto</font></b>
<br /><font color="#A6A6A6" size=+1><b>Level  : <span id="level">&nbsp;</span></font></b>
<br /><font color="#A6A6A6" size=+1><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status : <span id="sample">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></font></b>
<br />
<form action="index.php">
<input type="button" onClick="truesample();" value="Example"> 
<input type="button" onClick="falsesample();" value="Counter"> 
<span id="hide">
<input type="submit" value="Reset">
<br />
<input type="button" onClick="trueboard();" value="True Board"> 
<input type="button" onClick="falseboard();" value="False Board"> 
</span>
</form>
 </center>
</body>
</div>
</html>
