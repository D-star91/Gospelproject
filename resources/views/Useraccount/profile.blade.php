<x-studylayout>

    <div class="bg-profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="profile">
                        <h3>Profile</h3>
                        <form action="">
                            <div class="form-outline my-3">
                                <input type="text" id="form9Example3" class="form-control" />
                                <label class="form-label" for="form9Example3">{{auth()->user()->name}}</label>
                              </div>
                            
                            <div class="row g-5">
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                      <input type="email" id="form9Example4" class="form-control" />
                                      <label class="form-label" for="form9Example4">{{auth()->user()->email}}</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Number input -->
                                <div class="form-outline ">
                                    <input type="tel" id="form6Example6" class="form-control" />
                                    <label class="form-label" for="form6Example6">{{auth()->user()->phone}}</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-outline my-3">
                                <input type="text" id="form6Example4" class="form-control" name="address"/>
                                <label class="form-label" for="form6Example4">Address</label>
                            </div>
                        </form>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-studylayout>