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
<?php
	$fasilitas = "";
	$paket = "";
	$nama = "";
	$email = "";
	$fas_paket = "";
	$ket_paket = "";
	$harga_paket = 0;
	$jumlah_peserta = 0;
	$subtotal = 0;
	$total = 0;
	$total_jumlah = 0;
	
	$nama = trim($_POST['nama']);
	$email = trim($_POST['email']);
	$jumlah_peserta = $_POST['jumlah_peserta'];
	$telepon = $_POST['telepon'];
	@$paket = $_POST['paket'];
	$fasilitas = $_POST['fasilitas'];
	$harga_fas = $_POST['harga_fas'];
	$jumlah = $_POST['jumlah'];
	
	if ($paket=="Paket 1"){
		$ket_paket = "Paket 1 - 2D1N";
		$fas_paket = "<ul type=square>
						<li>Welcome Drink</li>
						<li>Penginapan</li>
						<li>Makan 3x</li>
						<li>Banana Boat</li>
						<li>Barbeque</li>
					  </ul>";
		$harga_paket = 200000; 	
	}
	if ($paket=="Paket 2"){
		$ket_paket = "Paket 2 - 3D2N";
		$fas_paket = "<ul type=square>
						<li>Welcome Drink</li>
						<li>Penginapan</li>
						<li>Makan 6x</li>
						<li>Banana Boat</li>
						<li>Barbeque</li>
					  </ul>";
		$harga_paket = 275000; 	
	}
	
	//REGULAR EXPRESSION//
	$error = false;
	$message="";
	
	//Regex Nama
	if (!preg_match('/[A-Za-z]/', $nama)&&($nama!="")){
		$message .="Nama hanya boleh mengandung huruf<br>";	
		$error=true;
	}
	if ((strlen($nama)<3)&&($nama!="")){
		$message .="Nama minimal 3 huruf <br>";	
		$error=true;
	}
	if ($nama==""){
		$message .="Nama Tidak boleh kosong <br>";	
		$error=true;
	}
	//End Regex Nama
	
	//Regex Jumlah Peserta
	if (!filter_var($jumlah_peserta, FILTER_VALIDATE_INT)){
		$message .="Jumlah Peserta harus diisi 1-40 orang <br>";
		$error=true;
	}	
		
	if (($jumlah_peserta>40)&&($jumlah_peserta != "")){
		$message .="Maaf kami hanya bisa melayani peserta 1-40 orang<br>";	
		$error=true;
	}
	//End Regex Jumlah Peserta
	
	//Regex No. Telepon
	if (!preg_match('/0[0-9]{9,11}/', $telepon)){
		$message .="Format Nomor telepon invalid <br>";	
		$error=true;
	}
	//End Regex No. Telepon
	
	//Regex Email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) && ($email!="")){  
		$message .="Maaf email tidak valid <br>";	
		$error=true;
	}
	
	if ($email==""){  
		$message .="Email Harus diisi <br>";	
		$error=true;
	}
	//End regex Email
	
	//Regex Paket	
	if (preg_match("/Paket 1\z/i", $paket)){
		$error=false;
	}else if (preg_match("/Paket 2\z/i", $paket)){
		$error=false;
	}else{
		$message .="Paket belum dipilih<br>";	
		$error=true;
	}
	//Eng Regex Paket
	
	//Regex Fasilitas-fasilitas
	for($i=0;$i<count($jumlah);$i++){
		if(!mb_ereg("[0-9]", $jumlah[$i])&&($jumlah[$i]!="")){
			$message .="Fasilitas $fasilitas[$i] hanya boleh diisi angka<br>";
			$error=true;
		}
	}
	//End Regex Fasilitas
		
	//Pemberitahuan Kesalahan	
	if ($error==true){
		echo "Maaf ada beberapa kesalahan yang anda inputkan <br>Kesalahan yang terjadi adalah : <br>
					<ul type=none><li><b>".$message."</b></li></ul><br>Mohon Inputkan Kembali";
		echo " <a href=javascript:history.back()> << back</a>";
	}else if ($error==false){
				
?>
<table width="" border="1" bgcolor="#0000FF" align="center">
  	<tr>
   		<th colspan="4">DATA PEMESANAN PAKET</th>
  	</tr>
  	<tr>
    	<td colspan="2">Nama Pemesan</td>
    	<td colspan="2"><?php echo $nama;?></td>
  	</tr>
  	<tr>
    	<td colspan="2">Jumlah Peserta</td>
    	<td colspan="2"><?php echo $jumlah_peserta;?> - Orang</td>
  	</tr>
    <tr>
    	<td colspan="2">No. Telepon</td>
    	<td colspan="2"><?php echo $telepon;?></td>
  	</tr>
    <tr>
    	<td colspan="2">Email</td>
    	<td colspan="2"><?php echo $email;?></td>
  	</tr>
    <tr>
    	<td colspan="2">Pilihan Paket</td>
    	<td colspan="2"><?php echo $ket_paket;?></td>
  	</tr>
    <tr>
    	<td colspan="2">Harga Paket</td>
    	<td colspan="2" align="left">Rp. <?php echo number_format($harga_paket,0);?>/Orang</td>
  	</tr>
    <tr>
    	<td colspan="2">Fasilitas Paket</td>
    	<td colspan="2" align="left"><?php echo $fas_paket;?></td>
  	</tr>
    <tr>
    	<th colspan="4">FASILITAS TAMBAHAN</th>
    </tr>
    
<!-- BELUM FIX UNTUK TIDAK ADA FASILITAS -->    
    <?php
	if (empty($jumlah)){ 
		echo " 
			<tr>
				<th colspan=4>Tidak Ada Fasilitas Tambahan</th>
			</tr>";
	}else{
		echo " 
			<tr>
				<th> Fasilitas </th>
				<th> Harga </th>
				<th> Peserta </th>
				<th> SubTotal </th>
			</tr>";
	}
    
	for ($i=0; $i < count($jumlah); $i++){
		if ($jumlah[$i] != 0 ){
		$subtotal = $jumlah[$i] * $harga_fas[$i];
		echo "
			<tr>
				<td> $fasilitas[$i] </td>
				<td> Rp. ".number_format($harga_fas[$i],0)."</td>
				<td align=center> $jumlah[$i] - Orang </td>
				<td> Rp. ".number_format($subtotal,0)." </td>
			</tr>";
		$total = $total + $subtotal;
		}
	}
    
    $total_jumlah = ($harga_paket * $jumlah_peserta) + $total;
	?>
	<tr>
    	<td colspan="3"><strong>TOTAL JUMLAH</strong></td>
    	<td align="left">Rp. <?php echo number_format($total_jumlah,0);?></td>
  	</tr>
</table>
<?php }?>
</body>
</html>