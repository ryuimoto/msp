@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|ユーザー一覧
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">ユーザー一覧</a>
@endsection
@section('contents')
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title ">ユーザーリスト</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <tr><th>
                    ID
                  </th>
                  <th>
                    ユーザー名
                  </th>
                  <th>
                    本名
                  </th>
                  <th>
                    登録アイテム数
                  </th>
                  <th>
                    登録日時
                  </th>
                  <th>
                    最終操作日時
                  </th>
                  <th>
                    最終ログイン日時
                  </th>
                </tr></thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      <a href="{{ route('admin.users_register_edit',['user_id' => 1]) }}">Dakota Rice</a>
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      $36,738
                    </td>
                    <td>
                      9月20日
                    </td>
                    <td>
                      $36,738
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('js')
  <script>
    $(function(){
      $("#user,#list").addClass('active');
    });
  </script>
@endsection