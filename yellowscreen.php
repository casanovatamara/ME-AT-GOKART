<!DOCTYPE html>
<html>
<head>
	<title>Hey </title>
	<link href="yellowscreen.css" rel="stylesheet" type="text/css" />
	
	
<header>
		<button class="closebutton"> Back </button>
		<h1> ME AT GO-KART</h1>

</header>

	<meta http-equiv="refresh" content="5"> <!--refreshes every 5 seconds-->
	
	<?php 
	$myfile = fopen("c:\mogo\data\9.txt","r");
	
	$line= fgets($myfile);
	$array1= explode("#",$line);

	$line2= fgets($myfile);
	$array2= explode("#",$line2);
	
	$line3= fgets($myfile);
	$array3= explode("#",$line3);
	
	$line4= fgets($myfile);
	$array4= explode("#",$line4);
	
	$line5= fgets($myfile);
	$array5= explode("#",$line5);
	
	$line6= fgets($myfile);
	$array6= explode("#",$line6);
	
	$line7= fgets($myfile);
	$array7= explode("#",$line7);
	
	$line8= fgets($myfile);
	$array8= explode("#",$line8);
	
	$line9= fgets($myfile);
	$array9= explode("#",$line9);
	
	$line10= fgets($myfile);
	$array10= explode("#",$line10);
	
	$line11= fgets($myfile);
	$array11= explode("#",$line11);
	
	$line12= fgets($myfile);
	$array12= explode("#",$line12);
	
	$line13= fgets($myfile);
	$array13= explode("#",$line13);
	
	$line14= fgets($myfile);
	$array14= explode("#",$line14);
	 
	////////////////////////////////////////////	
	
	$cell1='';
	$cell2='';
	$cell3='';
	$cell4='';
	$cell5='';
	$cell6='';
	$cell7='';				
	

	function colors($larray){ /* returns $cell1-$cell7 taken froms the color string*/
		
		$scolor= $larray[7];
	
		
		$c=$scolor[0];
			if($c=="b")$cc1="black";
			elseif($c=="r")$cc1="red";
			elseif($c=="g")$cc1="gray";
			elseif($c=="l")$cc1="lime";
			else $cc1="blue";
		
		$c=$scolor[1];
			if($c=="b")$cc2="black";
			elseif($c=="r")$cc2="red";
			else $cc2="gray";
			
		$c=$scolor[2];
			if($c=="b")$cc3="black";
			elseif($c=="r")$cc3="red";
			else $cc3="gray";
			
		$c=$scolor[3];
			if($c=="b")$cc4="black";
			elseif($c=="r")$cc4="red";
			else $cc4="gray";
			
		$c=$scolor[4];
			if($c=="b")$cc5="black";
			elseif($c=="r")$cc5="red";
			else $cc5="gray";
			
		$c=$scolor[5];
			if($c=="b")$cc6="black";
			elseif($c=="r")$cc6="red";
			else $cc6="gray";
			
		$c=$scolor[6];
			if($c=="b")$cc7="black";
			elseif($c=="r")$cc7="red";
			else $cc7="gray";
		
		$GLOBALS ['cell1']= "style=color:".$cc1; 
		$GLOBALS ['cell2']= "style=color:".$cc2;
		$GLOBALS ['cell3']= "style=color:".$cc3;
		$GLOBALS ['cell4']= "style=color:".$cc4;
		$GLOBALS ['cell5']= "style=color:".$cc5;
		$GLOBALS ['cell6']= "style=color:".$cc6;
		$GLOBALS ['cell7']= "style=color:".$cc7;			
		
	
	}

	///////////////////////////////////////////////
	


	fclose ($myfile);

	?>
	
</head>

