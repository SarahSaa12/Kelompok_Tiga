@section('container')

<!doctype html>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/crud-css.css') }}">
</head>
<body style="background-image: url('images/loginAwal.png')">
<div class="containerCrud">
    @yield('content')
</div>
    
</body>
</html>