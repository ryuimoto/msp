@extends('user.layouts.main_layout')
@section('title')
    MSP|アイテム一覧
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/user/item_list.css') }}">
@endsection
@section('contents')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-30">
                        <table class="table table-borderless table-data3 text-nowrap">
                            <thead>
                                <tr>
                                    <th>商品名</th>
                                    <th>購入金額</th>
                                    <th>売却予定額</th>
                                    <th>ポイント</th>
                                    <th>売却ステータス</th>
                                    <th width="300">メモ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td class="th-description"><a  href="{{ route('user.item_details',['item_id' => $item->id]) }}">{{ $item->product_name }}</a></td>
                                        <td class="th-description"><a  href="{{ route('user.item_details',['item_id' => $item->id]) }}">{{ number_format($item->purchase_price) }}円</a></td>
                                        <td class="th-description"><a  href="{{ route('user.item_details',['item_id' => $item->id]) }}">{{ number_format($item->expected_sale_price) }}円</a></td>
                                        <td class="th-description"><a  href="{{ route('user.item_details',['item_id' => $item->id]) }}">{{ $item->point }}</a></td>
                                        <td class="th-description"><a  href="{{ route('user.item_details',['item_id' => $item->id]) }}">{{ $item->saleStatus['name'] }}</a></td>
                                        <td width="300"><a href="{{ route('user.item_details',['item_id' => $item->id]) }}">{{ $item->memo }}</a></td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
    
        </div>
    </div> 
@endsection
@section('js')
     <!-- Jquery JS-->
     <script src="{{ asset('library/CoolAdmin-master/vendor/jquery-3.2.1.min.js') }}"></script>
     <!-- Bootstrap JS-->
     <script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
     <!-- Vendor JS       -->
     <script src="{{ asset('library/CoolAdmin-master/vendor/slick/slick.min.js') }}">
     </script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/wow/wow.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/animsition/animsition.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
     </script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js') }}">
     </script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/circle-progress/circle-progress.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js') }}"></script>
     <script src="{{ asset('library/CoolAdmin-master/vendor/select2/select2.min.js') }}">
     </script>
 
     <!-- Main JS-->
     <script src="{{ asset('library/CoolAdmin-master/js/main.js') }}"></script>
     <script>
        $(function(){
            $("#item,#list").addClass('active');
        });
    </script>
@endsection