<!DOCTYPE html>
<html>
<head>
    <title>Input Lagu</title>
</head>
<body>
    <h2>Form Input Lagu</h2>
    <form action="{{ route('songs-create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Artis:</label><br>
        <input type="text" name="artist" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="category" required><br><br>

        <label>Album:</label><br>
        <input type="text" name="album"><br><br>

        <label>File Lagu (mp3):</label><br>
        <input type="file" name="file"><br><br>

        <button type="submit">Simpan Lagu</button>
    </form>
    <br>
    <a href="{{ route('view-home')}}">Lihat Daftar Lagu</a>
</body>
</html>
