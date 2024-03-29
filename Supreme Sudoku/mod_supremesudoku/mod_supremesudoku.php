<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<html>
<head>
<title>Online Sudoku</title>
<link rel="stylesheet" href="./modules/mod_supremesudoku/base.css" type="text/css" media="all" />
<link rel="stylesheet" href="./modules/mod_supremesudoku/classic.css" type="text/css" media="screen" title="Classic" id="classic-style" />
<link rel="stylesheet" href="./modules/mod_supremesudoku/paper.css" type="text/css" media="screen" title="Paper" id="paper-style" disabled="disabled" />
<link rel="stylesheet" href="./modules/mod_supremesudoku/rainbow.css" type="text/css" media="screen" title="Rainbow" id="rainbow-style" disabled="disabled" />
<link rel="stylesheet" href="./modules/mod_supremesudoku/print.css" type="text/css" media="print" />
<script src="./modules/mod_supremesudoku/sudoku.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<h1>Online Sudoku</h1>

<table><tr><td valign="top">
<form name="f">
<table class="root-table"><tr>
<td><table class="box box-one"><tr>
<td class="spacer corner-holder">&nbsp;</td>
<td class="vline-holder">&nbsp;<span id="lv-11" class="line-v" onclick="helpLineV('11')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span id="lv-12" class="line-v" onclick="helpLineV('12')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span id="lv-13" class="line-v" onclick="helpLineV('13')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td class="hline-holder"><span id="lh-11" class="line-h" onclick="helpLineH('11')">&nbsp;&nbsp;</span>&nbsp;</td>
<td class="celler"><div id="pause-hider"></div><input id="c11" type="text" size="1" /></td>
<td><input id="c12" type="text" size="1" /></td>
<td><input id="c13" type="text" size="1" /></td>
</tr><tr>
<td class="hline-holder"><span id="lh-12" class="line-h" onclick="helpLineH('12')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c14" type="text" size="1" /></td>

<td><input id="c15" type="text" size="1" /></td>
<td><input id="c16" type="text" size="1" /></td>
</tr><tr>
<td class="hline-holder"><span id="lh-13" class="line-h" onclick="helpLineH('13')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c17" type="text" size="1" /></td>
<td><input id="c18" type="text" size="1" /></td>
<td><input id="c19" type="text" size="1" /></td>
</tr></table></td>
<td><table class="box box-two"><tr>
<td class="vline-holder">&nbsp;<span id="lv-21" class="line-v" onclick="helpLineV('21')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span id="lv-22" class="line-v" onclick="helpLineV('22')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span id="lv-23" class="line-v" onclick="helpLineV('23')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td><input id="c21" type="text" size="1" /></td>
<td><input id="c22" type="text" size="1" /></td>
<td><input id="c23" type="text" size="1" /></td>
</tr><tr>

<td><input id="c24" type="text" size="1" /></td>
<td><input id="c25" type="text" size="1" /></td>
<td><input id="c26" type="text" size="1" /></td>
</tr><tr>
<td><input id="c27" type="text" size="1" /></td>
<td><input id="c28" type="text" size="1" /></td>
<td><input id="c29" type="text" size="1" /></td>
</tr></table></td>
<td><table class="box box-three"><tr>
<td class="vline-holder">&nbsp;<span id="lv-31" class="line-v" onclick="helpLineV('31')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span id="lv-32" class="line-v" onclick="helpLineV('32')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span id="lv-33" class="line-v" onclick="helpLineV('33')">&nbsp;&nbsp;</span></td>
<td class="corner-holder">&nbsp;</td>
</tr><tr>
<td><input id="c31" type="text" size="1" /></td>
<td><input id="c32" type="text" size="1" /></td>
<td><input id="c33" type="text" size="1" /></td>

