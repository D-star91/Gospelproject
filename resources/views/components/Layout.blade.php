<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Loyal land</title>
    <!-- Allstyle -->
    <link rel="stylesheet" href="/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet"/>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/animate.css">
</head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-light">
        <a class="navbr-font-sty" href="">
            <img src="{{asset('Image/loyallogo3.png')}}" height="45" alt="mdb logo" class="me-2 ms-5">LOYAL LAND
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
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="navbr-font-br me-0" href="{{route('index')}}">HOME
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-0" href="{{route('bible_home')}}">BIBLE</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-0" href="{{route('study_user')}}">STUDY</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-0" href="{{route('prayer')}}">PRAYER</a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-0" href="{{route('book')}}">BOOK</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto nav-flex-icons">
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
      var exampleEl = document.getElementById('example')
      var tooltip = new bootstrap.Tooltip(exampleEl, {
        boundary: 'window'
      })
    </script>
    <script>
      var exampleEl = document.getElementById('example')
      var tooltip = new bootstrap.Tooltip(exampleEl, {
        boundary: 'window'
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
                <form class="row gy-2 gx-3 align-items-center my-4" action="{{route('subscribe')}}" method="POST">
                 @csrf
                    <div class="col-auto">
                      <input class="form-control " type="email" placeholder="Email address" aria-label="email" name="email">
                    </div>
                    <div class="col-auto">
                      <button class="btn-5 my-2 " type="submit">Subscribe</button>
                    </div>
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
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>