<form action="{{ $action }}" method="post">
    @csrf
        <table>
            <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nm_produk" id="" value="{{ $nm_produk }}"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" id="" value="{{ $harga }}"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" id="" value="{{ $deskripsi }}"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="gambar" id="" value="{{ $gambar }}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SUBMIT" name="submit"></td>
        </tr>
        </table>

    </form>

