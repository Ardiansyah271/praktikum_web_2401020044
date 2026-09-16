<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP - Pertemuan 2</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 400px; }
        h2 { margin-top: 0; }
        ul { padding-left: 20px; }
    </style>
</head>
<body>

    <div class="card">
        <h2>Latihan PHP Laravel</h2>
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>NIM:</strong> {{ $nim }}</p>

        <h3>Daftar Nilai:</h3>
        <ul>
            @foreach($nilaiMatkul as $nilai)
                <li>Nilai: {{ $nilai }}</li>
            @endforeach
        </ul>

        <p><strong>Rata-Rata Nilai:</strong> {{ number_format($rataRata, 2) }}</p>
        <p><strong>Status Kelulusan:</strong> {{ $status }}</p>
    </div>

</body>
</html>