<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	@$tipe_kamar = $_POST[tipe_kamar];
	@$air = $_POST[air];
	@$telepon = $_POST[telepon];
	@$televisi = $_POST[televisi];
	@$komputer = $_POST[komputer];
	@$ricecooker = $_POST[rice_cooker];
	$biaya_kamar = 0;
	$biaya_air = 0;
	$biaya_telepon = 0;
	$biaya_komputer = 0; 
	$biaya_televisi = 0; 
	$biaya_ricecooker = 0;
	$total_biaya = 0;
	
	if ($tipe_kamar == "A[2x3 m]"){
		$jenis_kamar = "A[2x3 m]";
		$biaya_kamar = 200000;
	}
	
	if ($tipe_kamar == "B[3x3 m]"){
		$jenis_kamar = "B[3x3 m]";
		$biaya_kamar = 250000;
	}
	
	if ($tipe_kamar == "C[4x3 m]"){
		$jenis_kamar = "C[4x3 m]";
		$biaya_kamar = 300000;
	}
	
	if ($air == "Air PDAM"){
		$jenis_air = "Air PDAM";
		$biaya_air = 20000;
	}
	
	if ($air == "Air Tanah"){
		$jenis_air = "Air Tanah";
		$biaya_air = 15000;
	}
	
?>
<table border="2" align="center">
	<tr>
    	<th colspan="2">HASIL PERHITUNGAN</th>
    </tr>
    <tr>
    	<td colspan="2" align="center" bgcolor="#999999">Kamar</td>
    </tr>
    <tr>
    	<td><?php echo $jenis_kamar; ?> </td>
        <td align="right">Rp. <?php echo number_format ($biaya_kamar,0,",","."); ?> </td>
    </tr>
    <tr>
    	<td colspan="2" align="center" bgcolor="#999999">Jenis Air</td>
    </tr>
    <tr>
    	<td><?php echo $jenis_air; ?> </td>
        <td align="right">Rp. <?php echo number_format ($biaya_air,0,",","."); ?> </td>
    </tr>
    <tr>
    	<td colspan="2" align="center" bgcolor="#999999">Fasilitas-Fasilitas</td>
    </tr>
    <?php
		if ($telepon == "Telepon"){
			$fas_telepon = "Telepon";
			$biaya_telepon = 20000;
			echo "<tr>
				<td> $fas_telepon </td>
				<td align='right'>Rp. ".number_format ($biaya_telepon,0,",","."); 
			echo "</td></tr>"; 
		} 
        
       	if ($televisi == "Televisi"){
            $fas_televisi = "Televisi";
            $biaya_televisi = 30000;
            echo "<tr>
                <td> $fas_televisi </td>
                <td align='right'>Rp. ".number_format ($biaya_televisi,0,",","."); 
            echo "</td></tr>"; 
		}
        
        if ($komputer == "Komputer"){
            $fas_komputer = "Komputer";
            $biaya_komputer = 60000;
            echo "<tr>
                <td> $fas_komputer </td>
                <td align='right'>Rp. ".number_format ($biaya_komputer,0,",","."); 
            echo "</td></tr>"; 
		} 
		
		 if ($ricecooker == "Rice Cooker"){
            $fas_ricecooker = "Rice Cooker";
            $biaya_ricecooker = 5000;
            echo "<tr>
                <td> $fas_ricecooker </td>
                <td align='right'>Rp. ".number_format ($biaya_ricecooker,0,",","."); 
            echo "</td></tr>"; 
		} 
			
		?>
        
    <tr  bgcolor="#999999">
    <?php $total_biaya = $biaya_kamar + $biaya_air + $biaya_telepon + $biaya_televisi + $biaya_komputer + $biaya_ricecooker; ?>
    	<td>TOTAL</td>
        <td align="right"><?php echo "Rp. ".number_format ($total_biaya,0,",",".");;?></td>
    </tr>
</table>

</body>
</html>