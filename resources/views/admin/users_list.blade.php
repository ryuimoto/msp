@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|ユーザー一覧
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin/users_list.css') }}">
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">ユーザー一覧</a>
@endsection
@section('contents')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">ユーザーリスト</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-shopping text-nowrap">
              <thead>
                <tr>
                  <th class="th-description">ID</th>
                  <th class="th-description">ユーザー名</th>
                  <th class="th-description">本名</th>
                  <th class="th-description">登録アイテム数</th>
                  <th class="th-description">登録日時</th>
                  <th class="th-description">最終操作日時</th>
                  <th class="th-description">最終ログイン日時</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($users as $user)
                <tr role="row" class="even" >
                  <td class="sorting_1" tabindex="0"><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ $user->id }}</a></td>
                  <td><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ $user->name }}</a></td>
                  <td><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ $user->real_name }}</a></td>
                  <td><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ $user->item_count }}</a></td>
                  <td><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ date('Y/m/d',  strtotime($user->created_at)) }}</a></td>
                  <td><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ date('Y/m/d',  strtotime($user->last_operation_date)) }}</a></td>
                  <td class="text-right"><a id="big" href="{{ route('admin.users_edit',$user->id) }}">{{ date('Y/m/d',  strtotime($user->last_login_date)) }}</a></td>
                </tr>
                @empty
                @endforelse
                {{-- <tr>
                  <td>
                    <div class="img-container">
                      <img src="../../assets/img/product1.jpg" alt="...">
                    </div>
                  </td>
                  <td class="td-name">
                    <a href="#jacket">Spring Jacket</a>
                    <br />
                    <small>by Dolce&Gabbana</small>
                  </td>
                  <td>
                    Red
                  </td>
                  <td>
                    M
                  </td>
                  <td class="td-number text-right">
                    <small>&euro;</small>549
                  </td>
                  <td class="td-number">
                    1
                    <div class="btn-group btn-group-sm">
                      <button class="btn btn-round btn-info"> <i class="material-icons">remove</i> </button>
                      <button class="btn btn-round btn-info"> <i class="material-icons">add</i> </button>
                    </div>
                  </td>
                  <td class="td-number">
                    <small>&euro;</small>549
                  </td>
                  <td class="td-actions">
                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr> --}}
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