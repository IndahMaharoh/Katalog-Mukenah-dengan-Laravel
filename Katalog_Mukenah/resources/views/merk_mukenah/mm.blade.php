@extends('layouts.main')
@section('tampilan')
<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Lihat Data</h2>
<fieldset style="margin-left: 8%; margin-right: 8%;">
            <legend style="background-color: rgb(255, 97, 179);">Lihat Data Merk Mukenah</legend><br>
			<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
        <th>Id Merk</th>
        <th>Merk Mukenah</th>
        <th>Opsi</th>
        </tr>
        @foreach($mm as $m)       
        <tr align="center">
        <td>{{ $m->merk_id }}</td>
        <td>{{ $m->merk_nama }}</td>
        <td><a href="/merk/{{ $m->merk_id }}"><button>Edit</button></a>
        <a href="/HDMerk/{{$m->merk_id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><button>Hapus</button></a>
    </td>
	</tr>
    @endforeach
</table>
</fieldset><br><br><br>
@endsection