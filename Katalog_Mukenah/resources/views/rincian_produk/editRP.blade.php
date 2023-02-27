@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;"> Edit Data</h2>
        <fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Edit Data Rincian Produk</legend><br>
@foreach($rp as $r)
            <form action="/rp/update" method="POST" style="margin-left: 10%;">
@csrf               
<table>
<tr>
                    <td>Id Produk</td>
                    <td>:</td>
                    <td><input type="text" name="produk_id" value="{{ $r->produk_id }}"></td>
                </tr>
                <tr>
                    <td>Gambar Produk</td>
                    <td>:</td>
                    <td><input type="file" name="gambar_produk" value="{{ $r->gambar_produk }}"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type="text" name="nama_produk" value="{{ $r->nama_produk }}"></td>
                </tr>
                <tr>
                    <td>Id Merk</td>
                    <td>:</td>
                    <td><input type="text" name="merk_id" value="{{ $r->merk_id }}"></td>
                </tr>
                <tr>
                    <td>Id Bahan</td>
                    <td>:</td>
                    <td><input type="text" name="bahan_id" value="{{ $r->bahan_id }}"></td>
                </tr>
                <tr>
                    <td>Nama Toko</td>
                    <td>:</td>
                    <td><input type="text" name="nama_toko" value="{{ $r->nama_toko }}"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="int" name="harga" value="{{ $r->harga }}"></td>
                </tr>
                <tr>
                    <td>Id Kota Asal</td>
                    <td>:</td>
                    <td><input type="int" name="asal_id" value="{{ $r->asal_id }}"></td>
                    
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td><input type="text" name="rating" value="{{ $r->rating }}"></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td>:</td>
                    <td><input type="text" name="link " value="{{ $r->link }}"></td>
                </tr>
                <tr>
                    <td>Penjelasan</td>
                    <td>:</td>
                    <td><input type="text" name="penjelasan" value="{{ $r->penjelasan }}"></td>
                </tr>
                <tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambahRP" value="Update"> <input type="reset" name="resetRP" value="Reset"></td>
			    </tr>
                </table>
            </form>
            @endforeach
            </fieldset><br><br><br>
        <?php 
        $sumber = @$_FILES['gambar_produk']['tmp_name'];
        $target = 'img/';
        $nama_gambar = @$_FILES['gambar_produk']['name'];
        ?>
@endsection