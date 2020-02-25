@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|トップ
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">Top</a>
@endsection
@section('contents')
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="material-icons">accessibility</i>
          </div>
          <p class="card-category">総ユーザー数</p>
          <h3 class="card-title">{{ $user_countns }}人</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons text-danger">warning</i>
            <a href="#pablo">Get More Space...</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title ">アイテム登録数が多いユーザー</h4>
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
              </tr></thead>
              <tbody>
                @forelse ($users as $user)
                  <tr>
                    <td>
                      {{ $user->id }}
                    </td>
                    <td>
                      {{ $user->name }}
                    </td>
                  </tr>
                @empty
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        {{ $users->links() }}
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script>
    $(function(){
        $("#top").addClass('active');
    });
  </script>
@endsection
