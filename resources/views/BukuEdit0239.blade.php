<form action="{{ url('Buku0239/' . $Buku0239->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Id: <input type="text" name="id" value="{{ $Buku0239->id }}"><br>
    Nama Pasien: <input type="text" name="judul" value="{{ $Buku0239->judul }}"><br>
    Alamat: <input type="text" name="tahun_terbit" value="{{ $Buku0239->tahun_terbit }}"><br>
    <button type="submit">Simpan</button>
</form>