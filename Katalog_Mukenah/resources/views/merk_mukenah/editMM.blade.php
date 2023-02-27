@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Edit Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Edit Data Merk Mukenah</legend><br>
@foreach($mm as $m)   
<form action="/merk/update" method="POST" style="margin-left: 10%;">
@csrf               
<table>
                    <tr>
                        <td>Id Merk</td>
                        <td>:</td>
                        <td><input type="text" name="merk_id" placeholder="masukan angka" value="{{ $m->merk_id }}" required=""></td>
                    </tr>
                    <tr>
                        <td>Merk</td>
                        <td>:</td>
                        <td><input type="text" name="merk_nama" placeholder="masukan nama kota" value="{{ $m->merk_nama }}" required=""></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tambahK" value="Update"> <input type="reset" name="resetK" value="Reset"></td>
                    </tr>
                </table>
                @endforeach  
            </form><br><br><br>
            @endsection