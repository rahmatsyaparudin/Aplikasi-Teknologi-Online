<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buku Tabungan</title>
</head>

<body>
<form name="form2" id="form2" method="post" action="HitungTabungan.php">
<table border="2" width="300" align="center">
    <tr>
        <th colspan="2">PERHITUNGAN TABUNGAN</th>
    </tr>
    <tr>
        <td>Saldo Awal</td>
        <td><input type="text" name="saldo_awal" id="saldo_awal" value="<?php echo @$_POST[saldo_awal];?>" /></td>
    </tr> 
    <tr>
        <td>Bunga (%)</td>
        <td><input type="text" name="bunga" id="bunga" value="<?php echo @$_POST[bunga];?>" /></td>
    </tr> 
    <tr>
        <td>Jangka Waktu</td>
        <td><input type="text" name="jangka_waktu" id="jangka_waktu" value="<?php echo @$_POST[jangka_waktu];?>" /></td>
    </tr>
    <tr>
        <th colspan="2">
        	<input type="submit" name="hitung" value="Hitung" />
            <input type="reset" name="reset" value="Reset" />
        </th>
    </tr> 
</table>
</form>

<?php if (@$_POST[hitung]=="Hitung") {
	
	$saldoawal = $_POST['saldo_awal'];
	$bunga = $_POST['bunga'];
	$jangkawaktu = $_POST['jangka_waktu'];
	$sub_bunga = $bunga / 100;
	$sub_saldo = 0;
	
?>
<br />
<h3 align="center">DETAIL TABUNGAN</h3>
<table width="300" border="1" align="center">
	<tr>
		<th>BULAN</th>
        <th>SALDO</th>
    </tr>
    <?php  
	for ($i=1; $i <= $jangkawaktu; $i++){
	?>
    <tr>
    	<td><?php echo $i; ?></td>
        <td>Rp. <?php  $saldoawal = $saldoawal + $sub_saldo; 
				echo number_format ($saldoawal,0,",","."); 
				$sub_saldo = $saldoawal * $sub_bunga; ?></td>
    </tr>
    <?php } ?>
</table>    

<?php } ?>
</body>
</html>