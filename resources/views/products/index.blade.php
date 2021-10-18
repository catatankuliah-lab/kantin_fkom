<fieldset>
    <legend>List Products</legend>
    <table border="1">
        <tr>
            <td>No</td>
            <td>ID</td>
            <td>Nama Produk</td>
            <td>Jenis Produk</td>
            <td>Harga Satuan</td>
            <td>Stok Produk</td>
            <td colspan="2">Action</td>
        </tr>
        @php
            $i=1;
        @endphp
        @foreach ($products as $product)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nama_product}}</td>
            <td>{{ $product->jenis_product}}</td>
            <td>{{ $product->harga}}</td>
            <td>{{ $product->stok}}</td>
            <td>
                <form action="/products/{{ $product->id }}/edit" method="GET">
                    <input type="submit" value="Edit Produk">
                </form>
            </td>
            <td>
                <form action="/products/{{ $product->id }}/delete" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete Produk">
                </form>
            </td>
        </tr>
        @php
            $i++;
        @endphp
        @endforeach
    </table>
</fieldset>