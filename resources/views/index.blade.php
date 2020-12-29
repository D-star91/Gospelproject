<x-Layout>

    <div class="main-bg-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h-t1 wow fadeInDown" data-wow-delay="0.3s"><strong>LOYAL LAND</strong></h1>
                    <hr class="hr-1 mx-auto wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="h-t2 wow fadeInDown mb-5" data-wow-delay="0.4s"><strong>Ministry</strong></h5>
                    <a  href="{{route('sign_up')}}" class="btn-1" >Sign up</a>
                </div>
            </div>
        </div>
    </div> 
    <div class="content-bg-pray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="prayer-form my-4">
                        <form action="prayer_form" method="POST">
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
                <div class="col-md-8">
                    <div class=" my-4">
                        <div class="col-sm-6 d-inline">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="h-t3">Bible</h5>
                                <p class="card-text">
                                    ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း
                                </p>
                                <a href="#" class="btn-3">Read...</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 d-inline">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="h-t3">BooK</h5>
                                <p class="card-text">
                                  အသက်တာအတွက် တည်ဆောက်ခြင်းကိုဖြစ်သော စာအုပ်များ
                                </p>
                                <a href="#" class="btn-3">Read...</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 d-inline">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="h-t3">Testimonies</h5>
                                <p class="card-text">
                                  နေရပ်အသီးသီးမှ ယုံကြည်သူများ၏ ဘုရားသခင်ကောင်းမြတ်ခြင်း သက်သေခံချက်များ
                                </p>
                                <a href="#" class="btn-3">Read...</a>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
              <!-- Bible Study -->
              <div class="card mb-3" style="max-width: auto">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('image/Bible study.png')}}" alt="..." class="img-fluid"/>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="h-t5">Bible Study</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                      </p>
                      
                    </div>
                    <a href="" class="btn-4">I will learn</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
    

</x-Layout>