@extends('layouts.main')
@section('tampilan')
		<h2 align="center"; style="font-family: Berlin Sans FB; font-size: 30px;">Mukenah Berdasarkan Harga</h2>
		<table align="center" border="2px; solid #043b5c;" style= "border-collapse: collapse; ">
		<tr style="background-color: rgb(255, 123, 123) ;">
			<th>Id Produk</th>
			<th>Gambar Produk</th>
			<th>Nama Produk</th>
			<th>Id Merk</th>
			<th>Id Bahan</th>
			<th>Nama Toko</th>
			<th>Harga</th>
			<th>Kota Asal</th>
			<th>Rating</th>
			<th>Link</th>
			<th>Keterangan Bahan</th>
			<th>Penjelasan</th>
			<th>Opsi</th>
		</tr>
		@foreach($rp as $r)    
        <tr align="center">
		<td>{{ $r->produk_id }}</td>
        <td><img src="{{ $r->gambar_produk }}" width="120px" height="200px"></td>
		<td>{{ $r->nama_produk }}</td>
		<td>{{ $r->merk_nama }}</td>
		<td>{{ $r->bahan }}</td>
		<td>{{ $r->nama_toko }}</td>
		<td>{{ $r->harga }}</td>
		<td>{{ $r->kota_asal }}</td>
		<td>{{ $r->rating }}</td>
		<td><a href="{{$r->link }}";> link </a></td>
		<td>{{ $r->keterangan }}</td>
		<td>{{ $r->penjelasan }}</td>
		<td><a href="/rp/{{ $r->produk_id }}/edit"><button>Edit</button></a>
        <a href="/rp/hapus/{{$r->produk_id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><button>Hapus</button></a>
	</td>
		</tr>
		@endforeach
</table>
@endsection