@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|管理者情報編集
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">管理者情報編集</a>
@endsection
@section('contents')
<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-rose card-header-text">
      <div class="card-text">
        <h4 class="card-title">管理者情報</h4>
      </div>
    </div>
    <div class="card-body ">
      <form method="get" action="/" class="form-horizontal">
        <div class="row">
          <label class="col-sm-2 col-form-label">アカウント名</label>
          <div class="col-sm-10">
            <div class="form-group bmd-form-group">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">新しいパスワード</label>
          <div class="col-sm-10">
            <div class="form-group bmd-form-group">
              <input type="password" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">新しいパスワード確認</label>
          <div class="col-sm-10">
            <div class="form-group bmd-form-group">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
        </div>  
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-md-9 offset-md-3">
          <button type="submit" class="btn btn-fill btn-rose">編集する</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection