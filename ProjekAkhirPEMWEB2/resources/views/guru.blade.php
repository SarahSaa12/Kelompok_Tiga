<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    </head>
    <body class="login" style="background-image: url('images/loginPilihan.png')">
        <div class="container lg guru">
            <h1 style="color:#439A97;"><b>Form Data Guru</b></h1>
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="form">
                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label><br>
                                <input class="kotak" type="text" class="form-control @error('email') is-invalid @enderror" id="nama" name="nama" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="NIP" class="form-label">NIP</label><br>
                                <input class="kotak" type="text" class="form-control @error('email') is-invalid @enderror" id="NIP" name="NIP" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>     
                            <div class="mb-3">
                                <label for="JK" class="form-label">Jenis Kelamin</label><br>
                                <input class="kotak" type="text" class="form-control @error('email') is-invalid @enderror" id="JK" name="JK" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat<br>
                                <input class="kotak" type="text" class="form-control @error('email') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="NoHP" class="form-label">No HP<br>
                                <input class="kotak" type="text" class="form-control @error('email') is-invalid @enderror" id="NoHP" name="NoHP" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>                
                            <div class="row text-end">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
