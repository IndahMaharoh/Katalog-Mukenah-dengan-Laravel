
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Lihat Data</h2>
		<fieldset style="margin-left: 8%; margin-right: 8%;">
		<legend style="background-color: rgb(255, 97, 179);">Lihat Data Bahan Mukenah</legend><br>
			<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
			<th>Id Bahan</th>
			<th>Bahan Mukenah</th>
			<th>Keterangan</th>
			<th>Opsi</th>
        </tr>
        <?php $__currentLoopData = $bm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
        <td><?php echo e($b->bahan_id); ?></td>
        <td><?php echo e($b->bahan); ?></td>
        <td><?php echo e($b->keterangan); ?></td>
        <td><a href="/bahan/<?php echo e($b->bahan_id); ?>"><button>Edit</button></a>
				<a href="/HDBahan/<?php echo e($b->bahan_id); ?>"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><button>Hapus</button></a>
			</td>
		</tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	</fieldset><br><br><br>
<?php $__env->stopSection(); ?>
       
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/bahan_mukenah/bm.blade.php ENDPATH**/ ?>