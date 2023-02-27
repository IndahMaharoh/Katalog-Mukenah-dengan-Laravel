<!DOCTYPE html>
<html>
	<head>
		<title>Katalog Mukenah</title>
		<link type="text/css" rel="stylesheet" href="tampilan.css">
	</head>
	<body class ="batas"; style="background-color: #fbc093; font-family: Kristen ITC; font-size: 14px;">
		<div class="batas-atas huruf "id="border-hitam" style="background-color: #bae4e5;">			
			<h1>Katalog Mukenah</h1>
		</div>
		<div class="background-img" id="border-biru" style="font-family:Times New Roman">
			<nav><ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="about.html">Tentang Kami</a></li>
				<li><a href="populer.php">Populer</a></li>
				<li><a href="harga.php">Harga</a></li>
				<li><a href="lihatdata.php">Lihat Data</a></li>
				<li><a href="tambah.php">Tambah Data</a></li><br>
			</ul>
		</nav>
			<br><br><br><br><br><br><br>
		</div><br>
		<?php include "koneksi.php";?>
        <fieldset id="border-biru">
		<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Tambah Data</h2>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Tambah Data Rincian Produk</legend><br>
            <form action="" method="post" enctype="multipart/form-data" style="margin-left: 10%;">
                <table>
                <tr>
                    <td>Id Produk</td>
                    <td>:</td>
                    <td><input type="text" name="produk_id"></td>
                </tr>
                <tr>
                    <td>Gambar Produk</td>
                    <td>:</td>
                    <td><input type="file" name="gambar_produk"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type="text" name="nama_produk"></td>
                </tr>
                <tr>
                    <td>Id Merk</td>
                    <td>:</td>
                    <td><input type="text" name="merk_id"></td>
                </tr>
                <tr>
                    <td>Id Bahan</td>
                    <td>:</td>
                    <td><input type="text" name="bahan_id"></td>
                </tr>
                <tr>
                    <td>Nama Toko</td>
                    <td>:</td>
                    <td><input type="text" name="nama_toko"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="int" name="harga"></td>
                </tr>
                <tr>
                    <td>Id Kota Asal</td>
                    <td>:</td>
                    <td><input type="int" name="asal_id"></td>
                    
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td><input type="text" name="rating"></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td>:</td>
                    <td><input type="text" name="link"></td>
                </tr>
                <tr>
                    <td>Penjelasan</td>
                    <td>:</td>
                    <td><input type="text" name="penjelasan"></td>
                </tr>
                <tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambahRP" value="Tambah"> <input type="reset" name="resetRP" value="Reset"></td>
			    </tr>
                </table>
            </form>
        <?php
		$produk_id = @$_POST['produk_id'];
		//upload gambar
        $sumber = @$_FILES['gambar_produk']['tmp_name'];
        $target = 'img/';
        $nama_gambar = @$_FILES['gambar_produk']['name'];
		//
        $nama_produk = @$_POST['nama_produk'];
		$merk_id = @$_POST['merk_id'];
		$bahan_id = @$_POST['bahan_id'];
		$nama_toko = @$_POST['nama_toko'];
		$harga = @$_POST['harga'];
        $asal_id = @$_POST['asal_id'];
        $rating = @$_POST['rating'];
        $link = @$_POST['link'];
        $penjelasan = @$_POST['penjelasan'];
        
		$tambah_produk = @$_POST['tambahRP'];
		if($tambah_produk){
			if ($produk_id=="" || $nama_gambar=="" || $nama_produk=="" || $merk_id=="" || $bahan_id=="" || $nama_toko=="" || $harga=="" || $asal_id=="" || $rating=="" || $link=="" || $penjelasan=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				$pindah= move_uploaded_file($sumber, $target.$nama_gambar);
                if($pindah){
                    mysqli_query($koneksi, "insert into rincian_produk values('$produk_id', 
                    '$target$nama_gambar', '$nama_produk', '$merk_id', '$bahan_id', '$harga', 
                    '$nama_toko', '$asal_id', '$rating', '$link', '$penjelasan')") or die(mysql_error());
                    ?>
                    <script type="text/javascript">
                        alert("Tambah Data Produk Berhasil");
                        window.location.replace("http://localhost/KatalogMukenah/index.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert("Gambar Gagal Diupload");
                    </script>
                    <?php
                }
			}
		}
	?>
        </fieldset><br><br><br>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Tambah Data Kota Asal</legend><br>
            <form action="" method="post" style="margin-left: 10%;">
                <table>
                    <tr>
                        <td>Id Kota</td>
                        <td>:</td>
                        <td><input type="int" name="asal_id"></td>
                    </tr>
                    <tr>
                        <td>Nama Kota</td>
                        <td>:</td>
                        <td><input type="text" name="kota_asal"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Tambah"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
            </form>
            <?php
		$asal_id = @$_POST['asal_id'];
		$kota_asal = @$_POST['kota_asal'];
		
		$tambah_kt = @$_POST['tambahK'];
		if($tambah_kt){
			if ($asal_id=="" || $kota_asal=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				    mysqli_query($koneksi, "insert into asal values('$asal_id', '$kota_asal')") or die(mysql_error());
                    ?>
                    <script type="text/javascript">
                        alert("Tambah Data Kota Berhasil");
                        window.location.replace("http://localhost/KatalogMukenah/lihatdata.php");
                    </script>
                    <?php
            }
		}
	?>
        </fieldset><br><br><br>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Tambah Data Merk Mukenah</legend><br>
            <form action="" method="post" style="margin-left: 10%;">
                <table>
                    <tr>
                        <td>Id Merk</td>
                        <td>:</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>Merk Mukenah</td>
                        <td>:</td>
                        <td><input type="text" name="merk_nama"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahM" value="Tambah"> <input type="reset" name="resetM" value="Reset"></td>
                    </tr>
                </table>
            </form>
            <?php
		$id_merk = @$_POST['id'];
		$merk_nama = @$_POST['merk_nama'];
		
		$tambah_mk = @$_POST['tambahM'];
		if($tambah_mk){
			if ($id_merk=="" || $merk_nama=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				    mysqli_query($koneksi, "insert into merk_mukenah values('$id_merk', '$merk_nama')") or die(mysql_error());
                    ?>
                    <script type="text/javascript">
                        alert("Tambah Data Merk Berhasil");
                        window.location.replace("http://localhost/KatalogMukenah/lihatdata.php");
                    </script>
                    <?php
            }
		}
	?>
        </fieldset><br><br><br>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Tambah Data Bahan Mukenah</legend><br>
            <form action="" method="post" style="margin-left: 10%;">
                <table>
                    <tr>
                        <td>Id Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="id_bahan"></td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="bahan"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><input type="text" name="keterangan"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahKet" value="Tambah"> <input type="reset" name="resetKet" value="Reset"></td>
                    </tr>
                </table> 
            </form>
            <?php
		$id_bahan = @$_POST['id_bahan'];
		$bahan = @$_POST['bahan'];
		$keterangan = @$_POST['keterangan'];
		
		$tambah_mk = @$_POST['tambahKet'];
		if($tambah_mk){
			if ($id_bahan=="" || $bahan=="" || $keterangan=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				    mysqli_query($koneksi, "insert into bahan_mukenah values('$id_bahan', '$bahan', '$keterangan')") or die(mysql_error());
                    ?>
                    <script type="text/javascript">
                        alert("Tambah Data Bahan Mukenah Berhasil");
                        window.location.replace("http://localhost/KatalogMukenah/lihatdata.php");
                    </script>
                    <?php
            }
		}
	?>
        </fieldset><br>
    </fieldset>		
	</body>
</html>