<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/my-style.css" rel="stylesheet">
     <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Mahasiswa</title>
</head>
<body>
    <br><hr>
    <h2 style="text-align: center">Ini View Mahasiswa dari web.php</h2>
    <h1>Daftar Mahasiswa</h1>
     {{ date(now()) }}{{-- artinya echo --}}

    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{!! $nama !!}</h1>
        <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{!! $nilai !!}</h1>
    </div>
<div class="container text-center  mt-3 pt-3 bg-white">
    {{-- <div class="alert alert-secondary d-inline-block">
        <?php
            // if(($nilai >= 0) && ($nilai <= 50)){
            //     echo "Maaf anda tidak lulus";
            // }
            // elseif (($nilai > 50) && ($nilai <= 100)) {
            //     echo "anda lulus";
            // }else {
            //     echo "nilai masukan salah";
            // }
        ?>
    </div> --}}
{{-- cara penulisan kode diatas dengan cara laravel --}}
@if (($nilai >= 0 ) && ( $nilai < 50))
    <div class="alert alert-danger d-inline-block">Maaf, Anda tidak Lulus</div>
@elseif (($nilai >= 50) && ($nilai <= 100))
    <div class="alert alert-success d-inline-block">Selamat, Anda Lulus</div>
@else
    <div class="alert alert-dark d-inline-block">Nilai tidak Valid</div>
@endif
</div>

<div class="container text-center mt-3 pt-3 bg-white">
    <p>FOR</p>
    @for ($i = 0; $i < 5; $i++)
    <div class="alert alert-info d-inline-block">
    Laravel {{ $i }}
    </div>
    @endfor
</div>
<div class="container text-center mt-3 pt-3 bg-white">
    <p>WHILE</p>
    <?php $i = 0; ?>
    @while($i < 5)
    <div class="alert alert-info d-inline-block">
        Laravel {{ $i }}
    </div>
    <?php $i++ ?>
    @endwhile
</div>

<div>
    Copyright © <?php echo date("Y"); ?> Duniailkom
    </div>
    <script src='/js/my-script.js'></script>
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
