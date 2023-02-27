<!DOCTYPE html>
<html>
	<head>
		<title>Katalog Mukenah</title>
		<link type="text/css" rel="stylesheet" href="tampilan.css">
	</head>
	<body class ="batas"; style="background-color: #fbc093; font-family: Kristen ITC; font-size: 14px;"><br>
		<div class="batas-atas huruf "id="border-hitam" style="background-color: #bae4e5;">			
			<h1>Katalog Mukenah</h1>
		</div>
		<fieldset id="border-biru">
		<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Halaman Update Data Merk</h2>
		<br>
<?php
	include "koneksi.php";
	$NL=@$_GET['merk_id'];
	$sql = mysqli_query($koneksi, "select * from merk_mukenah where merk_id = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
	<fieldset>
	<legend style="background-color: rgb(255, 97, 179);">Update Data Merk Mukenah</legend><br>
     <form action="" method="post">
		<table>
			<tr>
				<td>Id Merk</td>
				<td>:</td>
				<td><input type="text" name="merk_id" value="<?php echo $data['merk_id'];?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk_nama" value="<?php echo $data['merk_nama'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="update" value="Update"> <input type="reset" name="reset" value="Batal"></td>
			</tr>
		</table>
	</form>
	<?php
		$merk_id = @$_POST['merk_id'];
		$merk_nama = @$_POST['merk_nama'];
		$edit_produk = @$_POST['update'];
		if($edit_produk){
			if ($merk_nama=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update merk_mukenah set merk_nama = '$merk_nama' where merk_id = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Merk Mukenah Berhasil");
					window.location.replace("http://localhost/KatalogMukenah/lihatdata.php");
				</script>
				<?php
			}
		}
	?>
	</fieldset>
</fieldset>
</body>
</html>