<td class="hline-holder"><span class="line-h" onclick="helpLineH('11')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td><input id="c34" type="text" size="1" /></td>
<td><input id="c35" type="text" size="1" /></td>
<td><input id="c36" type="text" size="1" /></td>
<td class="hline-holder"><span class="line-h" onclick="helpLineH('12')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td><input id="c37" type="text" size="1" /></td>
<td><input id="c38" type="text" size="1" /></td>
<td><input id="c39" type="text" size="1" /></td>
<td class="hline-holder"><span class="line-h" onclick="helpLineH('13')">&nbsp;&nbsp;</span></td>
</tr></table></td>
</tr><tr>
<td><table class="box box-four"><tr>
<td class="spacer hline-holder"><span id="lh-21" class="line-h" onclick="helpLineH('21')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c41" type="text" size="1" /></td>
<td><input id="c42" type="text" size="1" /></td>

<td><input id="c43" type="text" size="1" /></td>
</tr><tr>
<td class="hline-holder"><span id="lh-22" class="line-h" onclick="helpLineH('22')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c44" type="text" size="1" /></td>
<td><input id="c45" type="text" size="1" /></td>
<td><input id="c46" type="text" size="1" /></td>
</tr><tr>
<td class="hline-holder"><span id="lh-23" class="line-h" onclick="helpLineH('23')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c47" type="text" size="1" /></td>
<td><input id="c48" type="text" size="1" /></td>
<td><input id="c49" type="text" size="1" /></td>
</tr></table></td>
<td><table class="box box-five"><tr>
<td><input id="c51" type="text" size="1" /></td>
<td><input id="c52" type="text" size="1" /></td>
<td><input id="c53" type="text" size="1" /></td>
</tr><tr>

<td><input id="c54" type="text" size="1" /></td>
<td><input id="c55" type="text" size="1" /></td>
<td><input id="c56" type="text" size="1" /></td>
</tr><tr>
<td><input id="c57" type="text" size="1" /></td>
<td><input id="c58" type="text" size="1" /></td>
<td><input id="c59" type="text" size="1" /></td>
</tr></table></td>
<td><table class="box box-six"><tr>
<td><input id="c61" type="text" size="1" /></td>
<td><input id="c62" type="text" size="1" /></td>
<td><input id="c63" type="text" size="1" /></td>
<td class="hline-holder"><span class="line-h" onclick="helpLineH('21')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td><input id="c64" type="text" size="1" /></td>
<td><input id="c65" type="text" size="1" /></td>
<td><input id="c66" type="text" size="1" /></td>

<td class="hline-holder"><span class="line-h" onclick="helpLineH('22')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td><input id="c67" type="text" size="1" /></td>
<td><input id="c68" type="text" size="1" /></td>
<td><input id="c69" type="text" size="1" /></td>
<td class="hline-holder"><span class="line-h" onclick="helpLineH('23')">&nbsp;&nbsp;</span></td>
</tr></table></td></tr>
<tr><td><table class="box box-seven"><tr>
<td class="hline-holder"><span id="lh-31" class="line-h" onclick="helpLineH('31')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c71" type="text" size="1" /></td>
<td><input id="c72" type="text" size="1" /></td>
<td><input id="c73" type="text" size="1" /></td>
</tr><tr>
<td class="hline-holder"><span id="lh-32" class="line-h" onclick="helpLineH('32')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c74" type="text" size="1" /></td>
<td><input id="c75" type="text" size="1" /></td>
<td><input id="c76" type="text" size="1" /></td>

</tr><tr>
<td class="hline-holder"><span id="lh-33" class="line-h" onclick="helpLineH('33')">&nbsp;&nbsp;</span>&nbsp;</td>
<td><input id="c77" type="text" size="1" /></td>
<td><input id="c78" type="text" size="1" /></td>
<td><input id="c79" type="text" size="1" /></td>
</tr><tr>
<td class="spacer corner-holder">&nbsp;</td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('11')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('12')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('13')">&nbsp;&nbsp;</span></td>
</tr></table></td>
<td><table class="box box-eight"><tr>
<td><input id="c81" type="text" size="1" /></td>
<td><input id="c82" type="text" size="1" /></td>
<td><input id="c83" type="text" size="1" /></td>
</tr><tr>
<td><input id="c84" type="text" size="1" /></td>

