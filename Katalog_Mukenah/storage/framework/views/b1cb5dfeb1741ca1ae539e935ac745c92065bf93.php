
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Lihat Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Lihat Data Merk Mukenah</legend><br>
			<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
        <th>Id Merk</th>
        <th>Merk Mukenah</th>
        <th>Opsi</th>
        </tr>
        <?php $__currentLoopData = $mm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
        <tr align="center">
        <td><?php echo e($m->merk_id); ?></td>
        <td><?php echo e($m->merk_nama); ?></td>
        <td><a href="/merk/<?php echo e($m->merk_id); ?>"><button>Edit</button></a>
        <a href="/HDMerk/<?php echo e($m->merk_id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><button>Hapus</button></a>
    </td>
	</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</fieldset><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/merk_mukenah/mm.blade.php ENDPATH**/ ?>