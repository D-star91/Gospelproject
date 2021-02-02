<x-studylayout>

    <div class="bg-profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="profile">
                        <h3>Profile</h3>
                        <hr>
                        <form action="{{route('pro_update')}}" method="POST">
                        @csrf
                            @if(session("success"))
                                <div class="form-text text-center">
                                    {{session("success")}}
                                </div>
                            @endif
                            @if(session("error"))
                                <div class="form-text text-center">
                                    {{session("error")}}
                                </div>
                            @endif
                            <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="{{auth()->user()->name}}">
                              </div>
                              <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="{{auth()->user()->email}}">
                              </div>
                              <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="{{auth()->user()->phone}}">
                              </div>
                             <h5>Change Password</h5>
                                <div class="col-sm-5 mb-3">
                                  <input type="password" class="form-control" placeholder="Old Password" aria-label="Old Password">
                                </div>
                                <div class="col-sm-5 mb-3">
                                  <input type="password" class="form-control" placeholder="New Password" aria-label="New Password">
                                </div>
                        <button class="pro-btn mt-3" type="submit">Update</button>
                        </form>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-studylayout>