<td><input id="c85" type="text" size="1" /></td>
<td><input id="c86" type="text" size="1" /></td>
</tr><tr>
<td><input id="c87" type="text" size="1" /></td>
<td><input id="c88" type="text" size="1" /></td>
<td><input id="c89" type="text" size="1" /></td>
</tr><tr>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('21')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('22')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('23')">&nbsp;&nbsp;</span></td>
</tr></table></td>
<td><table class="box box-nine"><tr>
<td><input id="c91" type="text" size="1" /></td>
<td><input id="c92" type="text" size="1" /></td>
<td><input id="c93" type="text" size="1" /></td>
<td class="hline-holder"><span id="lh-31" class="line-h" onclick="helpLineH('31')">&nbsp;&nbsp;</span></td>
</tr><tr>

<td><input id="c94" type="text" size="1" /></td>
<td><input id="c95" type="text" size="1" /></td>
<td><input id="c96" type="text" size="1" /></td>
<td class="hline-holder"><span id="lh-32" class="line-h" onclick="helpLineH('32')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td><input id="c97" type="text" size="1" /></td>
<td><input id="c98" type="text" size="1" /></td>
<td><input id="c99" type="text" size="1" /></td>
<td class="hline-holder"><span id="lh-33" class="line-h" onclick="helpLineH('33')">&nbsp;&nbsp;</span></td>
</tr><tr>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('31')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('32')">&nbsp;&nbsp;</span></td>
<td class="vline-holder">&nbsp;<span class="line-v" onclick="helpLineV('33')">&nbsp;&nbsp;</span></td>
<td class="corner-holder">&nbsp;</td>
</tr></table>
</td></tr></table>
</form>

</td><td valign="top" id="control-area" align="left" width="300">
<input type="button" class="control-button" onClick="checker()" value="Completed the puzzle" /><br />
<input type="button" class="control-button" onClick="solve()" value="I give Up" /><br /><br />


<input type="button" class="control-button" onClick="reloadGame()" value="Restart this puzzle" /><br />
<input type="button" class="control-button" onClick="newGame()" value="New Puzzle" />

<hr />
<div class="option-item">
<label for="difficulty">Difficulty</label><select name="difficulty" id="difficulty">
	<option value="3">Hard</option>
	<option value="4" selected="selected">Normal</option>

	<option value="5">Easy</option>
</select></div>
<div class="option-item">
<label for="style-selector">Style</label><select name="style-selector" id="style-selector" onchange="selectStyleSheet()">
	<option value="paper-style" selected="selected">Paper</option>
	<option value="classic-style">Classic</option>
	<option value="rainbow-style">Rainbow</option>
</select></div>

<div class="option-item">
<label for="live-hints">Live Hints</label>
<input type="checkbox" name="live-hints" id="live-hints" value="Live" />
</div>
<input type="button" class="control-button" onclick="checkStatus()" value="How am I Doing?" />

<hr />
<div id="pen-tool">
<a href="javascript:pickPen();">Pick Pen</a> <div id="pen-picks" style="display:none;">
<span id="selected-pen-number">1</span>
<a href="javascript:downPen();">Drop Pen</a><br />
<input type="button" value="1" onclick="pickPenDigit(1)" /> 

<input type="button" value="2" onclick="pickPenDigit(2)" /> 
<input type="button" value="3" onclick="pickPenDigit(3)" /><br />
<input type="button" value="4" onclick="pickPenDigit(4)" /> 
<input type="button" value="5" onclick="pickPenDigit(5)" /> 
<input type="button" value="6" onclick="pickPenDigit(6)" /><br />
<input type="button" value="7" onclick="pickPenDigit(7)" />
<input type="button" value="8" onclick="pickPenDigit(8)" />
<input type="button" value="9" onclick="pickPenDigit(9)" />
</div></div>
<br />
<div id="cheats">
<input type="button" class="control-button" value="Reveal Cell" onclick="revealCell()" />
</div>

<div id="info">
<span id="timer">00:00</span>

<input type="button" id="timer_control" onclick="toggleTimer()" value="Pause" />
</div>
</td></tr></table>

<div id="display_area"></div>

</body>
</html>