@extends('template')



@section('content')
	<h3>Data Semen</h3>

	<a href="/semen/tambah" class="btn btn-primary"> + Tambah Stok Semen Baru</a>
    <p>Cari Semen :</p>
    <form action="/semen/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Semen .." value="{{ old('cari') }}">
        <input type="submit" value="Cari" class="btn btn-info">
    </form>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk Semen</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($semen as $s)
		<tr>
			<td>{{ $s->merksemen }}</td>
			<td>{{ $s->hargasemen }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>{{ $s->berat }}</td>
			<td>
				<a href="/semen/edit/{{ $s->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/semen/hapus/{{ $s->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
