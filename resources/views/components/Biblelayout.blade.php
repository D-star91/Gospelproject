<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOYAL</title>
    <!-- Allstyle -->
    <link rel="stylesheet" href="/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet"/>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-warning">
        <a class="navbr-font-sty" href="">
            <img src="{{asset('Image/loyallogo3.png')}}" height="45" alt="mdb logo" class="me-2 ms-5">LOYAL BIBLE
        </a>
      </nav>
        <!--Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav nav-pills me-auto" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="navbr-font-br me-0" href="{{route('index')}}">HOME
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbr-font-br me-0"  href="" data-bs-toggle="modal" data-bs-target="#old">OLD TESTAMENT</a>
                </li>
                <li class="nav-item">
                    <li class="nav-item">
                        <a class="navbr-font-br me-0" href="" data-bs-toggle="modal" data-bs-target="#new">NEW TESTAMENT</a>
                    </li>
                </li>
            </ul>
      </div>
    </nav>
        <!-- Old testament -->
        <div class="old-test">
          <div class="modal fade" id="old" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ဓမ္မဟောင်းကျမ်း</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-4">
                            <div class="list-group scrollspy-example" id="list-tab" role="tablist" data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="0">
                              <a class="list-group-item list-group-item-action active" id="list-genesis-list" data-bs-toggle="list" href="#list-genesis" role="tab" aria-controls="genesis">ကမ္ဘာဦးကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-exodus-list" data-bs-toggle="list" href="#list-exodus" role="tab" aria-controls="exodus">ထွက်မြောက်ရာကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-leviticus-list" data-bs-toggle="list" href="#list-leviticus" role="tab" aria-controls="leviticus">ဝတ်ပြုရာကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-numbers-list" data-bs-toggle="list" href="#list-numbers" role="tab" aria-controls="numbers">တောလည်ရာကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-deuteronomy-list" data-bs-toggle="list" href="#list-deuteronomy" role="tab" aria-controls="deuteronomy">တရားဟောရာကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-joshua-list" data-bs-toggle="list" href="#list-joshua" role="tab" aria-controls="joshua">ယောရှုမှတ်စာ</a>
                              <a class="list-group-item list-group-item-action" id="list-judges-list" data-bs-toggle="list" href="#list-judges" role="tab" aria-controls="judges">တရားသူကြီးမှတ်စာ</a>
                              <a class="list-group-item list-group-item-action" id="list-ruth-list" data-bs-toggle="list" href="#list-ruth" role="tab" aria-controls="ruth">ရုသဝတ္ထူ</a>
                              <a class="list-group-item list-group-item-action" id="list-samuel-1-list" data-bs-toggle="list" href="#list-samuel-1" role="tab" aria-controls="samuel-1">ဓမ္မရာဇဝင်ပဌမစောင်</a>
                              <a class="list-group-item list-group-item-action" id="list-samuel-2-list" data-bs-toggle="list" href="#list-samuel-2" role="tab" aria-controls="samuel-2">ဓမ္မရာဇဝင်ဒုတိယစောင်</a>
                              <a class="list-group-item list-group-item-action" id="list-kings-1-list" data-bs-toggle="list" href="#list-kings-1" role="tab" aria-controls="kings-1">ဓမ္မရာဇဝင်တတိယစောင်</a>
                              <a class="list-group-item list-group-item-action" id="list-kings-2-list" data-bs-toggle="list" href="#list-kings-2" role="tab" aria-controls="kings-2">ဓမ္မရာဇဝင်စတုတ္ထစောင်</a>
                              <a class="list-group-item list-group-item-action" id="list-chronicles-1-list" data-bs-toggle="list" href="#list-chronicles-1" role="tab" aria-controls="chronicles-1">ရာဇဝင်ချုပ်ပဌမစောင်</a>
                              <a class="list-group-item list-group-item-action" id="list-chronicles-2-list" data-bs-toggle="list" href="#list-chronicles-2" role="tab" aria-controls="chronicles-2">ရာဇဝင်ချုပ်ဒုတိယစောင်</a>
                              <a class="list-group-item list-group-item-action" id="list-ezra-list" data-bs-toggle="list" href="#list-ezra" role="tab" aria-controls="ezra">ဧဇရမှတ်စာ</a>
                              <a class="list-group-item list-group-item-action" id="list-nehemiah-list" data-bs-toggle="list" href="#list-nehemiah" role="tab" aria-controls="nehemiah">နေဟမိမှတ်စာ</a>
                              <a class="list-group-item list-group-item-action" id="list-esther-list" data-bs-toggle="list" href="#list-esther" role="tab" aria-controls="esther">ဧသတာဝတ္ထု</a>
                              <a class="list-group-item list-group-item-action" id="list-job-list" data-bs-toggle="list" href="#list-job" role="tab" aria-controls="job">ယောဘဝတ္ထု</a>
                              <a class="list-group-item list-group-item-action" id="list-psalms-list" data-bs-toggle="list" href="#list-psalms" role="tab" aria-controls="psalms">ဆာလံကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-proverbs-list" data-bs-toggle="list" href="#list-proverbs" role="tab" aria-controls="proverbs">သုတ္တံကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-ecclesiastes-list" data-bs-toggle="list" href="#list-ecclesiastes" role="tab" aria-controls="ecclesiastes">ဒေသနာကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-songofsolomon-list" data-bs-toggle="list" href="#list-songofsolomon" role="tab" aria-controls="songofsolomon">ရှောလမုန်သီချင်း</a>
                              <a class="list-group-item list-group-item-action" id="list-isaiah-list" data-bs-toggle="list" href="#list-isaiah" role="tab" aria-controls="isaiah">ဟေရှာယအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-jeremiah-list" data-bs-toggle="list" href="#list-jeremiah" role="tab" aria-controls="jeremiah">ယေရမိအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-lamentations-list" data-bs-toggle="list" href="#list-lamentations" role="tab" aria-controls="lamentations">ယေရမိမြည်တမ်းစကား</a>
                              <a class="list-group-item list-group-item-action" id="list-ezekiel-list" data-bs-toggle="list" href="#list-ezekiel" role="tab" aria-controls="ezekiel">ယေဇကျေလအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-daniel-list" data-bs-toggle="list" href="#list-daniel" role="tab" aria-controls="daniel">ဒံယေလအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-hosea-list" data-bs-toggle="list" href="#list-hosea" role="tab" aria-controls="hosea">ဟောရှေအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-joel-list" data-bs-toggle="list" href="#list-joel" role="tab" aria-controls="joel">ယောလအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-amos-list" data-bs-toggle="list" href="#list-amos" role="tab" aria-controls="amos">အာမုတ်အနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-obadiah-list" data-bs-toggle="list" href="#list-obadiah" role="tab" aria-controls="obadiah">ဩဗဒိအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-jonah-list" data-bs-toggle="list" href="#list-jonah" role="tab" aria-controls="jonah">ယောနဝတ္ထု</a>
                              <a class="list-group-item list-group-item-action" id="list-micah-list" data-bs-toggle="list" href="#list-micah" role="tab" aria-controls="micah">မိက္ခာအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-nehum-list" data-bs-toggle="list" href="#list-nehum" role="tab" aria-controls="nehum">နာဟုံအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-habakkuk-list" data-bs-toggle="list" href="#list-habakkuk" role="tab" aria-controls="habakkuk">ဟဗက္ကုတ်အနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-zephaniah-list" data-bs-toggle="list" href="#list-zephaniah" role="tab" aria-controls="zephaniah">ဇေဖနိအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-haggai-list" data-bs-toggle="list" href="#list-haggai" role="tab" aria-controls="haggai">ဟဂ္ဂဲအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-zechariah-list" data-bs-toggle="list" href="#list-zechariah" role="tab" aria-controls="zechariah">ဇာခရိအနာဂတ္တိကျမ်း</a>
                              <a class="list-group-item list-group-item-action" id="list-malachi-list" data-bs-toggle="list" href="#list-malachi" role="tab" aria-controls="malachi">မာလခိအနာဂတ္တိကျမ်း</a>
                            </div>
                          </div>
                          <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="list-genesis" role="tabpanel" aria-labelledby="list-genesis-list">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁</a>
                                        <a href="" class="btn-bv">၂</a>
                                        <a href="" class="btn-bv">၃</a>
                                        <a href="" class="btn-bv">၄</a>
                                        <a href="" class="btn-bv">၅</a>
                                        <a href="" class="btn-bv">၆</a>
                                        <a href="" class="btn-bv">၇</a>
                                        <a href="" class="btn-bv">၈</a>
                                        <a href="" class="btn-bv">၉</a>
                                        <a href="" class="btn-bv">၁၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၁၁</a>
                                          <a href="" class="btn-bv">၁၂</a>
                                          <a href="" class="btn-bv">၁၃</a>
                                          <a href="" class="btn-bv">၁၄</a>
                                          <a href="" class="btn-bv">၁၅</a>
                                          <a href="" class="btn-bv">၁၆</a>
                                          <a href="" class="btn-bv">၁၇</a>
                                          <a href="" class="btn-bv">၁၈</a>
                                          <a href="" class="btn-bv">၁၉</a>
                                          <a href="" class="btn-bv">၂၀</a>
                                        </div>
                                        <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၂၁</a>
                                          <a href="" class="btn-bv">၂၂</a>
                                          <a href="" class="btn-bv">၂၃</a>
                                          <a href="" class="btn-bv">၂၄</a>
                                          <a href="" class="btn-bv">၂၅</a>
                                          <a href="" class="btn-bv">၂၆</a>
                                          <a href="" class="btn-bv">၂၇</a>
                                          <a href="" class="btn-bv">၂၈</a>
                                          <a href="" class="btn-bv">၂၉</a>
                                          <a href="" class="btn-bv">၃၀</a>
                                        </div>
                                        <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၃၁</a>
                                          <a href="" class="btn-bv">၃၂</a>
                                          <a href="" class="btn-bv">၃၃</a>
                                          <a href="" class="btn-bv">၃၄</a>
                                          <a href="" class="btn-bv">၃၅</a>
                                          <a href="" class="btn-bv">၃၆</a>
                                          <a href="" class="btn-bv">၃၇</a>
                                          <a href="" class="btn-bv">၃၈</a>
                                          <a href="" class="btn-bv">၃၉</a>
                                          <a href="" class="btn-bv">၄၀</a>
                                        </div>
                                        <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၄၁</a>
                                          <a href="" class="btn-bv">၄၂</a>
                                          <a href="" class="btn-bv">၄၃</a>
                                          <a href="" class="btn-bv">၄၄</a>
                                          <a href="" class="btn-bv">၄၅</a>
                                          <a href="" class="btn-bv">၄၆</a>
                                          <a href="" class="btn-bv">၄၇</a>
                                          <a href="" class="btn-bv">၄၈</a>
                                          <a href="" class="btn-bv">၄၉</a>
                                          <a href="" class="btn-bv">၅၀</a>
                                        </div>    
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="list-exodus" role="tabpanel" aria-labelledby="list-exodus-list">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁</a>
                                        <a href="" class="btn-bv">၂</a>
                                        <a href="" class="btn-bv">၃</a>
                                        <a href="" class="btn-bv">၄</a>
                                        <a href="" class="btn-bv">၅</a>
                                        <a href="" class="btn-bv">၆</a>
                                        <a href="" class="btn-bv">၇</a>
                                        <a href="" class="btn-bv">၈</a>
                                        <a href="" class="btn-bv">၉</a>
                                        <a href="" class="btn-bv">၁၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၁၁</a>
                                          <a href="" class="btn-bv">၁၂</a>
                                          <a href="" class="btn-bv">၁၃</a>
                                          <a href="" class="btn-bv">၁၄</a>
                                          <a href="" class="btn-bv">၁၅</a>
                                          <a href="" class="btn-bv">၁၆</a>
                                          <a href="" class="btn-bv">၁၇</a>
                                          <a href="" class="btn-bv">၁၈</a>
                                          <a href="" class="btn-bv">၁၉</a>
                                          <a href="" class="btn-bv">၂၀</a>
                                        </div>
                                        <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၂၁</a>
                                          <a href="" class="btn-bv">၂၂</a>
                                          <a href="" class="btn-bv">၂၃</a>
                                          <a href="" class="btn-bv">၂၄</a>
                                          <a href="" class="btn-bv">၂၅</a>
                                          <a href="" class="btn-bv">၂၆</a>
                                          <a href="" class="btn-bv">၂၇</a>
                                          <a href="" class="btn-bv">၂၈</a>
                                          <a href="" class="btn-bv">၂၉</a>
                                          <a href="" class="btn-bv">၃၀</a>
                                        </div>
                                        <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၃၁</a>
                                          <a href="" class="btn-bv">၃၂</a>
                                          <a href="" class="btn-bv">၃၃</a>
                                          <a href="" class="btn-bv">၃၄</a>
                                          <a href="" class="btn-bv">၃၅</a>
                                          <a href="" class="btn-bv">၃၆</a>
                                          <a href="" class="btn-bv">၃၇</a>
                                          <a href="" class="btn-bv">၃၈</a>
                                          <a href="" class="btn-bv">၃၉</a>
                                          <a href="" class="btn-bv">၄၀</a>
                                        </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="list-leviticus" role="tabpanel" aria-labelledby="list-leviticus-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-numbers" role="tabpanel" aria-labelledby="list-numbers-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-deuteronomy" role="tabpanel" aria-labelledby="list-deuteronomy-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-joshua" role="tabpanel" aria-labelledby="list-joshua-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-judges" role="tabpanel" aria-labelledby="list-judges-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-ruth" role="tabpanel" aria-labelledby="list-ruth-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-samuel-1" role="tabpanel" aria-labelledby="list-samuel-1-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-samuel-2" role="tabpanel" aria-labelledby="list-samuel-2-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-kings-1" role="tabpanel" aria-labelledby="list-kings-1-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-kings-2" role="tabpanel" aria-labelledby="list-kings-2-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-chronicles-1" role="tabpanel" aria-labelledby="list-chronicles-1-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-chronicles-2" role="tabpanel" aria-labelledby="list-chronicles-2-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-ezra" role="tabpanel" aria-labelledby="list-ezra-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-nehemiah" role="tabpanel" aria-labelledby="list-nehemiah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-esther" role="tabpanel" aria-labelledby="list-esther-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-job" role="tabpanel" aria-labelledby="list-job-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                        <a href="" class="btn-bv">၃၇</a>
                                        <a href="" class="btn-bv">၃၈</a>
                                        <a href="" class="btn-bv">၃၉</a>
                                        <a href="" class="btn-bv">၄၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၄၁</a>
                                        <a href="" class="btn-bv">၄၂</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade scrollspy-example" id="list-psalms" role="tabpanel" aria-labelledby="list-psalms-list" data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="0">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                    </div>
                                      <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၀</a>
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                      </div>
                                      <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                      </div>
                                      <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                      </div>
                                      <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၇</a>
                                        <a href="" class="btn-bv">၃၈</a>
                                        <a href="" class="btn-bv">၃၉</a>
                                        <a href="" class="btn-bv">၄၀</a>
                                        <a href="" class="btn-bv">၄၁</a>
                                        <a href="" class="btn-bv">၄၂</a>
                                        <a href="" class="btn-bv">၄၃</a>
                                        <a href="" class="btn-bv">၄၄</a>
                                        <a href="" class="btn-bv">၄၅</a>
                                      </div>
                                      <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၄၆</a>
                                        <a href="" class="btn-bv">၄၇</a>
                                        <a href="" class="btn-bv">၄၈</a>
                                        <a href="" class="btn-bv">၄၉</a>
                                        <a href="" class="btn-bv">၅၀</a>
                                        <a href="" class="btn-bv">၅၁</a>
                                        <a href="" class="btn-bv">၅၂</a>
                                        <a href="" class="btn-bv">၅၃</a>
                                        <a href="" class="btn-bv">၅၄</a>
                                      </div>
                                        <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၅၅</a>
                                          <a href="" class="btn-bv">၅၆</a>
                                          <a href="" class="btn-bv">၅၇</a>
                                          <a href="" class="btn-bv">၅၈</a>
                                          <a href="" class="btn-bv">၅၉</a>
                                          <a href="" class="btn-bv">၆၀</a>
                                          <a href="" class="btn-bv">၆၁</a>
                                          <a href="" class="btn-bv">၆၂</a>
                                          <a href="" class="btn-bv">၆၃</a>
                                        </div>
                                        <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၆၄</a>
                                          <a href="" class="btn-bv">၆၅</a>
                                          <a href="" class="btn-bv">၆၆</a>
                                          <a href="" class="btn-bv">၆၇</a>
                                          <a href="" class="btn-bv">၆၈</a>
                                          <a href="" class="btn-bv">၆၉</a>
                                          <a href="" class="btn-bv">၇၀</a>
                                          <a href="" class="btn-bv">၇၁</a>
                                          <a href="" class="btn-bv">၇၂</a>
                                        </div>
                                        <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၇၃</a>
                                          <a href="" class="btn-bv">၇၄</a>
                                          <a href="" class="btn-bv">၇၅</a>
                                          <a href="" class="btn-bv">၇၆</a>
                                          <a href="" class="btn-bv">၇၇</a>
                                          <a href="" class="btn-bv">၇၈</a>
                                          <a href="" class="btn-bv">၇၉</a>
                                          <a href="" class="btn-bv">၈၀</a>
                                          <a href="" class="btn-bv">၈၁</a>
                                        </div>
                                        <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၈၂</a>
                                          <a href="" class="btn-bv">၈၃</a>
                                          <a href="" class="btn-bv">၈၄</a>
                                          <a href="" class="btn-bv">၈၅</a>
                                          <a href="" class="btn-bv">၈၆</a>
                                          <a href="" class="btn-bv">၈၇</a>
                                          <a href="" class="btn-bv">၈၈</a>
                                          <a href="" class="btn-bv">၈၉</a>
                                          <a href="" class="btn-bv">၉၀</a>
                                        </div>
                                        <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၉၁</a>
                                          <a href="" class="btn-bv">၉၂</a>
                                          <a href="" class="btn-bv">၉၃</a>
                                          <a href="" class="btn-bv">၉၄</a>
                                          <a href="" class="btn-bv">၉၅</a>
                                          <a href="" class="btn-bv">၉၆</a>
                                          <a href="" class="btn-bv">၉၇</a>
                                          <a href="" class="btn-bv">၉၈</a>
                                          <a href="" class="btn-bv">၉၉</a>
                                        </div>
                                        <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                          <a href="" class="btn-bv">၁၀၀</a>
                                          <a href="" class="btn-bv">၁၀၁</a>
                                          <a href="" class="btn-bv">၁၀၂</a>
                                          <a href="" class="btn-bv">၁၀၃</a>
                                          <a href="" class="btn-bv">၁၀၄</a>
                                          <a href="" class="btn-bv">၁၀၅</a>
                                          <a href="" class="btn-bv">၁၀၆</a>
                                          <a href="" class="btn-bv">၁၀၇</a>
                                          <a href="" class="btn-bv">၁၀၈</a>
                                        </div>
                                          <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                            <a href="" class="btn-bv">၁၀၉</a>
                                            <a href="" class="btn-bv">၁၁၀</a>
                                            <a href="" class="btn-bv">၁၁၁</a>
                                            <a href="" class="btn-bv">၁၁၂</a>
                                            <a href="" class="btn-bv">၁၁၃</a>
                                            <a href="" class="btn-bv">၁၁၄</a>
                                            <a href="" class="btn-bv">၁၁၅</a>
                                            <a href="" class="btn-bv">၁၁၆</a>
                                            <a href="" class="btn-bv">၁၁၇</a>
                                          </div>
                                          <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                            <a href="" class="btn-bv">၁၁၈</a>
                                            <a href="" class="btn-bv">၁၁၉</a>
                                            <a href="" class="btn-bv">၁၂၀</a>
                                            <a href="" class="btn-bv">၁၂၁</a>
                                            <a href="" class="btn-bv">၁၂၂</a>
                                            <a href="" class="btn-bv">၁၂၃</a>
                                            <a href="" class="btn-bv">၁၂၄</a>
                                            <a href="" class="btn-bv">၁၂၅</a>
                                            <a href="" class="btn-bv">၁၂၆</a>
                                          </div>
                                          <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                            <a href="" class="btn-bv">၁၂၇</a>
                                            <a href="" class="btn-bv">၁၂၈</a>
                                            <a href="" class="btn-bv">၁၂၉</a>
                                            <a href="" class="btn-bv">၁၃၀</a>
                                            <a href="" class="btn-bv">၁၃၁</a>
                                            <a href="" class="btn-bv">၁၃၂</a>
                                            <a href="" class="btn-bv">၁၃၃</a>
                                            <a href="" class="btn-bv">၁၃၄</a>
                                            <a href="" class="btn-bv">၁၃၅</a>
                                          </div>
                                          <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                            <a href="" class="btn-bv">၁၃၆</a>
                                            <a href="" class="btn-bv">၁၃၇</a>
                                            <a href="" class="btn-bv">၁၃၈</a>
                                            <a href="" class="btn-bv">၁၃၉</a>
                                            <a href="" class="btn-bv">၁၄၀</a>
                                            <a href="" class="btn-bv">၁၄၁</a>
                                            <a href="" class="btn-bv">၁၄၂</a>
                                            <a href="" class="btn-bv">၁၄၃</a>
                                            <a href="" class="btn-bv">၁၄၄</a>
                                          </div>
                                          <div class="btn-group me-0 my-1" role="group" aria-label="First group">
                                            <a href="" class="btn-bv">၁၄၅</a>
                                            <a href="" class="btn-bv">၁၄၆</a>
                                            <a href="" class="btn-bv">၁၄၇</a>
                                            <a href="" class="btn-bv">၁၄၈</a>
                                            <a href="" class="btn-bv">၁၄၉</a>
                                            <a href="" class="btn-bv">၁၅၀</a>
                                          </div>
                                          
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-proverbs" role="tabpanel" aria-labelledby="list-proverbs-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-ecclesiastes" role="tabpanel" aria-labelledby="list-ecclesiastes-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-songofsolomon" role="tabpanel" aria-labelledby="list-songofsolomon-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-isaiah" role="tabpanel" aria-labelledby="list-isaiah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                        <a href="" class="btn-bv">၃၇</a>
                                        <a href="" class="btn-bv">၃၈</a>
                                        <a href="" class="btn-bv">၃၉</a>
                                        <a href="" class="btn-bv">၄၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၄၁</a>
                                        <a href="" class="btn-bv">၄၂</a>
                                        <a href="" class="btn-bv">၄၃</a>
                                        <a href="" class="btn-bv">၄၄</a>
                                        <a href="" class="btn-bv">၄၅</a>
                                        <a href="" class="btn-bv">၄၆</a>
                                        <a href="" class="btn-bv">၄၇</a>
                                        <a href="" class="btn-bv">၄၈</a>
                                        <a href="" class="btn-bv">၄၉</a>
                                        <a href="" class="btn-bv">၅၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၅၁</a>
                                        <a href="" class="btn-bv">၅၂</a>
                                        <a href="" class="btn-bv">၅၃</a>
                                        <a href="" class="btn-bv">၅၄</a>
                                        <a href="" class="btn-bv">၅၅</a>
                                        <a href="" class="btn-bv">၅၆</a>
                                        <a href="" class="btn-bv">၅၇</a>
                                        <a href="" class="btn-bv">၅၈</a>
                                        <a href="" class="btn-bv">၅၉</a>
                                        <a href="" class="btn-bv">၆၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၆၁</a>
                                        <a href="" class="btn-bv">၆၂</a>
                                        <a href="" class="btn-bv">၆၃</a>
                                        <a href="" class="btn-bv">၆၄</a>
                                        <a href="" class="btn-bv">၆၅</a>
                                        <a href="" class="btn-bv">၆၆</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-jeremiah" role="tabpanel" aria-labelledby="list-jeremiah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                        <a href="" class="btn-bv">၃၇</a>
                                        <a href="" class="btn-bv">၃၈</a>
                                        <a href="" class="btn-bv">၃၉</a>
                                        <a href="" class="btn-bv">၄၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၄၁</a>
                                        <a href="" class="btn-bv">၄၂</a>
                                        <a href="" class="btn-bv">၄၃</a>
                                        <a href="" class="btn-bv">၄၄</a>
                                        <a href="" class="btn-bv">၄၅</a>
                                        <a href="" class="btn-bv">၄၆</a>
                                        <a href="" class="btn-bv">၄၇</a>
                                        <a href="" class="btn-bv">၄၈</a>
                                        <a href="" class="btn-bv">၄၉</a>
                                        <a href="" class="btn-bv">၅၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၅၁</a>
                                        <a href="" class="btn-bv">၅၂</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-lamentations" role="tabpanel" aria-labelledby="list-lamentations-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-ezekiel" role="tabpanel" aria-labelledby="list-ezekiel-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                        <a href="" class="btn-bv">၂၉</a>
                                        <a href="" class="btn-bv">၃၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၃၁</a>
                                        <a href="" class="btn-bv">၃၂</a>
                                        <a href="" class="btn-bv">၃၃</a>
                                        <a href="" class="btn-bv">၃၄</a>
                                        <a href="" class="btn-bv">၃၅</a>
                                        <a href="" class="btn-bv">၃၆</a>
                                        <a href="" class="btn-bv">၃၇</a>
                                        <a href="" class="btn-bv">၃၈</a>
                                        <a href="" class="btn-bv">၃၉</a>
                                        <a href="" class="btn-bv">၄၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၄၁</a>
                                        <a href="" class="btn-bv">၄၂</a>
                                        <a href="" class="btn-bv">၄၃</a>
                                        <a href="" class="btn-bv">၄၄</a>
                                        <a href="" class="btn-bv">၄၅</a>
                                        <a href="" class="btn-bv">၄၆</a>
                                        <a href="" class="btn-bv">၄၇</a>
                                        <a href="" class="btn-bv">၄၈</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-daniel" role="tabpanel" aria-labelledby="list-daniel-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-hosea" role="tabpanel" aria-labelledby="list-hosea-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-joel" role="tabpanel" aria-labelledby="list-joel-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-amos" role="tabpanel" aria-labelledby="list-amos-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-obadiah" role="tabpanel" aria-labelledby="list-obadiah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-jonah" role="tabpanel" aria-labelledby="list-jonah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-micah" role="tabpanel" aria-labelledby="list-micah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-nahum" role="tabpanel" aria-labelledby="list-nahum-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-habakkuk" role="tabpanel" aria-labelledby="list-habakkuk-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-zephaniah" role="tabpanel" aria-labelledby="list-zephaniah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-haggai" role="tabpanel" aria-labelledby="list-haggai-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-zechariah" role="tabpanel" aria-labelledby="list-zechariah-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                      </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="list-malachi" role="tabpanel" aria-labelledby="list-malachi-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <!-- New testament -->
        <div class="new-test">
          <div class="modal fade" id="new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ဓမ္မသစ်ကျမ်း</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-4">
                          <div class="list-group scrollspy-example" id="list-tab" role="tablist" data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="0">
                            <a class="list-group-item list-group-item-action active" id="list-matthew-list" data-bs-toggle="list" href="#list-matthew" role="tab" aria-controls="matthew">ရှင်မဿဲခရစ်ဝင်</a>
                            <a class="list-group-item list-group-item-action" id="list-mark-list" data-bs-toggle="list" href="#list-mark" role="tab" aria-controls="mark">ရှင်မာကုခရစ်ဝင်</a>
                            <a class="list-group-item list-group-item-action" id="list-luke-list" data-bs-toggle="list" href="#list-luke" role="tab" aria-controls="luke">ရှင်လုကာခရစ်ဝင်</a>
                            <a class="list-group-item list-group-item-action" id="list-john-list" data-bs-toggle="list" href="#list-john" role="tab" aria-controls="john">ရှင်ယောဟန်ခရစ်ဝင်</a>
                            <a class="list-group-item list-group-item-action" id="list-acts-list" data-bs-toggle="list" href="#list-acts" role="tab" aria-controls="acts">တမန်တော်ဝတ္ထု</a>
                            <a class="list-group-item list-group-item-action" id="list-romans-list" data-bs-toggle="list" href="#list-romans" role="tab" aria-controls="romans">ရောမဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-corinthians1-list" data-bs-toggle="list" href="#list-corinthians1" role="tab" aria-controls="corinthians1">ကောရိန္သုဩဝါဒစာပဌမစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-corinthians2-list" data-bs-toggle="list" href="#list-corinthians2" role="tab" aria-controls="corinthians2">ကောရိန္သုဩဝါဒစာဒုတိယစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-galatians-list" data-bs-toggle="list" href="#list-galatians" role="tab" aria-controls="galatians">ဂလာတိဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-ephesians-list" data-bs-toggle="list" href="#list-ephesians" role="tab" aria-controls="ephesians">ဧဖက်ဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-philippians-list" data-bs-toggle="list" href="#list-philippians" role="tab" aria-controls="philippians">ဖိလိပ္ပဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-colossians-list" data-bs-toggle="list" href="#list-colossians" role="tab" aria-controls="colossians">ကောလောသဲဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-thessalonians1-list" data-bs-toggle="list" href="#list-thessalonians1" role="tab" aria-controls="thessalonians1">သက်သာလောနိတ်ဩဝါဒစာပဌမစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-thessalonians2-list" data-bs-toggle="list" href="#list-thessalonians2" role="tab" aria-controls="thessalonians2">သက်သာလောနိတ်ဩဝါဒစာဒုတိယစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-timothy1-list" data-bs-toggle="list" href="#list-timothy1" role="tab" aria-controls="timothy1">တိမောသေဩဝါဒစာပဌမစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-timothy2-list" data-bs-toggle="list" href="#list-timothy2" role="tab" aria-controls="timothy2">တိမောသေဩဝါဒစာဒုတိယစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-titus-list" data-bs-toggle="list" href="#list-titus" role="tab" aria-controls="titus">တိတုဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-philemon-list" data-bs-toggle="list" href="#list-philemon" role="tab" aria-controls="philemon">ဖိလေမုန်ဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-hebrews-list" data-bs-toggle="list" href="#list-hebrews" role="tab" aria-controls="hebrews">ဟေဗြဲဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-james-list" data-bs-toggle="list" href="#list-james" role="tab" aria-controls="james">ရှင်ယာကုပ်ဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-peter1-list" data-bs-toggle="list" href="#list-peter1" role="tab" aria-controls="peter1">ရှင်ပေတရုဩဝါဒစာပဌမစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-peter2-list" data-bs-toggle="list" href="#list-peter2" role="tab" aria-controls="peter2">ရှင်ပေတရုဩဝါဒစာဒုတိယစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-john1-list" data-bs-toggle="list" href="#list-john1" role="tab" aria-controls="john1">ရှင်ယောဟန်ဩဝါဒစာပဌမစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-john2-list" data-bs-toggle="list" href="#list-john2" role="tab" aria-controls="john2">ရှင်ယောဟန်ဩဝါဒစာဒုတိယစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-john3-list" data-bs-toggle="list" href="#list-john3" role="tab" aria-controls="john3">ရှင်ယောဟန်ဩဝါဒစာတတိယစောင်</a>
                            <a class="list-group-item list-group-item-action" id="list-jude-list" data-bs-toggle="list" href="#list-jude" role="tab" aria-controls="jude">ရှင်ယုဒဩဝါဒစာ</a>
                            <a class="list-group-item list-group-item-action" id="list-revelation-list" data-bs-toggle="list" href="#list-revelation" role="tab" aria-controls="revelation">ဗျာဒိတ်ကျမ်း</a>
                          </div>
                        </div>
                        <div class="col-8">
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-matthew" role="tabpanel" aria-labelledby="list-matthew-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                        <a href="" class="btn-bv">၁၇</a>
                                        <a href="" class="btn-bv">၁၈</a>
                                        <a href="" class="btn-bv">၁၉</a>
                                        <a href="" class="btn-bv">၂၀</a>
                                      </div>
                                      <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၂၁</a>
                                        <a href="" class="btn-bv">၂၂</a>
                                        <a href="" class="btn-bv">၂၃</a>
                                        <a href="" class="btn-bv">၂၄</a>
                                        <a href="" class="btn-bv">၂၅</a>
                                        <a href="" class="btn-bv">၂၆</a>
                                        <a href="" class="btn-bv">၂၇</a>
                                        <a href="" class="btn-bv">၂၈</a>
                                      </div>    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-mark" role="tabpanel" aria-labelledby="list-mark-list">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁</a>
                                      <a href="" class="btn-bv">၂</a>
                                      <a href="" class="btn-bv">၃</a>
                                      <a href="" class="btn-bv">၄</a>
                                      <a href="" class="btn-bv">၅</a>
                                      <a href="" class="btn-bv">၆</a>
                                      <a href="" class="btn-bv">၇</a>
                                      <a href="" class="btn-bv">၈</a>
                                      <a href="" class="btn-bv">၉</a>
                                      <a href="" class="btn-bv">၁၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                        <a href="" class="btn-bv">၁၁</a>
                                        <a href="" class="btn-bv">၁၂</a>
                                        <a href="" class="btn-bv">၁၃</a>
                                        <a href="" class="btn-bv">၁၄</a>
                                        <a href="" class="btn-bv">၁၅</a>
                                        <a href="" class="btn-bv">၁၆</a>
                                      </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-luke" role="tabpanel" aria-labelledby="list-luke-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                      <a href="" class="btn-bv">၁၄</a>
                                      <a href="" class="btn-bv">၁၅</a>
                                      <a href="" class="btn-bv">၁၆</a>
                                      <a href="" class="btn-bv">၁၇</a>
                                      <a href="" class="btn-bv">၁၈</a>
                                      <a href="" class="btn-bv">၁၉</a>
                                      <a href="" class="btn-bv">၂၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၂၁</a>
                                      <a href="" class="btn-bv">၂၂</a>
                                      <a href="" class="btn-bv">၂၃</a>
                                      <a href="" class="btn-bv">၂၄</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-john" role="tabpanel" aria-labelledby="list-john-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                      <a href="" class="btn-bv">၁၄</a>
                                      <a href="" class="btn-bv">၁၅</a>
                                      <a href="" class="btn-bv">၁၆</a>
                                      <a href="" class="btn-bv">၁၇</a>
                                      <a href="" class="btn-bv">၁၈</a>
                                      <a href="" class="btn-bv">၁၉</a>
                                      <a href="" class="btn-bv">၂၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၂၁</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-acts" role="tabpanel" aria-labelledby="list-acts-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                      <a href="" class="btn-bv">၁၄</a>
                                      <a href="" class="btn-bv">၁၅</a>
                                      <a href="" class="btn-bv">၁၆</a>
                                      <a href="" class="btn-bv">၁၇</a>
                                      <a href="" class="btn-bv">၁၈</a>
                                      <a href="" class="btn-bv">၁၉</a>
                                      <a href="" class="btn-bv">၂၀</a>
                                    </div>
                                    <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၂၁</a>
                                      <a href="" class="btn-bv">၂၂</a>
                                      <a href="" class="btn-bv">၂၃</a>
                                      <a href="" class="btn-bv">၂၄</a>
                                      <a href="" class="btn-bv">၂၅</a>
                                      <a href="" class="btn-bv">၂၆</a>
                                      <a href="" class="btn-bv">၂၇</a>
                                      <a href="" class="btn-bv">၂၈</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-romans" role="tabpanel" aria-labelledby="list-romans-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                      <a href="" class="btn-bv">၁၄</a>
                                      <a href="" class="btn-bv">၁၅</a>
                                      <a href="" class="btn-bv">၁၆</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-corinthians1" role="tabpanel" aria-labelledby="list-corinthians1-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                      <a href="" class="btn-bv">၁၄</a>
                                      <a href="" class="btn-bv">၁၅</a>
                                      <a href="" class="btn-bv">၁၆</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-corinthians2" role="tabpanel" aria-labelledby="list-corinthians2-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-galatians" role="tabpanel" aria-labelledby="list-galatians-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-ephesians" role="tabpanel" aria-labelledby="list-ephesians-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-philippians" role="tabpanel" aria-labelledby="list-philippians-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-colossians" role="tabpanel" aria-labelledby="list-colossians-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-thessalonians1" role="tabpanel" aria-labelledby="list-thessalonians1-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-thessalonians2" role="tabpanel" aria-labelledby="list-thessalonians2-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-timothy1" role="tabpanel" aria-labelledby="list-timothy1-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-timothy2" role="tabpanel" aria-labelledby="list-timothy2-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-titus" role="tabpanel" aria-labelledby="list-titus-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-philemon" role="tabpanel" aria-labelledby="list-philemon-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-hebrews" role="tabpanel" aria-labelledby="list-hebrews-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၁၁</a>
                                      <a href="" class="btn-bv">၁၂</a>
                                      <a href="" class="btn-bv">၁၃</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="list-james" role="tabpanel" aria-labelledby="list-james-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-peter1" role="tabpanel" aria-labelledby="list-peter1-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-peter2" role="tabpanel" aria-labelledby="list-peter2-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-john1" role="tabpanel" aria-labelledby="list-john1-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-john2" role="tabpanel" aria-labelledby="list-john2-list">
                          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                <a href="" class="btn-bv">၁</a>
                              </div>
                          </div>
                            </div>
                            <div class="tab-pane fade" id="list-john3" role="tabpanel" aria-labelledby="list-john3-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-jude" role="tabpanel" aria-labelledby="list-jude-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-revelation" role="tabpanel" aria-labelledby="list-revelation-list">
                              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁</a>
                                    <a href="" class="btn-bv">၂</a>
                                    <a href="" class="btn-bv">၃</a>
                                    <a href="" class="btn-bv">၄</a>
                                    <a href="" class="btn-bv">၅</a>
                                    <a href="" class="btn-bv">၆</a>
                                    <a href="" class="btn-bv">၇</a>
                                    <a href="" class="btn-bv">၈</a>
                                    <a href="" class="btn-bv">၉</a>
                                    <a href="" class="btn-bv">၁၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                    <a href="" class="btn-bv">၁၁</a>
                                    <a href="" class="btn-bv">၁၂</a>
                                    <a href="" class="btn-bv">၁၃</a>
                                    <a href="" class="btn-bv">၁၄</a>
                                    <a href="" class="btn-bv">၁၅</a>
                                    <a href="" class="btn-bv">၁၆</a>
                                    <a href="" class="btn-bv">၁၇</a>
                                    <a href="" class="btn-bv">၁၈</a>
                                    <a href="" class="btn-bv">၁၉</a>
                                    <a href="" class="btn-bv">၂၀</a>
                                  </div>
                                  <div class="btn-group me-0 my-2" role="group" aria-label="First group">
                                      <a href="" class="btn-bv">၂၁</a>
                                      <a href="" class="btn-bv">၂၂</a>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                  </div>
              </div>
        </div>
    <script>
     var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
    <script>
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        $('#myTab a[href="#profile"]').tab('show') // Select tab by name
        $('#myTab li:first-child a').tab('show') // Select first tab
        $('#myTab li:last-child a').tab('show') // Select last tab
        $('#myTab li:nth-child(3) a').tab('show') // Select third tab
    </script>
    {{$slot}}

    <footer class="bg-dark text-center text-lg-start">
            <div class="row">
                <div class="col-2">
                    <a  href="#">
                        <img src="{{asset('Image/loyallogo3.png')}}" height="50" alt="mdb logo" class="my-4">
                    </a>
                </div>

                <div class="col-5">
                    
                </div>
                <div class="col-md-5">
                  <form class="row gy-2 gx-3 align-items-center my-4" action="{{route('subscribe')}}" method="POST">
                 @csrf
                    <div class="col-auto">
                      <input class="form-control " type="email" placeholder="Email address" aria-label="email" name="email">
                    </div>
                    <div class="col-auto">
                      <button class="btn-5 my-2 " type="submit">Subscribe</button>
                    </div>
                  </form>
                  @error("userEmail")
                    <p class="text-danger d-inline ">{{$message}}</p>
                  @enderror
                </div>
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="">loyalland.com</a>
        </div>
    </footer>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>