@extends('header')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-10 mx-auto card">
                {{-- row buat judul konten --}}
                <div class="row mt-2 mb-2">

                    {{-- col buat title --}}
                    <div class="col-10 fs-2 fw-bold">List Product</div>

                    {{-- col buat tombol create --}}
                    <div class="col-2 mt-2 d-flex flex-row-reverse">
                        <form action="/products/create" method="GET"><button class="btn btn-success rounded-circle" type="submit"> + </button></form>
                    </div>

                </div>

                {{-- row buat isi konten --}}
                <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Jenis Produk</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Stok Produk</th>
                                    <th scope="col" class="text-center" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->nama_product }}</td>
                                    <td>{{ $product->jenis_product }}</td>
                                    <td>{{ $product->harga }}</td>
                                    <td>{{ $product->stok }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <form action="" method="GET">
                                                    <button class="btn btn-warning d-grid col-12 rounded-pill" type="submit">EDIT</button>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="" method="GET">
                                                    <button class="btn btn-danger d-grid col-12 rounded-pill" type="submit">DELETE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection