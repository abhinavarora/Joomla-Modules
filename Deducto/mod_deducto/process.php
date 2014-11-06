<?php session_start(); ?>
<?php
$boardstatus=0;
$nextlevel=0;
$delimiter="!@#$%^&*";

function gen_board($array)
{
for($i=0;$i<=24;$i++)
{
	if($array[$i]==0)
		$array[$i]="#000000";
	elseif($array[$i]==1)
		$array[$i]="#FFFFFF";
}
	

$board = '<table cellpadding="0" border="1" cellspacing="0" bgcolor="#C0C0C0"">'; 
  $board.= '<tr>'; 
$board.= '<td bgcolor="'.$array[0].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[1].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[2].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[3].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[4].'" width="50" height="50">&nbsp;</td>'; 
  $board.= '</tr>'; 
  $board.= '<tr>'; 
$board.= '<td bgcolor="'.$array[5].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[6].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[7].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[8].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[9].'" width="50" height="50">&nbsp;</td>'; 
  $board.= '</tr>'; 
  $board.= '<tr>'; 
$board.= '<td bgcolor="'.$array[10].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[11].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[12].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[13].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[14].'" width="50" height="50">&nbsp;</td>'; 
  $board.= '</tr>'; 
  $board.= '<tr>' ;
$board.= '<td bgcolor="'.$array[15].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[16].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[17].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[18].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[19].'" width="50" height="50">&nbsp;</td>'; 
  $board.= '</tr>'; 
  $board.= '<tr>' ;
$board.= '<td bgcolor="'.$array[20].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[21].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[22].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[23].'" width="50" height="50">&nbsp;</td>'; 
$board.= '<td bgcolor="'.$array[24].'" width="50" height="50">&nbsp;</td>'; 
  $board.= '</tr>'; 
$board.= '</table>';
return $board;
}function level_1_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);
				  
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
$color[12]=1;
$board = gen_board($color); return $board;
}

function level_1_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);
				  
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
$color[12]=0;
$board = gen_board($color); return $board;
}				  

function level_2_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);
				  
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}				  
$color[0]=$color[4];
$color[20]=$color[4];
$color[24]=$color[4];
$board = gen_board($color); return $board;
}				  

function level_2_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}

if ($color[0]==$color[4] )
	$color[0]=1-$color[0];
	
$board = gen_board($color); return $board;
}				  

function level_3_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

$c=0;
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		{
		$color[$i]=1;
		$c=$c+1;
		}
}
while($c<13)
{
$i=rand(0,24);
if($color[$i]==0)
{
	$color[$i]=1;
	$c=$c+1;
}
}
$board = gen_board($color); return $board;
}				  

function level_3_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

$c=0;
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		{
		$color[$i]=1;
		$c=$c+1;
		}
}
while($c>12)
{
$i=rand(0,24);
if($color[$i]==1)
{
	$color[$i]=0;
	$c=$c-1;
}
}
$board = gen_board($color); return $board;
}				  

function level_4_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

$c=0;
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		{
		$color[$i]=1;
		$c=$c+1;
		}
}

if(intval($c/2)*2==$c)
{
	$i=rand(0,24);
	$color[$i]=1-$color[$i];
}
$board = gen_board($color); return $board;
}				  

function level_4_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

$c=0;
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		{
		$color[$i]=1;
		$c=$c+1;
		}
}

if(intval($c/2)*2!=$c)
{
	$i=rand(0,24);
	$color[$i]=1-$color[$i];
}
$board = gen_board($color); return $board;
}	

function level_5_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

$c=0;
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		{
		$color[$i]=1;
		$c=$c+1;
		}
}

if(rand(0,99)<50)
{
	$color[0]=0;
	$color[6]=0;
	$color[12]=0;
	$color[18]=0;
	$color[24]=0;
}
else
{
	$color[4]=0;
	$color[8]=0;
	$color[12]=0;
	$color[16]=0;
	$color[20]=0;
}
$board = gen_board($color); return $board;
}	

function level_5_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

$c=0;
for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		{
		$color[$i]=1;
		$c=$c+1;
		}
}

if( $color[0]==0 && $color[6]==0 && $color[12]==0 && $color[18]==0 && $color[24]==0)
	$color[6]=1;
	
if ($color[4]==0 && $color[8]==0 && $color[12]==0 && $color[16]==0 && $color[20]==0)
	$color[16]=1;

$board = gen_board($color); return $board;
}	

function level_6_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
for($i=5;$i<=24;$i++)
{
	if($color[$i]==0)
		$color[$i-5]=1;
}
$board = gen_board($color); return $board;
}	

function level_6_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}

