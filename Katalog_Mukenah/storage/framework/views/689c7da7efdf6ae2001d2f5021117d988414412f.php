
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Tambah Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Tambah Data Bahan Mukenah</legend><br>
<form action="/LDBahan" method="POST" style="margin-left: 10%;">
    <?php echo csrf_field(); ?>               
    <table>
                    <tr>
                        <td>Id Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="bahan_id" placeholder="masukan bm(3digit angka)"></td>
                    </tr>
                    <tr>
                        <td>Bahan Mukenah</td>
                        <td>:</td>
                        <td><input type="text" name="bahan" placeholder="masukan bahan mukenah"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><input type="text" name="keterangan" placeholder="masukan keterangan/sifat bahan"></td>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/bahan_mukenah/tambahBM.blade.php ENDPATH**/ ?>