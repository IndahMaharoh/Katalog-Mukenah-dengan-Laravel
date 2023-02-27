
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Edit Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Edit Data Merk Mukenah</legend><br>
<?php $__currentLoopData = $mm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
<form action="/merk/update" method="POST" style="margin-left: 10%;">
<?php echo csrf_field(); ?>               
<table>
                    <tr>
                        <td>Id Merk</td>
                        <td>:</td>
                        <td><input type="text" name="merk_id" placeholder="masukan angka" value="<?php echo e($m->merk_id); ?>" required=""></td>
                    </tr>
                    <tr>
                        <td>Merk</td>
                        <td>:</td>
                        <td><input type="text" name="merk_nama" placeholder="masukan nama kota" value="<?php echo e($m->merk_nama); ?>" required=""></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Update"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </form><br><br><br>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/merk_mukenah/editMM.blade.php ENDPATH**/ ?>