for($i=0;$i<=24;$i+=5)
{	
	for($j=0;$i<=3;$i++)
	{
		if($color[$i+$j]==0)
			$color[$i+$j]=1;
	}
}
$c=0;
for($i=0;$i<=24;$i+=5)
{
	if($color[$i]==0 && $color[$i-5]==0)
		$c=$c+1;
}
$i=0;
while($c==0)
{
	if($color[$i]==0)
	{
		$color[$i-5];
		$c++;
	}
	$i++;
}
$board = gen_board($color); return $board;
}	

function level_7_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
for($i=0;$i<=24;$i+=5)
{
	$c=0;
	for($j=0;$j<=4;$j++)
	{
		if($color[$i+$j]=1)
			$c++;
	}
	if($c==0)
		$color[$i+rand(0,4)]=1;
}		
$board = gen_board($color); return $board;
}	

function level_7_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
$i=rand(0,4);
for($j=0;$j<=4;$j++)
	$color[($i*5)+$j]=0;
$board = gen_board($color); return $board;
}	

function level_8_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=4;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
for($i=0;$i<=4;$i++)
{
	$j=0;
	if($color[($i-1)*5+$j] && $color[($i-1)*5+$j+1])
		$c=1;
	elseif($color[($i-1)*5+$j] && $color[($i-1)*5+$j+1]==0)
		$c=0;
	elseif($color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1])
		$c=1;
	elseif($color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1]==0)
		$c=0;
	$color[$i*5+$j]=c;
	for($i=0;$i<=3;$i++)
	{
		if($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1])
			$c=1;
		elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1]==0)
			$c=0;
		elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1])
			$c=1;
		elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1]==0)
			$c=0;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1])
			$c=1;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1]==0)
			$c=0;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1])
			$c=1;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1]==0)
			$c=0;
	}
	$color[$i*5+$j]=c;
	$j=4;
	if($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j])
		$c=1;
	elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j]==0)
		$c=1;
	elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j])
		$c=1;
	elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j]==0)
		$c=1;
}
$board = gen_board($color); return $board;
}	

function level_8_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=4;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
for($i=0;$i<=4;$i++)
{
	$j=0;
	if($color[($i-1)*5+$j] && $color[($i-1)*5+$j+1])
		$c=0;
	elseif($color[($i-1)*5+$j] && $color[($i-1)*5+$j+1]==0)
		$c=1;
	elseif($color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1])
		$c=0;
	elseif($color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1]==0)
		$c=1;
	$color[$i*5+$j]=c;
	for($i=0;$i<=3;$i++)
	{
		if($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1])
			$c=0;
		elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1]==0)
			$c=1;
		elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1])
			$c=0;
		elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1]==0)
			$c=1;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1])
			$c=0;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j] && $color[($i-1)*5+$j+1]==0)
			$c=1;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1])
			$c=0;
		elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j]==0 && $color[($i-1)*5+$j+1]==0)
			$c=1;
	}
	$color[$i*5+$j]=c;
	$j=4;
	if($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j])
		$c=0;
	elseif($color[($i-1)*5+$j-1] && $color[($i-1)*5+$j]==0)
		$c=0;
	elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j])
		$c=0;
	elseif($color[($i-1)*5+$j-1]==0 && $color[($i-1)*5+$j]==0)
		$c=0;
}
$board = gen_board($color); return $board;
}	


function level_9_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=4;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}

$color[12]=1;
$c=rand(0,3);

if($c==0)
{
	$color[2]=1;
	$color[7]=1;
}
elseif($c==1)
{
	$color[13]=1;
	$color[14]=1;
}
elseif($c==2)
{
	$color[17]=1;
	$color[23]=1;
}
else
{
	$color[10]=1;
	$color[11]=1;
}
$board = gen_board($color); return $board;
}	

function level_9_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);

for($i=0;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}

if($color[12]==1)
{
	if($color[2] && $color[7])
		$color[2]=0;
	if($color[13] && $color[14])
		$color[13]=0;
	if($color[17] && $color[23])
		$color[17]=0;
	if($color[10] && $color[11])
		$color[10]=0;
}
$board = gen_board($color); return $board;
}	

function level_10_true()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);
$t=0;
for($i=0;$i<=9;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
	{	$color[$i]=1;
		$t=$t+1;
	}
}
for($i=10;$i<=14;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
$b=0;
for($i=15;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
	{	$color[$i]=1;
		$b=$b+1;
	}
}
while($t<=$b)
{
	$c=rand(0,9);
	if($color[$c]==0)
	{
		$color[$c]=1;
		$t=$t+1;
	}
	if($color[24-$c]==1)
	{
		$color[24-$c]=0;
		$b=$b-1;
	}
}
$board = gen_board($color); return $board;
}	

