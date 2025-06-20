@extends('template')



@section('content')
	<h3>Data Karyawan</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="NIP">NIP</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="NIP" name="NIP"
                       placeholder="Masukkan NIP" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Nama</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nama" name="nama"
                       placeholder="Masukkan Nama" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="pangkat">Pangkat</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="pangkat" name="pangkat"
                       placeholder="Masukkan Pangkat" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="gaji">Gaji</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="gaji" name="gaji"
                   placeholder="Masukkan Gaji" step="any" required>
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan">
	</form>
@endsection
