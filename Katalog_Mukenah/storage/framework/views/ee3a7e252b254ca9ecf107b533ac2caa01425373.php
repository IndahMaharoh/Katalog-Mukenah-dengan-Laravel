
<?php $__env->startSection('tampilan'); ?>
		<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Daftar Mukenah</h2>
		<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
			<th>Id Produk</th>
			<th>Gambar Produk</th>
			<th>Nama Produk</th>
			<th>Merk</th>
			<th>Bahan</th>
			<th>Nama Toko</th>
			<th>Harga</th>
			<th>Kota Asal</th>
			<th>Rating</th>
			<th>Link</th>
			<th>Keterangan Bahan</th>
			<th>Penjelasan</th>
			<th>Opsi</th>
		</tr>

	</table>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/index.blade.php ENDPATH**/ ?>