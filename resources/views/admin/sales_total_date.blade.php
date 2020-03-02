@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|全ユーザーセールス集計
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin/users_list.css') }}">
@endsection
@section('item_name')
  <a class="navbar-brand" href="#pablo">全ユーザーセールス集計</a>
@endsection
@section('contents')
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <div class="page-categories">
        <div class="tab-content tab-space tab-subcategories">
          <div class="tab-pane" id="link7">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Description about product</h4>
                <p class="card-category">
                  More information here
                </p>
              </div>
              <div class="card-body">
                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                <br>
                <br> Dramatically visualize customer directed convergence without revolutionary ROI.
              </div>
            </div>
          </div>
          <div class="tab-pane active" id="link8">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-9">
                    <div class="row">
                      <?php $prev_date = new \Carbon\Carbon($date) ?>
                      <a href="{{ route('admin.sales_total_monthly',['date' => $prev_date->subMonth()->format('Y年m月')]) }}"><i class="material-icons">navigate_before</i></a>
                      <h4 class="card-title">{{ date('Y年m月',  strtotime($date)) }}</h4>
                      <?php $next_date = new \Carbon\Carbon($date) ?>
                      <a href="{{ route('admin.sales_total_monthly',['date' => $next_date->addMonth()->format('Y年m月')]) }}"><i class="material-icons">navigate_next</i></a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="row">
                      <form action="{{ route('admin.sales_total') }}" method="get">
                        <div class="row">
                          <input type="search" class="form-control form-control-sm" name="search" placeholder="年と月で検索" aria-controls="datatables">
                          <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="typography">
                  <div class="row">
                    <div class="col-md-9 offset-md-3">
                      <div class="tim-typo">
                        <h2>
                          <span class="tim-note">セールス金額</span>{{ number_format($sales_amount) }}円
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="link9">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Legal info of the product</h4>
                <p class="card-category">
                  More information here
                </p>
              </div>
              <div class="card-body">
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <br>
                <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
              </div>
            </div>
          </div>
          <div class="tab-pane" id="link10">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Help center</h4>
                <p class="card-category">
                  More information here
                </p>
              </div>
              <div class="card-body">
                From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
                <br>
                <br> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">セールスリスト</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="datatables_filter" class="dataTables_filter"><label><span class="bmd-form-group bmd-form-group-sm"></span></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
              <thead>
                <tr role="row">
                  <th rowspan="1" colspan="1" style="width: 231px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                  <th rowspan="1" colspan="1" style="width: 337px;" aria-label="Position: activate to sort column ascending">ユーザー名</th>
                  <th rowspan="1" colspan="1" style="width: 174px;" aria-label="Office: activate to sort column ascending">セールス金額</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($users as $user)
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1"><a id="big" href="{{ route('admin.individual_total',['user_id' => $user->user->id ]) }}">{{ $user->user->id }}</a></td>
                    <td><a id="big" href="{{ route('admin.individual_total',['user_id' => $user->user->id]) }}">{{ $user->user->name }}</a></td>
                    <td><a id="big" href="{{ route('admin.individual_total',['user_id' => $user->user->id]) }}">{{ number_format($user->expected_sale_price) }}</a></td>
                  </tr>
                @empty
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 offset-md-5">
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
   </div>
@endsection
@section('js')
  <script>
    $(function(){
      $("#sales,#sales_total").addClass('active');
    });
  </script>
@endsection