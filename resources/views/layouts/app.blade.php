{{-- <h1>{{ $name }}</h1> --}}
{{-- <h1>
    @foreach ($names as $name)
        {{ $name }}
    @endforeach
</h1> --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('css/signin.css') }}" rel="stylesheet"> --}}
</head>

<body class="text-center">

    @yield('contenu')




</body>


<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">
        @if (Session::has('success'))
            {{ Session::get('success') }}
        @endif
    </h4>

</div>


</html>
