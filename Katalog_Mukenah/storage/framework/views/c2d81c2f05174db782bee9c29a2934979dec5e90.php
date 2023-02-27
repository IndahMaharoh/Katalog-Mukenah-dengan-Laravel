<!DOCTYPE html>
<html>
	<head>
		<title>Katalog Mukenah</title>
		<link type="text/css" rel="stylesheet" href="tampilan.css">
	</head>
	<body class ="batas"; style="background-color: #fbc093; font-family: Kristen ITC; font-size: 12px;">
		<div class="batas-atas huruf "id="border-hitam" style="background-color: #bae4e5;">			
			<h1>Katalog Mukenah</h1>
		</div>
		<div class="background-img" id="border-biru" style="font-family: Times New Roman;">
			<nav><ul>
			<li><a href="/">Beranda</a></li>
				<li><a href="/about">Tentang Kami</a></li>
				<li><a href="/populer">Populer</a></li>
				<li><a href="/harga">Harga</a></li>
				<li><a href="/lihatdata" >Lihat Data</a>
				 <ul class="dropdown">
					<li><a href="/LDKota">Data Kota</a></li>
					<li><a href="/LDMerk">Data Merk </a></li>
					<li><a href="/LDBahan">Data Bahan </a></li>
				</ul>
				</li>
				<li><a href="/tambah" >Tambah Data</a>
				<ul class="dropdown">
					<li><a href="/TDRP">Data Rincian Produk </a></li>
					<li><a href="/TDKota">Data Kota</a></li>
					<li><a href="/TDMerk">Data Merk </a></li>
					<li><a href="/TDBahan">Data Bahan </a></li>
				</ul>
				</li><br>
			</ul>
		</nav>
			<br><br><br><br><br><br><br>
		</div><br>
        <fieldset id="border-biru">
		
        <?php echo $__env->yieldContent('tampilan'); ?>
</fieldset>
        </body>
</html><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/layouts/main.blade.php ENDPATH**/ ?>