<form action="/kota/store" method="POST" style="margin-left: 10%;">
<?php echo csrf_field(); ?>               
<table>
                    <tr>
                        <td>Id Kota</td>
                        <td>:</td>
                        <td><input type="int" name="asal_id" placeholder="masukan angka"></td>
                    </tr>
                    <tr>
                        <td>Nama Kota</td>
                        <td>:</td>
                        <td><input type="text" name="kota_asal" placeholder="masukan nama kota"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Tambah"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
            </form><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/tambahKota.blade.php ENDPATH**/ ?>