<x-Loglayout>

    <div class="Signup-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="reg-form-bg">
                        <h3>LOGIN</h3>
                        <form action="{{route('user_login')}}" method="POST">
                        @csrf
                            <div class="form-outline mb-4">
                              <input type="email" id="form3Example3" class="form-control" name="email" />
                              <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                              <input type="password" id="form3Example4" class="form-control" name="password" />
                              <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

</x-Loglayout>