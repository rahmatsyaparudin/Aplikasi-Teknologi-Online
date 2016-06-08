<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pemesanan TIket Pesawat</title>
</head>

<body>
	
	<table border="1" width="50%" align="center">
		<tr>
			<th colspan="2">MASKAPAI XPRESS AIR</th>
		</tr>
		<tr>
			<th>Tujuan Penerbangan</th>
			<th>Harga Tiket</th>
		</tr>
		<tr>
			<td>Padang</td>
			<td>700.000</td>
		</tr>
		<tr>
			<td>Palembang</td>
			<td>500.000</td>
		</tr>
		<tr>
			<td>Pontianak</td>
			<td>750.000</td>
		</tr>
		<tr>
			<th colspan="2">MASKAPAI GARUDA INDONESIA</th>
		</tr>
		<tr>
			<th>Tujuan Penerbangan</th>
			<th>Harga Tiket</th>
		</tr>
		<tr>
			<td>Yogyakarta</td>
			<td>400.000</td>
		</tr>
		<tr>
			<td>Medan</td>
			<td>900.000</td>
		</tr>
		<tr>
			<td>Pekanbaru</td>
			<td>780.000</td>
		</tr>
	</table><hr width="60%" /><br />
	
	<form name="pemesanan" method="post" action="hasilpesanan.php">
	<table align="center">
		<tr>
			<th colspan="2">PEMESANAN TIKET PESAWAT</th>
		</tr>
		<tr>
			<td>Nama Pemesan</td>
			<td><input type="text" size="15" name="pemesan" id="pemesan" placeholder="Nama Pemesan" value="<?php echo @$_POST['pemesan']?>" /></td>
		</tr>
		<tr>
			<td>No. Identitas</td>
			<td><input type="text" size="15" name="identitas" id="identitas" placeholder="Nomor Identitas" value="<?php echo @$_POST['identitas']?>" /></td>
		</tr>
		<tr>
			<td>Maskapai Penerbangan</td>
			<td><select name="maskapai">
					<option>--Pilih Maskapai--</option>
					<option value="Xpress Air" <?php if (@$_POST['maskapai']=="Xpress Air") echo "selected";?>>Xpress Air</option>
					<option value="Garuda Indonesia" <?php if (@$_POST['maskapai']=="Garuda Indonesia") echo "selected";?>>Garuda Indonesia</option>
				</select></td>
		</tr>
	</table>
		<center>
			<button type="submit" name="kirim" value="kirim">Lanjut</button>
		</center>
	</form>
</body>
</html>
