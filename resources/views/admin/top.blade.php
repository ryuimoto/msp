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
          <h3 class="card-title">184</h3>
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
                  Name
                </th>
                <th>
                  Country
                </th>
                <th>
                  City
                </th>
                <th>
                  Salary
                </th>
              </tr></thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Dakota Rice
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
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Minerva Hooper
                  </td>
                  <td>
                    Curaçao
                  </td>
                  <td>
                    Sinaai-Waas
                  </td>
                  <td>
                    $23,789
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Sage Rodriguez
                  </td>
                  <td>
                    Netherlands
                  </td>
                  <td>
                    Baileux
                  </td>
                  <td>
                    $56,142
                  </td>
                </tr>
                <tr>
                  <td>
                    4
                  </td>
                  <td>
                    Philip Chaney
                  </td>
                  <td>
                    Korea, South
                  </td>
                  <td>
                    Overland Park
                  </td>
                  <td>
                    $38,735
                  </td>
                </tr>
                <tr>
                  <td>
                    5
                  </td>
                  <td>
                    Doris Greene
                  </td>
                  <td>
                    Malawi
                  </td>
                  <td>
                    Feldkirchen in Kärnten
                  </td>
                  <td>
                    $63,542
                  </td>
                </tr>
                <tr>
                  <td>
                    6
                  </td>
                  <td>
                    Mason Porter
                  </td>
                  <td>
                    Chile
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td>
                    $78,615
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
        $("#top").addClass('active');
    });
  </script>
@endsection
