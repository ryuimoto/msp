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
          <form method="post" id="form1" action="{{ route('admin.users_edit',$data->id) }}" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
              <input type="hidden" name="id" value="{{ $data->id }}">
              <label class="col-sm-2 col-form-label">ユーザー名</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">本名</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" name="real_name" value="{{ $data->real_name }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">パスワード</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="password" name="password" value="{{ $data->password }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">電話番号</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" name="tel" placeholder="" value="{{ $data->tel }}">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">メールアドレス</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group is-filled">
                  <input type="text" class="form-control" placeholder="" name="email" value="{{ $data->email }}">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">メモ</label>
              <div class="col-sm-10">
                <div class="form-group bmd-form-group is-filled">
                  <textarea class="form-control" name="memo" placeholder="3000文字以下" id="" rows="8">{{ $data->memo }}</textarea>
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
                      <input type="text" class="form-control" placeholder="" name="a8_acount_id" value="{{ $data->a8_acount_id }}">
                    </div>
                  </div>
                </div>
              </div>
              <label class="col-sm-3 col-form-label">A8アカウント パス</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="password" class="form-control" placeholder="" name="a8_acount_pass" value="{{ $data->a8_acount_pass }}">
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
                      <input type="text" class="form-control" placeholder="" name="rakuten_acount_id" value="{{ $data->rakuten_acount_id }}">
                    </div>
                  </div>
                </div>
              </div>
              <label class="col-sm-3 col-form-label">楽天アカウント パス</label>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input type="password" class="form-control" placeholder="" name="rakuten_acount_pass" value="{{ $data->rakuten_acount_pass }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" name="edit" value="{{ $data->id }}" class="btn btn-rose">編集</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">削除</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   </div>
   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ユーザーを削除しますか？</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
          <button type="button" class="btn btn-primary" id="delete">削除</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script>
    $(function(){
      $("#user,#edit").addClass('active');
      $("#delete").click(function(){
        $("#form1").submit();
      });
    });
  </script>
@endsection