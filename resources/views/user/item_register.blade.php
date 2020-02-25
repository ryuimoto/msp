@extends('user.layouts.main_layout')
@section('title')
    MSP|アイテム追加
@endsection
@section('contents')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>アイテムを追加</strong>
                    </div>
                    <div class="card-body card-block">
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
                        <form action="{{ route('user.item_register') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="company" class=" form-control-label">商品名</label>
                                <input type="text" id="product_name" name="product_name" placeholder="例:　洋服" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">購入金額</label>
                                <input type="number" id="purchase_price" name="purchase_price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">売却予定額</label>
                                <input type="number" id="expected_sale_price" name="expected_sale_price" class="form-control">
                            </div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="city" class=" form-control-label">ポイント</label>
                                        <input type="number" name="point"  min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="postal-code" class=" form-control-label">売却ステータス</label>
                                        <select name="sale_status" class="form-control">
                                            @forelse ($sale_statuses as $sale_status)
                                                <option value="{{ $sale_status->id }}" @if ($sale_status->id == old('sale_status')) selected @endif>{{ $sale_status->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">メモ</label>
                                <textarea name="memo" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                            </div>
                            <div class="row form-group">
                                <div class="col-1 offset-md-11">
                                    <button type="submit" class="btn btn-success">追加</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
            $("#item,#register").addClass('active');
        });
    </script>
@endsection