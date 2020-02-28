@extends('user.layouts.main_layout')
@section('title')
    MSP|A8検索
@endsection
@section('contents')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">プログラム検索</div>
                    <div class="card-body">
                        <form action="" method="post" novalidate="novalidate">
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">キーワードを入力</label>
                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-lock fa-search"></i>&nbsp;
                                    <span id="payment-button-amount">検索</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          @forelse ($categorys['category1'] as $category1)
            <div class="col-lg-4">
              <div class="card ">
                  <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                    <h5 class="mb-0">
                      <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1">{{ $category1->parent_name }} </a>
                    </h5>
                  </div><!-- /.card-header -->
                  <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"> 
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="check1a">
                          <label class="form-check-label" for="check1a"></label>
                        </div>
                      </li>
                    </ul>
                  </div><!-- /.collapse -->
              </div><!-- /.card -->
            </div>
          @empty
          @endforelse
          {{-- <div class="col-lg-4">
              <div class="card ">
                  <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                    <h5 class="mb-0">
                      <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 金融 </a>
                    </h5>
                  </div><!-- /.card-header -->
                  <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">すべて</label>
                          </div>
                      </li>
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">総合（健康）</label>
                            </div>
                      </li>
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">医療</label>
                          </div>
                      </li>
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">健康グッズ</label>
                          </div>
                      </li>
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">その他（健康）</label>
                          </div>
                      </li>
                    </ul>
                  </div><!-- /.collapse -->
              </div><!-- /.card -->
          </div>
          <div class="col-lg-4">
              <div class="card ">
                  <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                    <h5 class="mb-0">
                      <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 総合通販 </a>
                    </h5>
                  </div><!-- /.card-header -->
                  <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">すべて</label>
                          </div>
                      </li>
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">Check A</label>
                            </div>
                      </li>
                      <li class="list-group-item"> 
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="check1a">
                              <label class="form-check-label" for="check1a">Check A</label>
                            </div>
                      </li>
                    </ul>
                  </div><!-- /.collapse -->
              </div><!-- /.card -->
          </div> --}}
        </div>
        {{-- <div class="row">
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                      <h5 class="mb-0">
                        <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 金融・投資・保険 </a>
                      </h5>
                    </div><!-- /.card-header -->
                    <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <input class="form-check-input" type="checkbox" id="check1a" checked>
                            <label class="form-check-label" for="check1a">Check A</label></li>
                        <li class="list-group-item">frgr</li>
                        <li class="list-group-item">リスト3</li>
                      </ul>
                    </div><!-- /.collapse -->
                </div><!-- /.card -->
            </div>
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                      <h5 class="mb-0">
                        <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 総合通販 </a>
                      </h5>
                    </div><!-- /.card-header -->
                    <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <input class="form-check-input" type="checkbox" id="check1a" checked>
                            <label class="form-check-label" for="check1a">Check A</label></li>
                        <li class="list-group-item">frgr</li>
                        <li class="list-group-item">リスト3</li>
                      </ul>
                    </div><!-- /.collapse -->
                </div><!-- /.card -->
            </div>
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                      <h5 class="mb-0">
                        <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 総合通販 </a>
                      </h5>
                    </div><!-- /.card-header -->
                    <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <input class="form-check-input" type="checkbox" id="check1a" checked>
                            <label class="form-check-label" for="check1a">Check A</label></li>
                        <li class="list-group-item">frgr</li>
                        <li class="list-group-item">リスト3</li>
                      </ul>
                    </div><!-- /.collapse -->
                </div><!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                      <h5 class="mb-0">
                        <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 総合通販 </a>
                      </h5>
                    </div><!-- /.card-header -->
                    <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">すべて</li>
                        <li class="list-group-item">frgr</li>
                        <li class="list-group-item">リスト3</li>
                      </ul>
                    </div><!-- /.collapse -->
                </div><!-- /.card -->
            </div>
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                      <h5 class="mb-0">
                        <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 総合通販 </a>
                      </h5>
                    </div><!-- /.card-header -->
                    <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">すべて</li>
                        <li class="list-group-item">frgr</li>
                        <li class="list-group-item">リスト3</li>
                      </ul>
                    </div><!-- /.collapse -->
                </div><!-- /.card -->
            </div>
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                      <h5 class="mb-0">
                        <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 総合通販 </a>
                      </h5>
                    </div><!-- /.card-header -->
                    <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">すべて</li>
                        <li class="list-group-item">frgr</li>
                        <li class="list-group-item">リスト3</li>
                      </ul>
                    </div><!-- /.collapse -->
                </div><!-- /.card -->
            </div>
        </div> --}}
    </div>
</div> 
@endsection
@section('js')
     <!-- Jquery JS-->
     <script src="{{ asset('library/CoolAdmin-master/vendor/jquery-3.2.1.min.js') }}"></script>
     <!-- Bootstrap JS-->
     <script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
     <!-- Vendor JS       -->
     <script src="{{ asset('library/CoolAdmin-master/vendor/slick/slick.min.js') }}">
     </script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/wow/wow.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/animsition/animsition.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
     </script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js') }}">
     </script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/circle-progress/circle-progress.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/select2/select2.min.js') }}">
     </script>
 
     <!-- Main JS-->
     <script src="{{ asset('library/CoolAdmin-master/js/main.js') }}"></script>
     <script>
        $(function(){
            $("#search,#a8").addClass('active');
            // if(!confirm('A8.netのページに移動します。よろしいですか？')){
            //     return false;
            // }else{
            //     location.href = 'https://pub.a8.net/a8v2/asSearchAction.do';
            // }
        });
    </script>
@endsection