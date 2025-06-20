@extends('template')



@section('content')
	<h3>Data Karyawan</h3>

     <p>Cari Karyawan :</p>
    <form action="/karyawan/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
        <input type="submit" value="Cari" class="btn btn-info">
    </form>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th></th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ $k->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah</a>

@endsection
