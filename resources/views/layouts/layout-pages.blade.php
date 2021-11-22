<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"rel="stylesheet">
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="/css/layout-pages-style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="align-items-center">

        <!--Navbar-->
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href=" {{route('lawsuits.home')}} ">Home</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
            </div>
        </div>
    </header><!-- End Header -->
    <!--Main-->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="msg">
                    @if(session('msg'))
                            <p class="msg">{{ session('msg') }}</p>
                    @endif
                </div>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <div>
            <p>Advogados &copy; 2021</p>
        </div>
    </footer>

    <script src="/js/main.js"></script>
</body>

</html>
