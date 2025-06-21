<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lagu</title>
</head>
<body>
    <h2>Daftar Lagu</h2>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Artis</th>
            <th>Kategori</th>
            <th>Album</th>
            <th>File</th>
        </tr>
        @foreach($songs as $song)
            <tr>
                <td>{{ $song->title }}</td>
                <td>{{ $song->artist }}</td>
                <td>{{ $song->category }}</td>
                <td>{{ $song->album }}</td>
                <td>
                    @if($song->file_url)
                        <audio controls>
                            <source src="{{ $song->file_url }}" type="audio/mpeg">
                            Browser tidak mendukung audio
                        </audio>
                    @else
                        Tidak ada file
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ route('songs-create') }}">Tambah Lagu Baru</a>
</body>
</html>
