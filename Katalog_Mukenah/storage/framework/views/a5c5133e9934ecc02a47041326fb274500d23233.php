
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Tambah Data</h2>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Tambah Data Merk Mukenah</legend><br>
            <form action="/LDMerk" method="POST" style="margin-left: 10%;">            
    <?php echo csrf_field(); ?>               
    <table>
                    <tr>
                        <td>Id Merk</td>
                        <td>:</td>
                        <td><input type="text" name="merk_id" placeholder="masukan mk(3 digit angka)"></td>
                    </tr>
                    <tr>
                        <td>Merk Mukenah</td>
                        <td>:</td>
                        <td><input type="text" name="merk_nama" placeholder="masukan merk mukenah"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Tambah"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
                </form>         
        </fieldset><br><br><br>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/merk_mukenah/tambahMM.blade.php ENDPATH**/ ?>