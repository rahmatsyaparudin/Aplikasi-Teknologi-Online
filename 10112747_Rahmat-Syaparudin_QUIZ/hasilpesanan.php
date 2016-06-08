<?php
		@$pemesan=$_POST['pemesan'];
		@$maskapai=$_POST['maskapai'];
		@$identitas=$_POST['identitas'];
		
		if (@$_POST['kirim']=="kirim"){ ?>
			<form name="tujuan" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table align="center" border="1">
			<tr>
				<td>Nama Pemesan</td>
				<td><?php echo $pemesan; ?></td>
			</tr>
			<tr>
				<td>No Identitas</td>
				<td><?php echo $identitas; ?></td>
			</tr>
			<?php if($maskapai=="Xpress Air"){ ?>
				<tr>
					<th colspan="2">XPRESS AIR</th>
				</tr>
				<tr>
					<td>Kota Tujuan</td>
					<td><select name="tujuan">
							<option>--Kota Tujuan--</option>
							<option value="Padang" <?php if (@$_POST['tujuan']=="Padang") echo "selected";?>>Padang</option>
							<option value="Palembang" <?php if (@$_POST['tujuan']=="Palembang") echo "selected";?>>Palembang</option>
							<option value="Pontianak" <?php if (@$_POST['tujuan']=="Pontianak") echo "selected";?>>Pontianak</option>
						</select>
					</td>
				</tr>
				<input type="hidden" name="maskapai" value="Xpress Air" />
			<?php } 
			if($maskapai=="Garuda Indonesia"){ ?>
				<tr>
					<th colspan="2">GARUDA INDONESIA</th>
				</tr>
				<tr>
					<td>Kota Tujuan</td>
					<td><select name="tujuan">
							<option>--Kota Tujuan--</option>
							<option value="Yogyakarta" <?php if (@$_POST['tujuan']=="Yogyakarta") echo "selected";?>>Yogyakarta</option>
							<option value="Medan" <?php if (@$_POST['tujuan']=="Medan") echo "selected";?>>Medan</option>
							<option value="Pekanbaru" <?php if (@$_POST['tujuan']=="Pekanbaru") echo "selected";?>>Pekanbaru</option>
						</select>
					</td>
				</tr>
				<input type="hidden" name="maskapai" value="Garuda Indonesia" />
				
			<?php } ?>
				<tr>
					<td>Jumlah Tiket</td>
					<td><input type="text" size="4" name="jumlah" id="jumlah" value="<?php echo @$_POST['jumlah']?>"/></td>
				</tr>
			</table>
				<center>
					<input type="submit" name="pesan" value="Pesan" />				 
				</center>
			</form>
	<?php } ?>
	
	<?php 
	@$tujuan=$_POST['tujuan'];
	@$jumlah=$_POST['jumlah'];
	@$pemesan=$_POST['pemesan'];
	@$maskapai=$_POST['maskapai'];
	@$identitas=$_POST['identitas'];
	
	if($tujuan=="Padang"){
		$harga=700000;
	}
	
	if($tujuan=="Palembang"){
		$harga=50000;
	}
	
	if($tujuan=="Pontianak"){
		$harga=750000;
	}
	
	if (@$_POST['pesan']=="Pesan"){ ?>
		<table border="1" width="50%" align="center">
			<tr>
				<td>Nama Penerbangan</td>
				<td><?php echo $maskapai; ?></td>
			</tr>
			<tr>
				<td>Tujuan Penerbangan</td>
				<td><?php echo $tujuan; ?></td>
			</tr>
			<tr>
				<td>Harga Penerbangan</td>
				<td><?php echo $harga; ?></td>
			</tr>
		</table>
<?php }
?>