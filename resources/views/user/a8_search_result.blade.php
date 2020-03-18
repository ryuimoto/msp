@extends('user.layouts.main_layout')
@section('title')
    MSP|A8検索
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/user/a8_search_result.css') }}">
@endsection
@section('contents')
  <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <button class="btn btn-primary" onclick="location.href='{{ route('user.a8') }}'">検索に戻る</button>
            </div>
        </div>
        <br>
      <div class="row">
        <div class="col-lg-12">
            @forelse ($result_datas as $key => $result_data)
                <div class="card">
                    <div class="card-header">
                        <strong>No</strong>
                        <small>{{ $key+1 }}</small>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">広告主</label>
                            {{-- <input type="text" id="company" placeholder="Enter your company name" class="form-control"> --}}
                            <h4>{{ $result_data['advertiser'] }}</h4>
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">プログラム名</label>
                            <h4>{{ $result_data['program_name'] }}</h4>
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">対応デバイス</label>
                            <h4>{{ $result_data['corresponding_device'] }}</h4>
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">成果報酬</label>
                            <h4>{{ $result_data['performance_reward'] }}</h4>
                        </div>
                        <div class="form-group">
                            <label for="country" class=" form-control-label">キーワード</label>
                            <h4>{{ $result_data['keyword'] }}</h4>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col-lg-6 offset-md-6">
                        <h4>ヒットしませんでした</h4>
                    </div>
                </div>
            @endforelse
        </div>
      </div>
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