<a href="/tambah"> Tambah Kota</a>
<table>
    <tr>
        <th>Id Kota</th>
        <th>Nama Kota</th>
        <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
        <tr>
        <td><?php echo e($k->asal_id); ?></td>
        <td><?php echo e($k->kota_asal); ?></td>
        <td><a href="/kota/<?php echo e($k->asal_id); ?>/edit">Edit</a></td>
        <td><a href="/kota/hapus/<?php echo e($k->asal_id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm">Hapus</a></td>
	</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/kota.blade.php ENDPATH**/ ?>