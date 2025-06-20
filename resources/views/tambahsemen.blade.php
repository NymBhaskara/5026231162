@extends('template')



@section('content')
	<h3>Data Semen</h3>

	<a href="/semen" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/semen/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="merksemen">Merk Semen</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merksemen" name="merksemen"
                       placeholder="Masukkan Merk" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="hargasemen">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargasemen" name="hargasemen"
                       placeholder="Masukkan Harga" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="tersedia">
                <input type="checkbox" name="tersedia"> Stok Tersedia
            </label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="berat">Berat</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="berat" name="berat"
                   placeholder="Masukkan Berat" step="any" required>
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
@endsection
