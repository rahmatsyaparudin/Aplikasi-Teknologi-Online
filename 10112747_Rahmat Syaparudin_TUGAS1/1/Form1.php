<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Harga BBM</title>
</head>

<body>
<h3 align="center">DAFTAR HARGA BBM</h3>
<form name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<table border="2" align="center">
	<tr>
    	<th>Liter Awal</th>
        <th>Liter Akhir</th>
        <th>Bensin</th>
        <th>Solar</th>
        <th>Minyak Tanah</th>
   	</tr>
	<tr align="center">
    	<td><select name="liter_awal">
        	<?php for ($liter_awal=1; $liter_awal <= 20; $liter_awal++){ ?>
            		<option value="<?php echo $liter_awal; ?>" <?php if (@$_POST[liter_awal]=="$liter_awal") echo "selected"; ?>>
					<?php echo $liter_awal; ?></option>
            <?php } ?>
          	</select>
        </td>
       	<td><select name="liter_akhir">
        	<?php for ($liter_akhir=1; $liter_akhir <= 20; $liter_akhir++){ ?>
            		<option value="<?php echo $liter_akhir; ?>" <?php if (@$_POST[liter_akhir]=="$liter_akhir") echo "selected"; ?>>
					<?php echo $liter_akhir; ?></option>
            <?php } ?>
          	</select>
      	</td>
       	<td><input type="checkbox" name="bensin" id="bensin" value="Bensin"  <?php if (@$_POST[bensin]=="Bensin") echo "checked";?> /></td>
        <td><input type="checkbox" name="solar" id="solar" value="Solar"  <?php if (@$_POST[solar]=="Solar") echo "checked";?> /></td>
        <td><input type="checkbox" name="minyak_tanah" id="minyak_tanah" value="Minyak Tanah" <?php if (@$_POST[minyak_tanah]=="Minyak Tanah") 
			echo "checked";?> /></td>
  	</tr>
    <tr>
    	<th colspan="5"><button type="submit" name="tampil" id="tampil" value="Tampilkan">Tampilkan</button></th>
  	</tr>						    
</table>
</form>

<hr width="400" size="5" color="#FF0000"/>

<?php	
	$harga_bensin = 6000;
	$harga_solar = 5500;
	$harga_minyak_tanah = 2500;
	@$liter_awal = $_POST[liter_awal];
	@$liter_akhir = $_POST[liter_akhir];
	@$bensin = $_POST[bensin];
	@$solar = $_POST[solar];
	@$minyak_tanah = $_POST[minyak_tanah];
	
 
	if (@$_POST[tampil]!="Tampilkan"){?>
    <table border="2" align="center">
    	<tr align="center">
        	<th>Liter</th>
            <th>Bensin</th>
            <th>Solar</th>
			<th>Minyak Tanah</th>
        </tr>
        
        <?php 
		for ($liter = 1; $liter <= 10; $liter++){
                echo "<tr align=right ><td> $liter </td>";
					$total_bensin = $harga_bensin * $liter;
            		echo "<td>".number_format ($total_bensin,0,",",".")."</td>";
				
					$total_solar = $harga_solar * $liter;
            		echo "<td>".number_format ($total_solar,0,",",".")."</td>";
				
					$total_minyak = $harga_minyak_tanah * $liter;
            		echo "<td>".number_format ($total_minyak,0,",",".")."</td>";
				echo "</tr>";
			} 
    echo "</table>";
  	} ?>
	
    <?php
    if (@$_POST[tampil]=="Tampilkan"){?>
    <table border="2" align="center">
    	<tr align="center">
        	<th>Liter</th>
            <?php 
			if (@$_POST[bensin]== "Bensin"){
            	echo "<th>Bensin</th>";
            } 
            if (@$_POST[solar]== "Solar"){
            	echo "<th>Solar</th>"; 
			}
			if (@$_POST[minyak_tanah]== "Minyak Tanah"){
            	echo "<th>Minyak Tanah</th>";
            } ?>
        </tr>
        
        <?php 
		if ($liter_awal >= $liter_akhir){
			$temp = $liter_awal;
			$liter_awal = $liter_akhir;
			$liter_akhir = $temp;
		}
			
			for ($liter = $liter_awal; $liter <= $liter_akhir; $liter++){
                echo "<tr align=right ><td> $liter </td>";
				
				if ($bensin == "Bensin"){
					$total_bensin = $harga_bensin * $liter;
            		echo "<td>".number_format ($total_bensin,0,",",".")."</td>";
				}
				if ($solar == "Solar"){
					$total_solar = $harga_solar * $liter;
            		echo "<td>".number_format ($total_solar,0,",",".")."</td>";
				}
				if (@$minyak_tanah == "Minyak Tanah"){
					$total_minyak = $harga_minyak_tanah * $liter;
            		echo "<td>".number_format ($total_minyak,0,",",".")."</td>";
				}
				echo "</tr>";
			} 
    echo "</table>";
    } ?>

</body>
</html>