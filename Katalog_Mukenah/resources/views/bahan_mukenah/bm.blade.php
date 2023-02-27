@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Lihat Data</h2>
		<fieldset style="margin-left: 8%; margin-right: 8%;">
		<legend style="background-color: rgb(255, 97, 179);">Lihat Data Bahan Mukenah</legend><br>
			<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
			<th>Id Bahan</th>
			<th>Bahan Mukenah</th>
			<th>Keterangan</th>
			<th>Opsi</th>
        </tr>
        @foreach($bm as $b)
		<tr align="center">
        <td>{{ $b->bahan_id }}</td>
        <td>{{ $b->bahan }}</td>
        <td>{{ $b->keterangan }}</td>
        <td><a href="/bahan/{{ $b->bahan_id }}"><button>Edit</button></a>
				<a href="/HDBahan/{{ $b->bahan_id }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><button>Hapus</button></a>
			</td>
		</tr>
        @endforeach
	</table>
	</fieldset><br><br><br>
@endsection
       