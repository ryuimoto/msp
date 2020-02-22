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
                        <div class="form-group">
                            <label for="company" class=" form-control-label">商品名</label>
                            <input type="text" id="company" placeholder="例:　洋服" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">購入金額</label>
                            <input type="text" id="vat" placeholder="例:　2,000円" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">売却予定額</label>
                            <input type="text" id="street" placeholder="例:　1,500円" class="form-control">
                        </div>
                        <div class="row form-group">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">ポイント</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="postal-code" class=" form-control-label">売却ステータス</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="0">売却前</option>
                                        <option value="1">売却済み</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="country" class=" form-control-label">メモ</label>
                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                        </div>
                        <div class="row form-group">
                            <div class="col-1 offset-md-11">
                                <button type="button" class="btn btn-success">追加</button>
                            </div>
                        </div>
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