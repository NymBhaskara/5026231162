@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

    {{-- action mengarah ke penggaris/store untuk dilakukan routing --}}
	<form action="/keranjangbelanja/storekeranjangbelanja" method="post" class="form-horizontal">
        <!-- form-horizontal untuk membuat form menjadi horizontal, jadi labelnya di kiri, inputnya di kanan -->
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="KodeBarang">
                Kode Barang
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="KodeBarang"
                   placeholder="Masukkan Kode Barang"
                   name="KodeBarang" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Jumlah">
                Jumlah
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="Jumlah"
                   placeholder="Masukkan Jumlah Barang"
                   name="Jumlah" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Harga">
                Harga
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="Harga"
                   placeholder="Masukkan Harga Barang"
                   name="Harga" required="required">
                </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
