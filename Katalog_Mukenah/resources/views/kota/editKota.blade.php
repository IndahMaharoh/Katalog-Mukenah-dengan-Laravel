@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Edit Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
<legend style="background-color: rgb(255, 97, 179);">Edit Data Kota Asal</legend><br>
@foreach($kota as $k)   
<form action="/kota/update" method="POST" style="margin-left: 10%;">
@csrf               
<table>
                    <tr>
                        <td>Id Kota</td>
                        <td>:</td>
                        <td><input type="int" name="asal_id" placeholder="masukan angka" value="{{ $k->asal_id }}" required=""></td>
                    </tr>
                    <tr>
                        <td>Nama Kota</td>
                        <td>:</td>
                        <td><input type="text" name="kota_asal" placeholder="masukan nama kota" value="{{ $k->kota_asal }}" required=""></td>
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