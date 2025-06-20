@extends('template')



@section('content')
	<h3>Data Karyawan</h3>

    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Data</a>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th></th>
		</tr>
		@foreach($newkaryawan as $nk)
		<tr>
			<td>{{ $nk->NIP }}</td>
			<td>{{ $nk->nama }}</td>
			<td>{{ $nk->pangkat }}</td>
			<td>{{ number_format($nk->gaji, 0, ',', '.') }}</td>
			<td>
				<a href="/eas/hapus/{{ $nk->NIP }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus NIP {{ $nk->NIP }}?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
