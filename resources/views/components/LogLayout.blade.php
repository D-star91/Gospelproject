<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOYAL</title>
    <!-- Allstyle -->
    <link rel="stylesheet" href="/style.css">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.css" rel="stylesheet"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-light">
        <a class="navbr-font-sty" href="{{route('index')}}">
            <img src="{{asset('Image/loyallogo3.png')}}" height="45" alt="mdb logo" class="mr-2 ml-5">LOYAL LAND
        </a>
      </nav>
        <!--Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('index')}}">HOME
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('bible_home')}}">BIBLE</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="">STUDY</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="">PRAYER</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="">ABOUT</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item me-3 me-lg-0">
                    <a href="{{route('sign_up')}}" class="navbr-font-br" data-toggle="tooltip" data-placement="top" title="Sign up"><i class="fas fa-sign-in-alt"></i></a>
                <li class="nav-item me-3 me-lg-0">
                  <a class="navbr-font-br" href="{{route('sign_up')}}">
                    REGISTER
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="navbr-font-br" href="{{route('login')}}">
                    LOG IN
                  </a>
                </li>
              </ul>
          </div>
      </div>
    </nav>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
    {{$slot}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.js" ></script>
</body>
</html>