<x-Biblelayout>

    <div class="V-Post">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="v-post">
                        
                        <form action="{{route('verpost')}}" method="POST">
                            @csrf
                            <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">ကျမ်းညွှန်း</label>
                                <input type="text" name="verse" class="form-control" id="formGroupExampleInput" >
                            </div>
                            <div class="mb-3 col-sm-7">
                                <label for="formGroupExampleInput" class="form-label">ကျမ်းချက်</label>
                                <textarea type="text" rows="3" name="vpost" class="form-control mt-2" id="formGroupExampleInput2" ></textarea> 
                            </div>
                            <button class="pro-btn mt-3" type="submit">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Biblelayout>