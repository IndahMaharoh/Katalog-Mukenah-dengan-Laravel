
<?php $__env->startSection('tampilan'); ?>
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;"> Edit Data</h2>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Edit Data Rincian Produk</legend><br>
<?php $__currentLoopData = $rp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/rp/update" method="POST" style="margin-left: 10%;">
<?php echo csrf_field(); ?>               
<table>
<tr>
                    <td>Id Produk</td>
                    <td>:</td>
                    <td><input type="text" name="produk_id" value="<?php echo e($r->produk_id); ?>"></td>
                </tr>
                <tr>
                    <td>Gambar Produk</td>
                    <td>:</td>
                    <td><input type="file" name="gambar_produk" value="<?php echo e($r->gambar_produk); ?>"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type="text" name="nama_produk" value="<?php echo e($r->nama_produk); ?>"></td>
                </tr>
                <tr>
                    <td>Id Merk</td>
                    <td>:</td>
                    <td><input type="text" name="merk_id" value="<?php echo e($r->merk_id); ?>"></td>
                </tr>
                <tr>
                    <td>Id Bahan</td>
                    <td>:</td>
                    <td><input type="text" name="bahan_id" value="<?php echo e($r->bahan_id); ?>"></td>
                </tr>
                <tr>
                    <td>Nama Toko</td>
                    <td>:</td>
                    <td><input type="text" name="nama_toko" value="<?php echo e($r->nama_toko); ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="int" name="harga" value="<?php echo e($r->harga); ?>"></td>
                </tr>
                <tr>
                    <td>Id Kota Asal</td>
                    <td>:</td>
                    <td><input type="int" name="asal_id" value="<?php echo e($r->asal_id); ?>"></td>
                    
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td><input type="text" name="rating" value="<?php echo e($r->rating); ?>"></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td>:</td>
                    <td><input type="text" name="link " value="<?php echo e($r->link); ?>"></td>
                </tr>
                <tr>
                    <td>Penjelasan</td>
                    <td>:</td>
                    <td><input type="text" name="penjelasan" value="<?php echo e($r->penjelasan); ?>"></td>
                </tr>
                <tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambahRP" value="Update"> <input type="reset" name="resetRP" value="Reset"></td>
			    </tr>
                </table>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </fieldset><br><br><br>
        <?php 
        $sumber = @$_FILES['gambar_produk']['tmp_name'];
        $target = 'img/';
        $nama_gambar = @$_FILES['gambar_produk']['name'];
        ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/rincian_produk/editRP.blade.php ENDPATH**/ ?>