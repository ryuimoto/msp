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
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">ユーザーリスト</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6 offset-md-6">
                  <div id="datatables_filter" class="dataTables_filter">
                    <label>
                      <span class="bmd-form-group bmd-form-group-sm">
                        <form action="{{ route('admin.users_list') }}" method="get">
                          {{ csrf_field() }}
                          <input type="search" class="form-control form-control-sm" name="search" placeholder="Search records" aria-controls="datatables">
                          <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                          </button>
                        </form>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ユーザー名</th>
                      <th>本名</th>
                      <th>登録アイテム数</th>
                      <th>登録日時</th>
                      <th>最終操作日時</th>
                      <th class="disabled-sorting text-right">最終ログイン日時</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users as $user)
                    <tr role="row" class="even">
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
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-md-7 offset-md-5">
                  {{ $users->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>
@endsection
@section('js')
  <script>
    $(function(){
      $("#user,#list").addClass('active');
    });
  </script>
@endsection