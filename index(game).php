<?php
$c=array(array(0));
for($i = 1 ; $i <=4; $i++)
{
	for($j = 1 ; $j <= 4; $j++)
	{
		$c[$i][$j]=0;
	}
}
function SPS($player_a,$player_b)
{

	$temp_wins = array('paper' => 'rock','rock' => 'scissors','scissors' => 'paper');
	$result = "";
	if($player_a == $player_b)
	{
		$result = "Draw";
	}
	elseif ($temp_wins[$player_b] == $player_a) 
	{
		$result = "1";
	}
	else
	{
	$result = "0";	
	}
	return $result;


}
for($i = 1 ; $i <= 50; $i++)

{
					
 $game=array("rock","paper","scissors");
 $p1=$game[array_rand($game,1)];
 $p2=$game[array_rand($game,1)];
 $p3=$game[array_rand($game,1)];
 $p4=$game[array_rand($game,1)];
 

?>
<html>
	<head>
		<title>game</title>
	</head>
<body>
	<h2>Iteration <?php echo $i;?></h2>
    <center>

	<table class="table1"border="1"style="font-size:25px;font-family:Arial;width:90%;">
	<tr>
	<td style="width:10%;"> <center>player1</center></td>
	<td style="width:10%;"> <center>player2</center> </td>
	<td style="width:10%;"> <center>player3</center> </td>
	<td style="width:10%;"> <center>player4</center></td>
	</tr>
	<tr style="text-align: center;">
	
<?php

echo "<td>$p1</td>";

echo "<td>$p2</td>";

echo "<td>$p3</td>";

echo "<td>$p4</td>";

?>
</tr>
</table>
<br><br>
<table class="table2"style="width:90%" border="1px">
  <tr>
    <th>totals</th>
	<th></th>
	<th colspan="4">against</th>
  </tr>
  <tr style="text-align: center;">
    <td></td>
	<td></td>
	<td>player1</td>
	<td>player2</td>
	<td>player3</td>
	<td>player4</td>
   </tr>	
	<tr style="text-align: center;">
    <th rowspan="4">Player wins</th>
    <td>player1</td>
	<td>-</td>
	<td><?php $res = SPS($p1,$p2); if($res=="1"){$c[0][1]++;} elseif($res=="0" or $res=="Draw"){$c[0][1]+0;}echo $c[0][1]; ?></td>
	<td><?php $res = SPS($p1,$p3); if($res=="1"){$c[0][2]++;} elseif($res=="0" or $res=="Draw"){$c[0][2]+0;}echo $c[0][2]; ?></td>
	<td><?php $res = SPS($p1,$p4); if($res=="1"){$c[0][3]++;} elseif($res=="0" or $res=="Draw"){$c[0][3]+0;}echo $c[0][3]; ?></td>
  </tr>
  <tr style="text-align: center;">
    <td>player2</td>
	<td><?php $res = SPS($p2,$p1); if($res=='1'){$c[1][0]++;} elseif($res=='0' or $res=='Draw'){$c[1][0]+0;}echo $c[1][0]; ?></td>
	<td>-</td>
	<td><?php $res = SPS($p2,$p3); if($res=='1'){$c[1][2]++;} elseif($res=='0' or $res=='Draw'){$c[1][2]+0;}echo $c[1][2]; ?></td>
	<td><?php $res = SPS($p2,$p4); if($res=='1'){$c[1][3]++;} elseif($res=='0' or $res=='Draw'){$c[1][3]+0;}echo $c[1][3]; ?></td>
    </tr>
  <tr style="text-align: center;">
    <td>player3</td>

	<td><?php $res = SPS($p3,$p1); if($res=='1'){$c[2][0]++;} elseif($res=='0' or $res=='Draw'){$c[2][0]+0;}echo $c[2][0]; ?></td>
	<td><?php $res = SPS($p3,$p2); if($res=='1'){$c[2][1]++;} elseif($res=='0' or $res=='Draw'){$c[2][1]+0;}echo $c[2][1]; ?></td>
	<td>-</td>
	<td><?php $res = SPS($p3,$p4); if($res=='1'){$c[2][3]++;} elseif($res=='0' or $res=='Draw'){$c[2][3]+0;} echo $c[2][3]; ?></td>
   </tr>
  <tr style="text-align: center;">
    <td>player4</td>
	<td><?php $res = SPS($p4,$p1); if($res=='1'){$c[3][0]++;} elseif($res=='0' or $res=='Draw'){$c[3][0]+0;}echo $c[3][0];?></td>
	<td><?php $res = SPS($p4,$p2); if($res=='1'){$c[3][1]++;} elseif($res=='0' or $res=='Draw'){$c[3][1]+0;}echo $c[3][1]; ?></td>
	<td><?php $res = SPS($p4,$p3); if($res=='1'){$c[3][2]++;} elseif($res=='0' or $res=='Draw'){$c[3][2]+0;}echo $c[3][2]; ?></td>
  <td>-</td>
  </tr>
  
  <tr>
</table>
<br/>
<br>
<br/>

</body>
</html>
	</center>
	 </body>
</html>

<?php
}
?>


