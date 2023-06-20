<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>    
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/pilihan.css') }}">
    </head>
    <body style="background-image: url('images/pilihan.png')">
        <div>
            <h1 class="h2" id="pil">Masuk Sebagai : </h1>
            <div class="div-2">
                <div class="grid-item">
                    <a class="ahome" href="./guru">
                    <div class="satu">GURU</div>
                    <div class="dua"><img src="images/guru.png" alt="Gambar_Guru"></div></a>
                </div>
                <div class="grid-item">
                    <a class="ahome" href="./siswa">
                    <div class="satu">SISWA</div>
                    <div class="dua"><img src="images/siswa.png" alt="Gambar_Siswa"></div></a>
                </div>
            </div>
        </div>          
    </body>
</html>