<x-Layout>

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
                                <div class="form-group mt-3">
                                    <select name="choose" class="form-select" aria-label="Default select example">
                                        <option selected>Choose...</option>
                                        <option value="Pray">Pray</option>
                                        <option value="Praise">Praise</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
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
    <div class="bg-pray-table">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h3></h3>
            <div data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="0" class="scrollspy-example my-3">
              <table class="table table-light table-hover">
                <thead>
                  <tr class="table-danger">
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Prayer</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $Prayers as $Pray )
                  <tr>
                    <td class="table-info">{{$Pray['name']}}</td>
                    <td class="table-info">{{$Pray['choose']}}</td>
                    <td class="table-info">{{$Pray['messages']}}</td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
              </div>
            
          </div>
        </div>
      </div>
    </div>
</x-Layout>