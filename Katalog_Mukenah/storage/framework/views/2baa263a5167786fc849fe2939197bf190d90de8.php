
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Edit Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Edit Data Kota Asal</legend><br>
<?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
<form action="/kota/update" method="POST" style="margin-left: 10%;">
<?php echo csrf_field(); ?>               
<table>
                    <tr>
                        <td>Id Kota</td>
                        <td>:</td>
                        <td><input type="int" name="asal_id" placeholder="masukan angka" value="<?php echo e($k->asal_id); ?>" required=""></td>
                    </tr>
                    <tr>
                        <td>Nama Kota</td>
                        <td>:</td>
                        <td><input type="text" name="kota_asal" placeholder="masukan nama kota" value="<?php echo e($k->kota_asal); ?>" required=""></td>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/kota/editkota.blade.php ENDPATH**/ ?>