<h1>Edit Kota</h1>
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
            </form><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/editkota.blade.php ENDPATH**/ ?>