
<html>
<head>
    <title>PROGRAIII @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
@section('sidebar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi ejercicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a class="nav-link active" href="{{route('layout')}}">Home</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{route('pagina1')}}">Page 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pagina2')}}">Page 2</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

@show
<div class="container">
    @yield('content')

    @show
</div>

</body>
</html>
