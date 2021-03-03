<x-userlayout>

    <div class="admin-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="ad">
                        <div class="list-group list-group-flush">
                            <a href="{{route('Adminpage')}}" class="list-group-item list-group-item-action" aria-current="true">
                                Admin Home
                            </a>
                            <a href="{{route('vpost')}}" class="list-group-item list-group-item-action">Verse Posts</a>
                            <a href="{{route('sermonpost')}}" class="list-group-item list-group-item-action">တရားဒေသနာ Post</a>
                            <a href="{{route('bookpost')}}" class="list-group-item list-group-item-action">Book post</a>
                            <a href="#" class="list-group-item list-group-item-action">contact email</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">User</a>
                          </div>
                    </div>
                </div>
                <div class="col-md-8">

                </div>
            </div>
        </div>
    </div>


</x-userlayout>