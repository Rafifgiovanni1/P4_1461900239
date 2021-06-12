<form action="{{ route('Buku0239.store') }}" method="post">
    @csrf
    ID: <input type="text" name="id"><br>
    Judul Buku: <input type="text" name="judul"><br>
    Tahun Terbit: <input type="text" name="tahun_terbit"><br>
    <button type="submit">Simpan</button>
</form>