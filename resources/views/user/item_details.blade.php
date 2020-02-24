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
                        <strong>アイテムの詳細</strong>
                    </div>
                    <div class="card-body card-block">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label class=" form-control-label">商品名</label>
                                <input type="text" id="product_name" name="product_name" value="{{ $item->product_name }}" placeholder="例:　洋服" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">購入金額</label>
                                <input type="text" id="purchase_price" name="purchase_price" value="{{ $item->purchase_price }}" placeholder="例:　2,000円" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">売却予定額</label>
                                <input type="text" id="expected_sale_price" name="expected_sale_price" value="{{  $item->expected_sale_price }}" placeholder="例:　1,500円" class="form-control">
                            </div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class=" form-control-label">ポイント</label>
                                        <input type="number" name="point" value="{{ $item->point }}" min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="postal-code" class=" form-control-label">売却ステータス</label>
                                        <select name="sale_status" class="form-control">
                                            @forelse ($sale_statuses as $sale_status)
                                                <option value="{{ $sale_status->id }}" @if ($sale_status->id == old('sale_status',$item->sale_status)) selected @endif>{{ $sale_status->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">メモ</label>
                                <textarea name="memo" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{ $item->memo }}</textarea>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-2 offset-md-10">
                                    <button type="submit" name="edit" value="{{ $item->id }}" class="btn btn-success">編集</button>
                                    <button type="button" name="delete" data-toggle="modal" data-target="#deleteModal" value="{{ $item->id }}" class="btn btn-danger">削除</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">アイテムを削除します。よろしいですか？</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">削除</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
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