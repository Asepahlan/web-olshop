<h2> Halaman Member</h2>
<form action="{{ Route('nama') }}" method="post">
    @csrf
    <input type="text" name="cari" id="">
    <input type="submit" value="CARI" name="bCari">
</form>
<a href="{{ url('member/add') }}"><button>Tambah data</button></a>
<table border=1>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Hp</th>
        <th>Aksi</th>
    </tr>
    @foreach ($member as $key=>$value )
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->email }}</td>
        <td> {{ $value->nohp }} </td>
        <td>
            <a href="{{ url('member/edit'). '/' .$value->id }}"><button>Edit</button></a>
            <a href="{{ url('member/delete'). '/' .$value->id }}"><button>Hapus</button></a>
        </td>
    </tr>
    @endforeach
</table>

{{ Session::get('pesan') }}

