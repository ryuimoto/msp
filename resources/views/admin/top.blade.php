@extends('admin.layouts.main_layout')
@section('title')
  MSP管理側|トップ
@endsection

@section('item_name')
  <a class="navbar-brand" href="#pablo">Top</a>
@endsection

@section('contents')
    
@endsection
@section('js')
  <script>
    $(function(){
        $("#top").addClass('active');
    });
  </script>
@endsection
