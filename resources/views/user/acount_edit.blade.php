@extends('user.layouts.main_layout')
@section('title')
    MSP|アカウント編集
@endsection
@section('contents')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>アカウント編集</strong>
                    </div>
                    <div class="card-body card-block">
                        @if (session('success_message'))
                            <div class="alert alert-success">
                                {{ session('success_message') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('user.acount_edit') }}" method="post" id="form1">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">ユーザー名(ニックネーム)</label>
                                <input type="text" name="name" value="{{ $user->name }}" placeholder="例:　山田太郎" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">メールアドレス</label>
                                <input type="email" name="email" value="{{ $user->email }}" placeholder="例:　test12345@gmail.com" class="form-control">
                                <input type="hidden" name="email_hidden" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">パスワード</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">パスワードの確認</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" id="edit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> 編集する
                        </button>
                    </div>
                </div>
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
            $('#edit').click(function(){
                $('#form1').submit();
            });
        });
     </script>
@endsection