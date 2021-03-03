<x-Biblelayout>

    <div class="dailyversebg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="val-po">
                        @foreach($vposts as $vpost)
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{$vpost['verse']}}</h5>
                              <p class="card-text">{{$vpost['post']}}</p>
                              
                            </div>
                          </div>
                          @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Biblelayout>