<body>
		<table width="100%">
				
			<tr>  <!-- main titles -->
				
				<th class="col1">Nr</th>
				<th class="col2">Driver</th>
				<th class="col3">Lap</th>
				<th class="col4">LastLap</th>
				<th class="col5">BestLap</th>
				<th class="col6">Time</th>
				<th class="col7">Info</th>
				
			</tr>
			<tr>  <!--line 1 --> <?php colors($array1)?>
				<td  <?php echo $cell1 ?>><?php echo $array1[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array1 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array1 [2] ?></td>
				
				<?php
					if (strlen($array1 [3])<=6){
						echo "<td $cell3>$array1[3]</td>";
						echo "<td $cell4>$array1[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array1[3]</td>";}
				?>
				
				<td <?php echo $cell6 ?>><?php echo $array2 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array1 [6] ?></td>
		
			</tr> <!--line 2  --> <?php colors($array2)?>
				<td  <?php echo $cell1 ?>><?php echo $array2[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array2 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array2 [2] ?></td>
				
				<?php
					if (strlen($array2 [3])<=6){
						echo "<td $cell3>$array2[3]</td>";
						echo "<td $cell4>$array2[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array2[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array2 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array2 [6] ?></td>
			
			<tr><!--line 3  --><?php colors($array3)?>
				<td  <?php echo $cell1 ?>><?php echo $array3[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array3 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array3 [2] ?></td>
				
				<?php
					if (strlen($array3[3])<=6){
						echo "<td $cell3>$array3[3]</td>";
						echo "<td $cell4>$array3[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array3[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array3 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array3 [6] ?></td>
			</tr>
		 
			<tr><!--line 4  --><?php colors($array4)?>
				<td  <?php echo $cell1 ?>><?php echo $array4[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array4 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array4 [2] ?></td>
				
				<?php
					if (strlen($array4[3])<=6){
						echo "<td $cell3>$array4[3]</td>";
						echo "<td $cell4>$array4[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array4[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array4 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array4 [6] ?></td>
			</tr>
		 
			<tr><!--line 5  --><?php colors($array5)?>
				<td  <?php echo $cell1 ?>><?php echo $array5 [0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array5 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array5 [2] ?></td>
				
				<?php
					if (strlen($array5[3])<=6){
						echo "<td $cell3>$array5[3]</td>";
						echo "<td $cell4>$array5[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array5[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array5 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array5 [6] ?></td>
			</tr>
			
			<tr><!--line 6  --><?php colors($array6)?>
				<td  <?php echo $cell1 ?>><?php echo $array6[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array6 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array6 [2] ?></td>
				
				<?php
					if (strlen($array6[3])<=6){
						echo "<td $cell3>$array6[3]</td>";
						echo "<td $cell4>$array6[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array6[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array6 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array6 [6] ?></td>
			</tr>
		
			<tr><!--line 7  --><?php colors($array7)?>
				<td  <?php echo $cell1 ?>><?php echo $array7[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array7 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array7 [2] ?></td>
				
				<?php
					if (strlen($array7[3])<=6){
						echo "<td $cell3>$array7[3]</td>";
						echo "<td $cell4>$array7[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array7[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array7 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array7 [6] ?></td>
			</tr>
			
			<tr><!--line 8  --><?php colors($array8)?>
				<td  <?php echo $cell1 ?>><?php echo $array8[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array8 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array8 [2] ?></td>
				
				<?php
					if (strlen($array8[3])<=6){
						echo "<td $cell3>$array8[3]</td>";
						echo "<td $cell4>$array8[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array8[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array8 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array8 [6] ?></td>
			</tr>
			
			<tr><!--line 9  --><?php colors($array9)?>
				<td  <?php echo $cell1 ?>><?php echo $array9[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array9 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array9 [2] ?></td>
				
				<?php
					if (strlen($array9[3])<=6){
						echo "<td $cell3>$array9[3]</td>";
						echo "<td $cell4>$array9[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array9[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array9 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array9 [6] ?></td>
			</tr>
			
			<tr><!--line 10  --><?php colors($array10)?>
				<td  <?php echo $cell1 ?>><?php echo $array10[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array10 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array10 [2] ?></td>
				
				<?php
					if (strlen($array10[3])<=6){
						echo "<td $cell3>$array10[3]</td>";
						echo "<td $cell4>$array10[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array10[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array10 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array10 [6] ?></td>
			</tr>
			
			<tr><!--line 11  --><?php colors($array11)?>
				<td  <?php echo $cell1 ?>><?php echo $array11[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array11 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array11 [2] ?></td>
				
				<?php
					if (strlen($array11[3])<=6){
						echo "<td $cell3>$array11[3]</td>";
						echo "<td $cell4>$array11[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array11[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array11 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array11 [6] ?></td>
			</tr>
			
			<tr><!--line 12  --><?php colors($array12)?>
				<td  <?php echo $cell1 ?>><?php echo $array12[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array12 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array12 [2] ?></td>
				
				<?php
					if (strlen($array12[3])<=6){
						echo "<td $cell3>$array12[3]</td>";
						echo "<td $cell4>$array12[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array12[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array12 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array12 [6] ?></td>
			</tr>
		
			<tr><!--line 13  --><?php colors($array13)?>
				<td  <?php echo $cell1 ?>><?php echo $array13[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array13 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array13 [2] ?></td>
				
				<?php
					if (strlen($array13[3])<=6){
						echo "<td $cell3>$array13[3]</td>";
						echo "<td $cell4>$array13[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array13[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array13 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array13 [6] ?></td>
			</tr>
			
			<tr><!--line 14  --><?php colors($array14)?>
				<td  <?php echo $cell1 ?>><?php echo $array14[0] ?></td>
				<td class="name"<?php echo $cell2 ?>><?php echo $array14 [1]?></td>
				<td <?php echo $cell3 ?> ><?php echo $array14 [2] ?></td>
				
				<?php
					if (strlen($array14[3])<=6){
						echo "<td $cell3>$array14[3]</td>";
						echo "<td $cell4>$array14[4]</td>";
					}
					else {echo "<td $cell3 colspan='2'>$array14[3]</td>";}
				?>

				
				<td <?php echo $cell6 ?>><?php echo $array14 [5] ?></td>
				<td class="row"<?php echo $cell7 ?>><?php echo $array14 [6] ?></td>
			</tr>
		</table>
		
<div class="que">		
	<div class="q1">
		<?php
		
			echo "<h2>Queue 1</h2>";
		
			$myfile = fopen("c:\mogo\Queue1.txt", "r");
			echo "<pre>";
			while(!feof($myfile))
			{
			$line =fgets($myfile);
			echo $line;
			}
			echo "</pre>";
			fclose($myfile);
		
		echo "<br><br>";
		?>
	</div>
	<div class="q2">
		<?php
		
		echo "<h2>Queue 2</h2>";
		
			$myfile = fopen("c:\mogo\Queue2.txt", "r");
			echo "<pre>";
			while(!feof($myfile))				
			{
			$line =fgets($myfile);
			echo $line;
			}
			echo "</pre>";
			fclose($myfile);
		
		echo "<br><br>";
		?>
	</div>
	<div class="q3">
		<?php
		echo "<h2>Queue 3</h2>";
		
			$myfile = fopen("c:\mogo\Queue3.txt", "r");
			echo "<pre>";
			while(!feof($myfile)) 
			{
			$line =fgets($myfile);
			echo $line;
			}
			echo "</pre>";
			fclose($myfile);
		
		echo "<br><br>";
		?>
	</div>
	<div class="q4">
		<?php
		echo "<h2>Queue 4</h2>";
		
			$myfile = fopen("c:\mogo\Queue4.txt", "r");
			echo "<pre>";
			while(!feof($myfile)) 
			{
			$line =fgets($myfile);
			echo $line;
			
			}
			echo "</pre>";
			fclose($myfile);
		
		echo "<br><br>";
		?>
	</div>
	<div class="q5">
		<?php
		echo "<h2>Queue 5</h2>";
		
			$myfile = fopen("c:\mogo\Queue5.txt", "r");
			echo "<pre>";
			while(!feof($myfile)) 
			{
			$line =fgets($myfile);
			echo $line;
			
			}
			echo "</pre>";
			fclose($myfile);
		
		echo "<br><br>";
		?>
	</div>
	<div class="q6">
		<?php
		echo "<h2>Queue 6</h2>";
		
			$myfile = fopen("c:\mogo\Queue6.txt", "r");
			echo "<pre>";
			while(!feof($myfile)) 
			{
			$line =fgets($myfile);
			echo $line;
			}
			echo "</pre>";
			fclose($myfile);
		
		echo "<br><br>";	 
	?>
	</div>
</div>

</body>



</html>
