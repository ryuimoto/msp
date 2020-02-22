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
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <strong class="card-title">3/27(水)　ポイント利用について</strong>
                    </div>
  
                    <div class="card-body">
                      <div class="typo-articles">
                      <p>
                        当サイトは、PONEY（ポニー）というポイントサイトです。
                        会員登録の時点で、商品や現金をプレゼントするといったキャンペーンは行っておりませんのでご注意ください。
                        
                        お客様が下記に該当する場合は、「お問い合わせフォーム」 までご連絡くださいませ。
                        
                        ■ 商品や現金が当選したとの連絡を受け、当サイトへ会員登録を行った。
                        ■ 意図せず会員登録を行ってしまった。
                        ■ 意図せず当サイトへ誘導されてしまった。
                        
                        お心当たりや不審な誘導を受けてしまった場合は、PONEYの「お問い合わせフォーム」 まで情報をお寄せください。
                        会員登録の解除を、当サイトで対応いたします。
                        また、お問い合わせの際に、当サイトへ意図しない会員登録にいたった原因の投稿内容やDMの
                        キャプチャー画像や、文章の添付・コピーがありましたら、一緒にお寄せください。
                        
                        みなさまにはご不便、ご迷惑をおかけいたしますが、ご理解ご協力のほど何卒よろしくお願い申し上げます。
                      </p>
                      </div>
                    </div>
                  </div>
  
  
                </div>
              </div>
            <br>
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
            $("#dashboard").addClass('active');
        });
    </script>
@endsection