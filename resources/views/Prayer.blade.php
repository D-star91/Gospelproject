<x-Userlayout>

    <div class="Prayer-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="prayer-form">
                        @if(Session('success'))
                            <div class="text-center mt-2">
                            {{Session('success')}}
                            </div>   
                        @endif
                        <form action="{{route('prayer_form')}}" method="POST">
                            @csrf
                            <h4 class="h-pr1  ">ဆုတောင်းချက်တင်ရန်</h4><hr>
                            <p class="p-1 mb-0">ကျေးဇူးပြု၍ ဇယားကွက်တွင် ဆုတောင်းချက် သို့မဟုတ် ကျေးဇူးတော်ချီးမွမ်းခြင်းကို တစ်ခုသာ ရေးပေးပါ။</p>
                            <p class="p-1 mb-0">ပြန်လည်၍ ဖော်ပြ၍မရသော အထိအခိုက်မခံသော စာသားများမရေးသားပါနှင့်။</p><hr>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">အမည်</label>
                                    @error("name")
                                        <p class="text-danger d-inline" >ကျေးဇူးပြု၍အမည်ရေးထည့်ပေးပါ။</p>
                                    @enderror
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="အမည်">
                                
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" name="choose" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="Pray">Pray</option>
                                        <option value="Praise">Praise</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="textAreaExample">ဆုတောင်းချက်ရေးပါ</label>
                                    @error("messages")
                                        <p class="text-danger d-inline" >ကျေးဇူးပြု၍ဆုတောင်းချက်ရေးပေးပါ။</p>
                                    @enderror
                                    <textarea class="form-control" name="messages" id="textAreaExample" rows="4"></textarea>
                                    
                                </div>
                                <button  type="submit" class="btn-2 mt-4" >SAVE</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <h3 class="h-t7">Prayer</h3>
                    <p class="p-3">ဆုတောင်းခြင်းသည် ဘုရားသခင်၏အလိုတော်ဖြစ်ပေသည်။</p>
                </div>
            </div>
        </div>
    </div><hr>
    <div class="Prayers-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Button with data-bs-target
                        </button>
                      </p>
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
<script>
    var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
    var collapseList = collapseElementList.map(function (collapseEl) {
    return new bootstrap.Collapse(collapseEl)
    })
</script>
<script>
    var myCollapse = document.getElementById('myCollapse')
var bsCollapse = new bootstrap.Collapse(myCollapse, {
  toggle: false
})
</script>
</x-Userlayout>