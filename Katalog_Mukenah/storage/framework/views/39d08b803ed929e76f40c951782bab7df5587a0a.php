
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
		<?php $__currentLoopData = $rp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
        <tr align="center">
		<td><?php echo e($r->produk_id); ?></td>
        <td><img src="<?php echo e($r->gambar_produk); ?>" width="120px" height="200px"></td>
		<td><?php echo e($r->nama_produk); ?></td>
		<td><?php echo e($r->merk_nama); ?></td>
		<td><?php echo e($r->bahan); ?></td>
		<td><?php echo e($r->nama_toko); ?></td>
		<td><?php echo e($r->harga); ?></td>
		<td><?php echo e($r->kota_asal); ?></td>
		<td><?php echo e($r->rating); ?></td>
		<td><a href="<?php echo e($r->link); ?>";> link </a></td>
		<td><?php echo e($r->keterangan); ?></td>
		<td><?php echo e($r->penjelasan); ?></td>
		<td><a href="/rp/<?php echo e($r->produk_id); ?>"><button>Edit</button></a>
        <a href="/HDrinc_pro/<?php echo e($r->produk_id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><button>Hapus</button></a>
	</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/rincian_produk/RP.blade.php ENDPATH**/ ?>