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
    Daftar Siaran
    </legend>

    @foreach ($tv as $siaran)
    stasiun : {{$siaran['stasiun']}} <br>
    jam tayang : {{$siaran['jam_tayang']}} <br>
    program acara : {{$siaran['siaran']}} <br>
    tanggal : {{$siaran['tanggal']}} <br>

    <hr>
    @endforeach
    </fieldset>


</body>
</html>    
