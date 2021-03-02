<x-Biblelayout>

    <div class="dailyversebg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>နေ့စဉ်ကျမ်းပိုဒ်များ</h3>
                    <p>နေ့စဉ် ကျမ်းပိုဒ်များကို အလွတ်ကျက်မှတ်ခြင်းဖြင့် ဘုရားသခင်၏နှုတ်ကပတ်တော်နှင့်ပိုမိုရင်းနှီးကျွမ်းဝင်စေပါ။</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="v-menu">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="v-menu">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="v-menu">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="v-ti">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                VERSES
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">30Day Bible Scripture Challenge</a>
                            <a href="#" class="list-group-item list-group-item-action">Bible Reading Challenge</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                          </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="v-po">
                        @foreach($vposts as $vpost)
                        <div class="card">
                            <h5 class="card-header">ယနေ့အတွက်ကျမ်းပိုဒ်...</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{$vpost['verse']}}</h5>
                              <p class="card-text">{{$vpost['post']}}</p>
                              
                            </div>
                            <a href="" class="mx-auto">See All</a>
                          </div>
                          @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Biblelayout>