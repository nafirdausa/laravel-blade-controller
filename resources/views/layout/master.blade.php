<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@yield('css')
<title>@yield('title')</title>
</head>
<body>

@include('layout.header')

<main>
     <!-- Bagian Hero -->
     <div>
        @yield('hero')
    </div>

    <!-- Bagian List -->
    <div>
        @yield('list')
    </div>
</main>

</body>
</html>