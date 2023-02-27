
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Edit Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Edit Data Bahan Mukenah</legend><br>
<?php $__currentLoopData = $bm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
<form action="/bahan/update" method="POST" style="margin-left: 10%;">
<?php echo csrf_field(); ?>             
<table>
                    <tr>
                        <td>Id Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="bahan_id" placeholder="masukan bm(3digit angka)" value="<?php echo e($b->bahan_id); ?>" required=""></td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="bahan" placeholder="masukan bahan mukenah" value="<?php echo e($b->bahan); ?>" required=""></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><input type="text" name="keterangan" placeholder="masukan sifat bahan" value="<?php echo e($b->keterangan); ?>" required=""></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Update"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </form>
            </fieldset><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/bahan_mukenah/editBM.blade.php ENDPATH**/ ?>