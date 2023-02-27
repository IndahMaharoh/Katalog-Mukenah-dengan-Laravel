
<?php $__env->startSection('tampilan'); ?>
		
		<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Lihat Data</h2>
		<fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Lihat Data Kota Asal</legend><br>
			<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
    	<th>Id Kota</th>
        <th>Nama Kota</th>
        <th>Opsi</th>
        </tr>
        <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
        <tr align="center">
		<td><?php echo e($k->asal_id); ?></td>
        <td><?php echo e($k->kota_asal); ?></td>
        <td><a href="/kota/<?php echo e($k->asal_id); ?>/edit">Edit</a>
        <a href="/kota/hapus/<?php echo e($k->asal_id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
		</td>
		</tr>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
		</fieldset><br><br><br>

		<fieldset style="margin-left: 8%; margin-right: 8%;">
		<legend style="background-color: rgb(255, 97, 179);">Lihat Data Merk</legend><br>
			<?php echo $__env->make('merk_mukenah.mm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			
		</fieldset><br><br><br>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/lihatdata.blade.php ENDPATH**/ ?>