function level_10_false()
{
$color = array(0,0,0,0,0,0,0,
				  0,0,0,0,0,0,
                    0,0,0,0,0,0,0,
				  0,0,0,0,0);
$t=0;
for($i=0;$i<=9;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
	{	$color[$i]=1;
		$t=$t+1;
	}
}
for($i=10;$i<=14;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
		$color[$i]=1;
}
$b=0;
for($i=15;$i<=24;$i++)
{
	if(rand(0,99)<50)
		$color[$i]=0;
	else
	{	$color[$i]=1;
		$b=$b+1;
	}
}

while($t>$b)
{
	$c=rand(0,9);
	if($color[$c]==1)
	{
		$color[$c]=0;
		$t=$t-1;
	}
	if($color[24-$c]==0)
	{
		$color[24-$c]=1;
		$b=$b+1;
	}
}
$board = gen_board($color); return $board;
}	

if ($_GET['check']=="TRUE")
{
	if ($_GET['ans']=="T")
	{
		if($_SESSION['index']==1)
		{
			$_SESSION['counter']++;
			if($_SESSION['counter']==5)
			{
				if( $_SESSION['level']==10)
				{
				$nextlevel= '<center><font color="#A6A6A6" size=+5><b>Congratulations!<br />You Have Cracked <br />The Deducto</font></b></center>';
				$nextlevel.= '<center><br /><br /><br />';
				$nextlevel.= '<form action="index.php" method="post">';
				$nextlevel.= '<input type="submit" value="Play Again">'; 
				$nextlevel.= '</form></center>';
			
				}
				else
				{
				$_SESSION['counter']=0;
				$_SESSION['level']++;
				$nextlevel= '<center><font color="#A6A6A6" size=+5><b>Well Done!<br />Now Lets Try <br />Level '.$_SESSION['level'].'</font></b></center>';
				$nextlevel.='<meta http-equiv="Refresh" content="2;URL=deducto.php">';
				}
			}
			
		}
		else
		$_SESSION['counter']=0;
	}
	elseif ($_GET['ans']=="F")
	{
	if($_SESSION['index']==0)
		{
			$_SESSION['counter']++;
			if($_SESSION['counter']==5)
			{	
				if( $_SESSION['level']==10)
				{
				$nextlevel= '<center><font color="#A6A6A6" size=+5><b>Congratulations!<br />You Have Cracked <br />The Deducto</font></b></center>';
				$nextlevel.= '<center><br /><br /><br />';
				$nextlevel.= '<form action="index.php" method="post">';
				$nextlevel.= '<input type="submit" value="Play Again">'; 
				$nextlevel.= '</form></center>';
				}
				else
				{
				$_SESSION['counter']=0;
				$_SESSION['level']++;
				$nextlevel= '<center><font color="#A6A6A6" size=+5><b>Well Done!<br />Now Lets Try <br />Level '.$_SESSION['level'].'</font></b></center>';
				$nextlevel.='<meta http-equiv="Refresh" content="2;URL=deducto.php">';
				}
			}
		}
		else
		$_SESSION['counter']=0;
	}
}
$_SESSION['index']=rand(0,1);
if ($_GET['check']=="FALSE" && $_GET['sample']=='T' )
{$_SESSION['index']=1;
$boardstatus="True Board";}
elseif ($_GET['check']=="FALSE" && $_GET['sample']=='F' )
{
$_SESSION['index']=0;
$boardstatus="False Board";
}
if($_SESSION['index']==0)
{
	switch ($_SESSION['level'])
	{
		case 1:
			$out=level_1_false();
			break;
		case 2:
			$out=level_2_false();
			break;
		case 3:
			$out=level_3_false();
			break;
		case 4:
			$out=level_4_false();
			break;
		case 5:
			$out=level_5_false();
			break;
		case 6:
			$out=level_6_false();
			break;
		case 7:
			$out=level_7_false();
			break;
		case 8:
			$out=level_8_false();
			break;
		case 9:
			$out=level_9_false();
			break;
		case 10:
			$out=level_10_false();
			break;
	}
}
else
{
	switch ($_SESSION['level'])
	{
		case 1:
			$out=level_1_true();
			break;
		case 2:
			$out=level_2_true();
			break;
		case 3:
			$out=level_3_true();
			break;
		case 4:
			$out=level_4_true();
			break;
		case 5:
			$out=level_5_true();
			break;
		case 6:
			$out=level_6_true();
			break;
		case 7:
			$out=level_7_true();
			break;
		case 8:
			$out=level_8_true();
			break;
		case 9:
			$out=level_9_true();
			break;
		case 10:
			$out=level_10_true();
			break;
	}
}
$out.= $delimiter.$_SESSION['counter'].$delimiter.$_SESSION['level'].$delimiter.$nextlevel.$delimiter.$boardstatus;
echo $out;
?>	