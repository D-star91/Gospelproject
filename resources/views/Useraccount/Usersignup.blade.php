<x-Loglayout>

    <div class="Signup-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="reg-form-bg">
                        <h3>REGISTER</h3>
                        <form action="{{route('user_sign_up')}}" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="text" id="typeText" class="form-control" name="username"/>
                                <label class="form-label" for="typeText">Name</label>
                            </div>
                            <div class="form-outline mb-4">
                              <input type="email" id="form3Example3" class="form-control" name="useremail"/>
                              <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                              <input type="password" id="form3Example4" class="form-control" name="userpassword"/>
                              <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

</x-Loglayout>