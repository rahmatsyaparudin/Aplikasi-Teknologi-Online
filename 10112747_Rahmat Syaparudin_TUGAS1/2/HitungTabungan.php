<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hasil Perhitungan</title>
</head>

<body>

<?php if (@$_POST[hitung]=="Hitung") {
	
	$saldoawal = $_POST['saldo_awal'];
	$bunga = $_POST['bunga'];
	$jangkawaktu = $_POST['jangka_waktu'];
	$sub_bunga = $bunga / 100;
	$sub_saldo = 0;
	
?>
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
<p>&nbsp;</p>
</body>
</html>