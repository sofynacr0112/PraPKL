<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>
    Data Siswa
    </legend>

    @foreach ($siswa as $murid)
    id : {{$murid['id']}}
    nama : {{$murid['nama']}}
    umur : {{$murid['umur']}}

    status:
    @if ($murid['umur']>=17)
    anda berhak mendapat sim
    @else
    anda belum berhak mendapat sim
    @endif
    <br>

    kelas : {{$murid['kelas']}}
    daftar mata pelajaran :
    @foreach ($murid['mapel'] as $mapel)
    <li>{{$mapel}}</li>
    @endforeach
    <hr>
    @endforeach
    </fieldset>
</body>
</html>