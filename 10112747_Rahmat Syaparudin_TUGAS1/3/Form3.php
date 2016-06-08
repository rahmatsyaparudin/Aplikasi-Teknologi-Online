<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perhitungan Harga Kost</title>
</head>

<body>
<form name="form3" id="form3" method="post" action="HitungKosan.php">
<table border="2" width="300" align="center">
    <tr>
        <th colspan="2">PERHITUNGAN HARGA KOST</th>
    </tr>
    <tr>
        <td>Tipe Kamar</td>
        <td>
        <select name="tipe_kamar" id="tipe_kamar">
        <option>--Tipe Kamar--</option>
        <option value="A[2x3 m]" <?php if (@$_POST[tipe_kamar]=="A[2x3 m]") echo "selected";?>>A[2x3 m]</option>
        <option value="B[3x3 m]" <?php if (@$_POST[tipe_kamar]=="B[3x3 m]") echo "selected";?>>B[3x3 m]</option>
        <option value="C[4x3 m]" <?php if (@$_POST[tipe_kamar]=="C[4x3 m]") echo "selected";?>>C[4x3 m]</option>
        </select>
        </td>
    </tr> 
    <tr>
        <td>Air</td>
        <td>
        	<input type="radio" name="air" id="air" value="Air PDAM"  <?php if (@$_POST[air]=="Air PDAM") echo "checked";?> />Air PDAM <br />
        	<input type="radio" name="air" id="air" value="Air Tanah"  <?php if (@$_POST[air]=="Air Tanah") echo "checked";?> />Air Tanah    
      	</td>
    </tr>
    <tr>
        <td>Fasilitas</td>
        <td>
        	<input type="checkbox" name="telepon" id="telepon" value="Telepon"  <?php if (@$_POST[telepon]=="Telepon") echo "checked";?> />Telepon 
            <br />
        	<input type="checkbox" name="televisi" id="televisi" value="Televisi"  <?php if (@$_POST[televisi]=="Televisi") echo "checked";?> />Televisi 
            <br />
            <input type="checkbox" name="komputer" id="komputer" value="Komputer"  <?php if (@$_POST[komputer]=="Komputer") echo "checked";?> />Komputer 
            <br />
            <input type="checkbox" name="rice_cooker" id="rice_cooker" value="Rice Cooker"  <?php if (@$_POST[rice_cooker]=="Rice Cooker") echo "checked";?> />
            Rice Cooker<br />
      	</td>
    </tr>
    <tr>
        <th colspan="2">
        	<input type="submit" name="hitung" value="Hitung" />
            <input type="reset" name="reset" value="Reset" />
        </th>
    </tr>  
</table>
</form>

</body>
</html>