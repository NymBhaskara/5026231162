@extends('template')



@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 0px;
        background-color: #f5f5f5;
    }

    .counter {
        background-color: #dff0d8;
        color: #3c763d;
        border-radius: 5px;
        padding: 10px;
        font-size: 20px;
        width: fit-content;
        margin: auto;
        border: 1px solid #c3e6cb;
        position: relative;
    }

</style>


<div class="counter m-2">
    Halaman Ini Telah Dikunjungi {{ $jumlah }} Kali
</div>
@endsection
