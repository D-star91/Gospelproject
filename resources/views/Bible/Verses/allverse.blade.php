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
                <div class="col-md-4">
                    <div class="v-ti">
                        <div class="list-group list-group-flush">
                            <a href="{{route('verse')}}" class="list-group-item list-group-item-action" aria-current="true">
                                VERSES
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">30Day Bible Scripture Challenge</a>
                            <a href="#" class="list-group-item list-group-item-action">Bible Reading Challenge</a>
                            <a href="#" class="list-group-item list-group-item-action">Sermon</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Biblelayout>