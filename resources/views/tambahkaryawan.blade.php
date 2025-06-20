@extends('template')



@section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="kodepegawai">Kode Pegawai</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kodepegawai" name="kodepegawai"
                       placeholder="Masukkan Kode Pegawai" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="namalengkap">Nama Lengkap</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="namalengkap" name="namalengkap"
                       placeholder="Masukkan Nama Lengkap" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="namalengkap">Divisi</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="divisi" name="divisi"
                       placeholder="Masukkan Divisi" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="departemen">Departemen</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" id="departemen" name="departemen"
                   placeholder="Masukkan Departemen" step="any" required>
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan">
	</form>
@endsection
