@extends('user.layouts.main_layout')
@section('title')
    MSP|ポイント管理
@endsection
@section('contents')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">ポイント集計</strong>
                  </div>
                  <div class="card-body">
                    <div class="typo-headers">
                      {{-- <h1 class="pb-2 display-3">Sections &amp; Modal Names H2</h1> --}}
                      <div class="row">
                        <?php $prev_date = new \Carbon\Carbon($date) ?>
                        <a href="{{ route('user.points_monthly_aggregation',['date' => $prev_date->subMonth()->format('Y年m月')]) }}"><i class="fa fa-arrow-left"></i></a>　
                        <h3>{{ date('Y年m月',  strtotime($date)) }}</h3>　
                        <?php $next_date = new \Carbon\Carbon($date) ?>
                        <a href="{{ route('user.points_monthly_aggregation',['date' => $next_date->addMonth()->format('Y年m月')]) }}"><i class="fa fa-arrow-right"></i></a>
                      </div>
                      <br>
                      <div class="vue-lists">
                        <div class="row">
                          <div class="col-md-5 offset-md-1 text-left">
                            <h3>獲得ポイント</h3>
                          </div>
                          <div class="col-md-4 text-left">
                            <div>
                              <h3>{{ $selling_point }}ポイント</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                    <div class="au-card-title" style="background-image:url('{{ asset('library/CoolAdmin-master/images/bg-title-02.jpg') }}');">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="fas fa-rub"></i>ポイント内訳</h3>
                    </div>
                    <div class="au-task js-list-load">
                        <div class="au-task-list js-scrollbar3">
                            @forelse ($points as $point)
                                <div class="au-task__item au-task__item--primary">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="{{ route('user.item_details',$point->id) }}">{{ $point->product_name }}</a>
                                        </h5>
                                        <span class="time">{{ $point->point }}ポイント</span>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- 時間があれば作る --}}
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="au-card m-b-30">
                    <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <h3 class="title-2 m-b-40">チャート</h3>
                        <canvas id="singelBarChart" height="536" width="1072" class="chartjs-render-monitor" style="display: block; height: 268px; width: 536px;"></canvas>
                    </div>
                </div>
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
            $("#points,#points_aggregate").addClass('active');
        });
    </script>
@endsection