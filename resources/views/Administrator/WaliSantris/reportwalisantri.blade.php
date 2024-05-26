<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wali Santri Report</title>
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Wali Santri Report</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $waliSantri)
                    <tr>
                        <td>{{ $waliSantri->id }}</td>
                        <td>{{ $waliSantri->nama }}</td>
                        <td>{{ $waliSantri->alamat }}</td>
                        <td>{{ $waliSantri->no_hp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
