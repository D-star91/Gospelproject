<x-Userlayout>

    <div class="Prayer-bg">

    </div>
    <div class="Prayer-form">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="prayer-form my-4">
                        <form action="{{route('prayer_form')}}" method="POST">
                            @csrf
                            <h4 class="h-pr1  ">ဆုတောင်းချက်တင်ရန်</h4><hr>
                            <p class="p-1 mb-0">ကျေးဇူးပြု၍ ဇယားကွက်တွင် ဆုတောင်းချက် သို့မဟုတ် ကျေးဇူးတော်ချီးမွမ်းခြင်းကို တစ်ခုသာ ရေးပေးပါ။</p>
                            <p class="p-1 mb-0">ပြန်လည်၍ ဖော်ပြ၍မရသော အထိအခိုက်မခံသော စာသားများမရေးသားပါနှင့်။</p><hr>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">အမည်</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="အမည်">
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="Pray">Pray</option>
                                        <option value="Praise">Praise</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="textAreaExample">ဆုတောင်းချက်ရေးပါ</label>
                                    <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                </div>
                                <button  type="submit" class="btn-2 mt-4" >SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Userlayout>