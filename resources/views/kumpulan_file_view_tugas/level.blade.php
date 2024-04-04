<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Data Level Pengguna</h1>
    <table class=" border border-black border-spacing-2">
        <tr>
            <th class="border border-black p-2">ID</th>
            <th class="border border-black p-2">Kode Level</th>
            <th class="border border-black p-2">Nama Level</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td class="border border-black p-2">{{ $d->level_id }}</td>
            <td class="border border-black p-2">{{ $d->level_kode }}</td>
            <td class="border border-black p-2">{{ $d->level_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>