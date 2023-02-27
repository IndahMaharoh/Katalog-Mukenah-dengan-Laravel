@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Tambah Data</h2>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Tambah Data Rincian Produk</legend><br>
        <form action="/" method="POST" style="margin-left: 10%;">
@csrf               
<table>
<tr>
                    <td>Id Produk</td>
                    <td>:</td>
                    <td><input type="text" name="produk_id"></td>
                </tr>
                <tr>
                    <td>Gambar Produk</td>
                    <td>:</td>
                    <td><input type="file" name="gambar_produk" value="img/gambar_produk"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type="text" name="nama_produk"></td>
                </tr>
                <tr>
                    <td>Id Merk</td>
                    <td>:</td>
                    <td><input type="text" name="merk_id"></td>
                </tr>
                <tr>
                    <td>Id Bahan</td>
                    <td>:</td>
                    <td><input type="text" name="bahan_id"></td>
                </tr>
                <tr>
                    <td>Nama Toko</td>
                    <td>:</td>
                    <td><input type="text" name="nama_toko"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="int" name="harga"></td>
                </tr>
                <tr>
                    <td>Id Kota Asal</td>
                    <td>:</td>
                    <td><input type="int" name="asal_id"></td>
                    
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td><input type="text" name="rating"></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td>:</td>
                    <td><input type="text" name="link"></td>
                </tr>
                <tr>
                    <td>Penjelasan</td>
                    <td>:</td>
                    <td><input type="text" name="penjelasan"></td>
                </tr>
                <tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambahRP" value="Tambah"> <input type="reset" name="resetRP" value="Reset"></td>
			    </tr>
                </table>
            </form>
            </fieldset><br><br><br>
        <?php 
        $sumber = @$_FILES['gambar_produk']['tmp_name'];
        $target = 'img/';
        $nama_gambar = @$_FILES['gambar_produk']['name'];
        ?>
@endsection