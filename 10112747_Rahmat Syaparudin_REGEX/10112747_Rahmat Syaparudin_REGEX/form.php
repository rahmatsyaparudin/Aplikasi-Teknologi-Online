<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Regular Expression</title>
<style>
	body{
		text-indent:5px;
		font-size:16px;
		font-family:"Comic Sans MS", cursive;
	}
	table{
		color:#FFF;
	}
</style>
</head>
<body bgcolor="#00FFFF">
<form id="form1" name="form1" method="post" action="DataPesanan.php">
<table width="" bgcolor="#0000FF" border="1" align="center" style="margin-bottom:5px;">
    <tr>
      <th colspan="3">PAKET WISATA PULAU TIDUNG</th>
    </tr>
    <tr>
      	<td colspan="2">Nama Pemesan</td>
      	<td><input type="text" name="nama" size="15" placeholder="Nama Pemesan" value="<?php echo @$_POST['nama'];?>" /></td>
    </tr>
    <tr>
      	<td colspan="2">Jumlah Peserta</td>
      	<td><input type="text" name="jumlah_peserta" size="15" placeholder="Jumlah Anggota" value="<?php echo @$_POST['jumlah_peserta'];?>" /></td>
    </tr>
    <tr>
      	<td colspan="2">No. Telepon</td>
      	<td><input type="text" name="telepon" size="15" placeholder="No Telepon" value="<?php echo @$_POST['telepon'];?>" /></td>
    </tr>
    <tr>
      	<td colspan="2">Email</td>
      	<td><input type="text" name="email" size="15" placeholder="Email" value="<?php echo @$_POST['email'];?>" /></td>
    </tr>
    <tr>
    	<td colspan="2">Pilihan Paket</td>
        <td><input type="radio" name="paket" value="Paket 1" <?php if (@$_POST['paket']=="Paket 1") echo "selected";?> />Paket 1 - 2D1N <br />
        	<input type="radio" name="paket" value="Paket 2" <?php if (@$_POST['paket']=="Paket 2") echo "selected";?> />Paket 2 - 3D2N </td>
  	</tr>
    <tr>
    	<th colspan="3">FASILITAS TAMBAHAN</th>
    </tr>
     <tr>
    	<th>Jenis Fasilitas</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <tr>
    	<td>Snorkling</td>
        <td>Rp. 30.000</td>
        <td align="left">
        	<input type="hidden" name="harga_fas[]" value="30000" />
            <input type="hidden" name="fasilitas[]" value="Snorkling"/>
            <input type="text" size="3" name="jumlah[]" value ="<?php echo @$_POST['jumlah']?>"> - Orang</td>
	</tr>
    <tr>
    	<td>Sepeda</td>
        <td>Rp. 25.000</td>
        <td align="left">
        	<input type="hidden" name="fasilitas[]" value="Sepeda"/>
        	<input type="hidden" name="harga_fas[]" value="25000" />
            <input type="text" size="3" name="jumlah[]" value ="<?php echo @$_POST['jumlah']?>"> - Orang</td>
	</tr>
     <tr>
    	<td>Camera Underwater</td>
        <td>Rp. 150.000</td>
        <td align="left">
        	<input type="hidden" name="fasilitas[]" value="Camera Underwater"/>
            <input type="hidden" name="harga_fas[]" value="150000" />
            <input type="text" size="3" name="jumlah[]" value ="<?php echo @$_POST['jumlah']?>"> - Set</td>
	</tr>
     <tr>
    	<td>Donat Boat</td>
        <td>Rp. 25.000</td> 
        <td align="left">
        	<input type="hidden" name="fasilitas[]" value="Donat Boat"/>
        	<input type="hidden" name="harga_fas[]" value="35000" />
            <input type="text" size="3" name="jumlah[]" value ="<?php echo @$_POST['jumlah']?>"> - Orang</td>
	</tr>
    <tr>
    	<td align="center" colspan="4"><input type="submit" name="submit" value="Pesan" />
    					   <input type="reset" name="reset" value="Ulangi" /></td>
  	</tr>
</table>					
</form>
</body>
</html>