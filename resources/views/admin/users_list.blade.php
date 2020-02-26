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
        <div class="card-header card-header-rose card-header-icon">
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
                <div class="col-sm-12">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
              <thead>
                <tr role="row">
                  <th wspan="1" colspan="1" style="width: 191px;">ID</th>
                  <th  aria-controls="datatables" rowspan="1" colspan="1" style="width: 280px;" aria-label="Position: activate to sort column ascending">ユーザー名</th>
                  <th  aria-controls="datatables" rowspan="1" colspan="1" style="width: 280px;" aria-label="Position: activate to sort column ascending">本名</th>
                  <th  aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;" aria-label="Office: activate to sort column ascending">登録アイテム数</th>
                  <th  aria-controls="datatables" rowspan="1" colspan="1" style="width: 123px;" aria-label="Age: activate to sort column ascending">登録日時</th>
                  <th  aria-controls="datatables" rowspan="1" colspan="1" style="width: 123px;" aria-label="Date: activate to sort column ascending">最終操作日時</th>
                  <th class="text-right" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 223px;" aria-label="Actions: activate to sort column ascending">最終ログイン日時</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($users as $user)
                  <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->real_name }}</td>
                    <td>{{ $user->item_count }}</td>
                    <td>{{ date('Y/m/d',  strtotime($user->created_at)) }}</td>
                    <td>{{ date('Y/m/d',  strtotime($user->last_operation_date)) }}</td>
                    <td class="text-right">{{ date('Y/m/d',  strtotime($user->last_login_date)) }}</td>
                  </tr>
                @empty
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-6">
            {{ $users->links() }}
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