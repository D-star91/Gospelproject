<x-Biblelayout>

    <div class="V-Post">
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
                    <div class="v-post">
                        
                        <form action="{{route('verpost')}}" method="POST">
                            @csrf
                            <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">တရားဒေသနာခေါင်းစဉ်</label>
                                <input type="text" name="verse" class="form-control" id="formGroupExampleInput" >
                            </div>
                            <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">ဒေသနာအမျိုးအစား</label>
                                <input type="text" name="verse" class="form-control" id="formGroupExampleInput" >
                            </div>
                            <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">ဒေသနာဟောသူအမည်</label>
                                <input type="text" name="verse" class="form-control" id="formGroupExampleInput" >
                            </div>
                            <div class="mb-3 ">
                                <label for="formGroupExampleInput" class="form-label">ဒေသနာအကြောင်းအရာ</label>
                                <textarea type="text" rows="10" name="vpost" class="form-control mt-2" id="formGroupExampleInput2" ></textarea> 
                            </div>
                            <button class="pro-btn mt-3" type="submit">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Biblelayout>