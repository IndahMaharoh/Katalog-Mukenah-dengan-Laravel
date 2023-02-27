@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Lihat Data</h2>
		<fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Lihat Data Kota Asal</legend><br>
			<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
    	<th>Id Kota</th>
        <th>Nama Kota</th>
        <th>Opsi</th>
        </tr>
        @foreach($kota as $k)       
        <tr align="center">
		<td>{{ $k->asal_id }}</td>
        <td>{{ $k->kota_asal }}</td>
        <td><a href="/kota/{{ $k->asal_id }}"><button>Edit</button></a>
        <a href="/HDKota/{{$k->asal_id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><button>Hapus</button></a>
		</tr>
    	@endforeach
		</table>
		</fieldset><br><br><br>
		@endsection