@extends('template')



@section('content')
	<h3>Edit Semen</h3>

	<a href="/semen" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($semen as $m)
	<form action="/semen/update/" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $m->ID }}">
        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="merksemen">Merk</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merksemen" name="merksemen"
                       placeholder="Masukkan Merk" required="required" value="{{ $m->merksemen }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="hargasemen">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargasemen" name="hargasemen"
                       placeholder="Masukkan Harga" required="required" value="{{ $m->hargasemen }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="tersedia">
                <input type="checkbox" name="tersedia" value="{{ $m->tersedia }}"> Stok Tersedia
            </label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="berat">Berat</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="berat" name="berat"
                   step="any" required="required" value="{{ $m->berat }}">
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
