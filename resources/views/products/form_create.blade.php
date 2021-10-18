@extends('header')

@section('content')
<form action="" method="POST">
@csrf
<div class="row mt-5 mx-5">
    <div class="md-col-10">
        <div class="card p-3">
            <div class="card-body">
                <div class="card-title fs-3 fw-bold mb-4">
                    Input Data Barang
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nama_product" id="floatingInput">
                    <label for="floatingInput">Nama Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="jenis_product" id="floatingInput">
                    <label for="floatingInput">Jenis Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="harga" id="floatingInput">
                    <label for="floatingInput">Harga Satuan (Rp.)</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="text" class="form-control" name="stok" id="floatingInput" >
                    <label for="floatingInput">Stok Barang</label>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto mb-4">
                    <input class="btn btn-primary btn-lg" type="submit" value="Update Data">
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection