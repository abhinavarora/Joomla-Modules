<?php session_start(); ?>
<html>
<head>
<meta name="author" content="Abhinav" > 
<meta name="Description" content="Deducto">
<title>
Deducto
</title>
</head>
<?php


$_SESSION['counter']=0;
$_SESSION['level']=1;
?> 
<center> 
<table cellpadding="0" border="1" cellspacing="0" bgcolor="#C0C0C0"> 
  <tr> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
<td bgcolor="#000000" width="50" height="50">&nbsp;</td> 
<td bgcolor="#FFFFFF" width="50" height="50">&nbsp;</td> 
  </tr> 
</table>
<font color="#A6A6A6" size=+4><b>deducto</font></b>
<p> 1.  &nbsp;&nbsp;Deducto is an activity which aims at helping sharpen the logical and deductive <br />skills of children through pattern recognition.
<br /><br />2. &nbsp;&nbsp;The game encompasses 10 levels, each having a unique logic.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /><br />3. &nbsp;&nbsp;The player has to identify the logic behind each level and classify the board as <br />TRUE or FALSE.
<br /><br />4. If the player succeeds in correctly identifying the board five times consecutively,<br /> then he/she is promoted to the next level. </p>
<form action="deducto.php" method="post">
<input type="submit" name="type" value="Start Game">
</form> 
</center>
</html>
