@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Edit Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Edit Data Bahan Mukenah</legend><br>
@foreach($bm as $b)   
<form action="/bahan/update" method="POST" style="margin-left: 10%;">
@csrf             
<table>
                    <tr>
                        <td>Id Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="bahan_id" placeholder="masukan bm(3digit angka)" value="{{ $b->bahan_id }}" required=""></td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td>:</td>
                        <td><input type="text" name="bahan" placeholder="masukan bahan mukenah" value="{{ $b->bahan }}" required=""></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><input type="text" name="keterangan" placeholder="masukan sifat bahan" value="{{ $b->keterangan }}" required=""></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Update"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
                @endforeach  
            </form>
            </fieldset><br><br><br>
@endsection