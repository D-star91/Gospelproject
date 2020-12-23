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
        <a class="navbr-font-sty" href="#">
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
                    <a class="navbr-font-br me-5" href="">HOME
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('bible_home')}}">BIBLE</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('study_home')}}">STUDY</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('prayer')}}">PRAYER</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('contact')}}">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-5" href="{{route('about')}}">ABOUT</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item me-3 me-lg-0">
                  <a class="navbr-font-br" href="" >
                    {{auth()->user()->name}}
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a href="" class="navbr-font-br" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
                    <i class="fas fa-user-circle"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a href="{{route('logout')}}" class="navbr-font-br" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                    <i class="fas fa-sign-out-alt"></i>
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

    <footer class="bg-dark text-center text-lg-start">
            <div class="row">
                <div class="col-2">
                    <a  href="#">
                        <img src="{{asset('Image/loyallogo3.png')}}" height="50" alt="mdb logo" class="my-4">
                    </a>
                </div>

                <div class="col-5">
                    
                </div>
                <div class="col-md-5">
                  <form class="form-inline my-4" action="{{route('subscribe')}}" method="POST">
                    <input class="form-control mr-sm-2" type="email" placeholder="Email address" aria-label="email" name="email">
                    <button class="btn-5 my-2 my-sm-0" type="submit">Subscribe</button>
                  </form>
                  @error("userEmail")
                    <p class="text-danger d-inline ">{{$message}}</p>
                  @enderror
                </div>
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="">loyalland.com</a>
        </div>
    </footer>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>