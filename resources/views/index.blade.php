<x-Layout>

    <div class="main-bg-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h-t1 wow fadeInDown" data-wow-delay="0.3s"><strong>LOYAL LAND</strong></h1>
                    <hr class="hr-1 mx-auto wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="h-t2 wow fadeInDown mb-5" data-wow-delay="0.4s"><strong>Ministry</strong></h5>
                    <a   href="{{route('sign_up')}}" class="btn-1 wow animate__animated animate__shakeY" >Register</a>
                    <a  href="{{route('login')}}" class="btn-1 wow animate__animated animate__shakeY" >Login</a>
                </div>
            </div>
        </div>
    </div> 

              <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</x-Layout>