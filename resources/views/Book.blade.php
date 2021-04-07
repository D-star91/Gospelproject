<x-Booklayout>

    <div class="bookbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>loyal Book</h3>
                    <p>ဓမ္မစာအုပ်စာပေများ၊</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bookmu">
                        <h3>စာအုပ်ခေါင်းစဉ်များ</h3>
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">စာအုပ်များ</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">ခရစ်ယာန်အသက်တာ</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">ဆုတောင်းခြင်း</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">သင်ခန်းစာများ</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bookti">
                        <h3>စာအုပ်များ</h3>
                        <div class="tab-content my-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <a href="{{route('fatherhood')}}"><img src="{{asset('Image/Fatherhood.png')}}" class="book-img" alt="Fatherhood"></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104240.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104300.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104314.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_115258.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104322.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201014_155709.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201014_155647.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_115224.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104224.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104212.jpg')}}" class="book-img" alt="..."></a>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <a href="{{route('fatherhood')}}"><img src="{{asset('Image/Fatherhood.png')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104314.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201014_155709.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201014_155647.jpg')}}" class="book-img" alt="..."></a>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <a href=""><img src="{{asset('Image/IMG_20201013_104314.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104322.jpg')}}" class="book-img" alt="..."></a>
                            </div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                <a href=""><img src="{{asset('Image/IMG_20201013_104240.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_115258.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104322.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_115224.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104224.jpg')}}" class="book-img" alt="..."></a>
                                <a href=""><img src="{{asset('Image/IMG_20201013_104212.jpg')}}" class="book-img" alt="..."></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
    </div>

</x-Booklayout>