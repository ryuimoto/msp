@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|ユーザー登録
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">ユーザー編集</a>
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
          <form method="get" action="/" class="form-horizontal">
            <div class="row">
              <label class="col-sm-2 col-form-label">ユーザー名</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">パスワード</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">電話番号</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">メールアドレス</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group is-filled">
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">メモ</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group is-filled">
                  <textarea class="form-control" name="" placeholder="3000文字以下" id="" rows="8"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-3 col-form-label">A8アカウント ID</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <label class="col-sm-3 col-form-label">A8アカウント パス</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="text" class="form-control" placeholder="">
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
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <label class="col-sm-3 col-form-label">楽天アカウント パス</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">編集</button>
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
      $("#user,#edit").addClass('active');
    });
  </script>
@endsection