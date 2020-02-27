@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|ユーザー登録
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">ユーザー登録</a>
@endsection
@section('contents')
   <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header card-header-rose card-header-text">
          <div class="card-text">
            <h4 class="card-title">ユーザー情報</h4>
          </div>
        </div>
        <div class="card-body ">
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
          <form method="post" action="{{ route('admin.users_register') }}" class="form-horizontal">
            {{ csrf_field() }}
            <div class="row">
              <label class="col-sm-2 col-form-label">ユーザー名</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">本名</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" name="real_name" value="{{ old('real_name') }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">メールアドレス</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group is-filled">
                  <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">パスワード</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">電話番号</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="tel" name="tel" value="{{ old('tel') }}" class="form-control" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">メモ</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group is-filled">
                  <textarea class="form-control" name="memo" placeholder="3000文字以下" id="" rows="8">{{ old('memo') }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">機能制限</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" name="restriction_flag" checked="">
                      <span class="toggle"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-3 col-form-label">A8アカウント ID</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="text" name="a8_acount_id" value="{{ old('a8_acount_id') }}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <label class="col-sm-3 col-form-label">A8アカウント パス</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="password" name="a8_acount_pass" value="{{ old('a8_acount_pass') }}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-3 col-form-label">楽天アカウント ID</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="text" name="rakuten_acount_id" value="{{ old('rakuten_acount_id') }}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <label class="col-sm-3 col-form-label">楽天アカウント パス</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="password" name="rakuten_acount_pass" value="{{ old('rakuten_acount_pass') }}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">登録</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   </div>
@endsection
@section('js')
  <script>
    $(function(){
      $("#user,#register").addClass('active');
    });
  </script>
@endsection