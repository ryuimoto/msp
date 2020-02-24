@extends('user.layouts.main_layout')
@section('title')
    MSP|トップページ
@endsection
@section('contents')
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="overview-wrap">
                  <h2 class="title-1">運営からのお知らせ</h2>
              </div>
          </div>
      </div>
      <br>
      @forelse ($notices as $notice)
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">{{  date('Y年m月d日',strtotime($notice->created_at)) }}　{{ $notice->title }}</strong>
              </div>
              <div class="card-body">
                <div class="typo-articles">
                  <p>
                   {{ $notice->contents }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      @empty
        <h4>運営からのお知らせはありません</h4>
      @endforelse
      <div class="row">
        <div class="col-md-7 offset-md-5">
          {{ $notices->links('vendor.pagination.default') }}
        </div>
      </div>
    </div>
    <br>
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
            $("#dashboard").addClass('active');
        });
    </script>
@endsection