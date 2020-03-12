@extends('user.layouts.main_layout')
@section('title')
    MSP|A8検索
@endsection
@section('contents')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">プログラム検索</div>
                <div class="card-body">
                  <form name="ads_search_form" method="post" accept-charset="EUC-JP" target="_blank" action="{{ route('user.a8') }}">
                  {{-- <form name="ads_search_form" method="post" target="_blank" accept-charset="EUC-JP" action="https://pub.a8.net/a8v2/asSearchAction.do"> --}}
                    {{ csrf_field() }}
                    <input type="hidden" name="act" value="search">
                    <input type="hidden" name="searchTarget" value="">
                    <input type="hidden" name="phrase" value="">
                    <input type="hidden" name="enc" value="">
                    {{-- <input maxlength="40" type="text" name="keyword" id="headerSearchKeyword" value=""> --}}
                    <div class="form-group">
                      <label for="cc-payment" class="control-label mb-1">キーワードを入力</label>
                      <input id="cc-pament" name="keyword" type="text" id="headerSearchKeyword" value="" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="検 索" onclick="return ads_search();" class="searchBtn btn btn-lg btn-info btn-block">
                    </div>
                    <input type="text" style="display: none;" name="dummy">
                    <input type="hidden" name="buttonId" value="1" />
                    <input type="hidden" name="clickInsId" />
                    <input type="hidden" name="clickCategoryCode" />
                    <input type="hidden" name="clickRelationalEcsSubCategoryCode" />
                    <input type="hidden" name="pageNo" />
                    <input type="hidden" name="viewType" />
                    <input type="hidden" name="sealed" value="27031516741227" />
                    <input type="hidden" name="programType" />
                    <input type="hidden" name="new" />
                    <input type="hidden" name="autoAgreement" />
                    <input type="hidden" name="supportedFlgSp" />
                    <input type="hidden" name="supportedFlgMb" />
                    <input type="hidden" name="spSupportFlg" />
                    <input type="hidden" name="twitterType" />
                    <input type="hidden" name="campaign" />
                    <input type="hidden" name="pprStar" />
                    <input type="hidden" name="adType" />
                    <input type="hidden" name="click" />
                    <input type="hidden" name="cooperationStatus" />
                    <input type="hidden" name="wchanceFlg" />
                    <input type="hidden" name="ecsMainCtgCd"/>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#sougoutuuhan" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1">総合通販 </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="sougoutuuhan" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" name="ecsMainCtgCd" value="01" type="checkbox" id="catAll01" name="ecsMainCtgCd">
                      <label class="form-check-label" for="catAll01">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="01" id="ctg01" >
                      <label class="form-check-label" for="ctg01">ショッピングモール</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="02" id="ctg02">
                      <label class="form-check-label" for="ctg02">百貨店・デパート</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
        </div>
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#kinyuu_tousi_hoken" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 金融・投資・保険 </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="kinyuu_tousi_hoken" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                      <div class="form-check">
                          <input class="form-check-input" name="ecsMainCtgCd" value="07"  type="checkbox" id="catAll07">
                          <label class="form-check-label" for="catAll07">すべて</label>
                      </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="23" id="ctg23">
                        <label class="form-check-label" for="ctg23">総合（金融・投資・保険）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="24" id="ctg24">
                        <label class="form-check-label" for="ctg24">金融</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="25" id="ctg25">
                        <label class="form-check-label" for="ctg25">投資</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="26" id="ctg26">
                        <label class="form-check-label" for="ctg26">保険</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="27" id="ctg27">
                        <label class="form-check-label" for="ctg27">その他（金融・投資・保険）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#intarnetsetuzoku" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> インターネット接続 </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="intarnetsetuzoku" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="13" id="catAll13">
                          <label class="form-check-label" for="catAll13">すべて</label>
                      </div>
                  </li>
                  <li class="list-group-item"> 
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="4F" id="ctg4F">
                          <label class="form-check-label" for="ctg4F">総合（インターネット接続）</label>
                        </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="50" id="ctg50">
                      <label class="form-check-label" for="ctg50">wifi</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="51" id="ctg51">
                      <label class="form-check-label" for="ctg51">プロバイダー</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">回線</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（インターネット接続）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                  <h5 class="mb-0">
                    <a href="#kenkou" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 健康 </a>
                  </h5>
                </div><!-- /.card-header -->
                <div class="collapse" role="tabpanel" id="kenkou" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="02" id="catAll02">
                        <label class="form-check-label" for="catAll02">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="ecsCtgCd" value="03" id="ctg03">
                        <label class="form-check-label" for="ctg03">総合（健康）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="04" id="ctg04">
                        <label class="form-check-label" for="ctg04">医療</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="05" id="ctg05">
                        <label class="form-check-label" for="ctg05">健康グッズ</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="06" id="ctg06">
                        <label class="form-check-label" for="ctg06">健康食品</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="07" id="ctg07">
                        <label class="form-check-label" for="ctg07">その他（健康）</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.collapse -->
            </div><!-- /.card -->
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                  <h5 class="mb-0">
                    <a href="#hudousan_hikkosi" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 不動産・引越 </a>
                  </h5>
                </div><!-- /.card-header -->
                <div class="collapse" role="tabpanel" id="hudousan_hikkosi" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="08" id="catAll08">
                        <label class="form-check-label" for="catAll08">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="28" id="ctg28">
                        <label class="form-check-label" for="ctg28">総合（不動産・引越）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="29" id="ctg29>
                        <label class="form-check-label" for="ctg29">物件</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="2A" id="ctg2A">
                        <label class="form-check-label" for="ctg2A">引越</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="2B" id="ctg2B">
                        <label class="form-check-label" for="ctg2B">その他（不動産・引越）</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.collapse -->
            </div><!-- /.card -->
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                  <h5 class="mb-0">
                    <a href="#collapseListGroup1" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> エンタメ </a>
                  </h5>
                </div><!-- /.card-header -->
                <div class="collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="14" id="catAll14">
                        <label class="form-check-label" for="catAll14">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="54" id="ctg54">
                        <label class="form-check-label" for="ctg54">総合（エンタメ）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" iname="ecsCtgCd" value="55" id="ctg55">
                        <label class="form-check-label" for="ctg55">動画</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="56" id="ctg56">
                        <label class="form-check-label" for="ctg56">ギャンブル</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="57" id="ctg57">
                        <label class="form-check-label" for="ctg57">グッズ</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="58" id="ctg58">
                        <label class="form-check-label" for="ctg58">ゲーム</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="59" id="ctg59">
                        <label class="form-check-label" for="ctg59">音楽</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="5A" id="ctg5A">
                        <label class="form-check-label" for="ctg5A">書籍・本</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="5B" id="ctg5B">
                        <label class="form-check-label" for="ctg5B">占い</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="5C" id="ctg5C">
                        <label class="form-check-label" for="ctg5C">その他（エンタメ）</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.collapse -->
            </div><!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                  <h5 class="mb-0">
                    <a href="#biyou" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 美容 </a>
                  </h5>
                </div><!-- /.card-header -->
                <div class="collapse" role="tabpanel" id="biyou" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="03" id="catAll03">
                        <label class="form-check-label" for="catAll03">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="08" id="ctg08">
                        <label class="form-check-label" for="ctg08">総合（美容）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="09" id="ctg09">
                        <label class="form-check-label" for="ctg09">エステ</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="0A" id="ctg0A">
                        <label class="form-check-label" for="ctg0A">コスメ・メイク</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="0B" id="ctg0B">
                        <label class="form-check-label" for="ctg0B">スキンケア</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="0C" id="ctg0C">
                        <label class="form-check-label" for="ctg0C">ダイエット</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="0D" id="ctg0D">
                        <label class="form-check-label" for="ctg0D">ネイル</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="0E" id="ctg0E">
                        <label class="form-check-label" for="ctg0E">ヘアケア</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="0F" id="ctg0F">
                        <label class="form-check-label" for="ctg0F">ボディケア</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="10" id="ctg10">
                        <label class="form-check-label" for="ctg10">クリニック</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="11" id="ctg11">
                        <label class="form-check-label" for="ctg11">美容機器</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="12" id="ctg12">
                        <label class="form-check-label" for="ctg12">美容食品</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="13" id="ctg13">
                        <label class="form-check-label" for="ctg13">その他（美容）</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.collapse -->
            </div><!-- /.card -->
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                  <h5 class="mb-0">
                    <a href="#sigitojouhou" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 仕事情報 </a>
                  </h5>
                </div><!-- /.card-header -->
                <div class="collapse" role="tabpanel" id="sigitojouhou" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="09" id="catAll09">
                        <label class="form-check-label" for="catAll09">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="2C" id="ctg2C">
                        <label class="form-check-label" for="ctg2C">総合（仕事情報）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="2D" id="ctg2D">
                        <label class="form-check-label" for="ctg2D">就職・転職</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="2E" id="ctg2E">
                        <label class="form-check-label" for="ctg2E">起業・会社設立</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="2F" id="ctg2F">
                        <label class="form-check-label" for="ctg2F">在宅ワーク</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="30" id="ctg30">
                        <label class="form-check-label" for="ctg30">その他（仕事情報）</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.collapse -->
            </div><!-- /.card -->
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                  <h5 class="mb-0">
                    <a href="#gift" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> ギフト </a>
                  </h5>
                </div><!-- /.card-header -->
                <div class="collapse" role="tabpanel" id="gift" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="15" id="catAll15">
                        <label class="form-check-label" for="catAll15">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="5D" id="ctg5D">
                        <label class="form-check-label" for="ctg5D">総合（ギフト）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="5E" id="ctg5E">
                        <label class="form-check-label" for="ctg5E">オリジナルギフト</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="5F" id="ctg5F">
                        <label class="form-check-label" for="ctg5F">花</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="60" id="ctg60">
                        <label class="form-check-label" for="ctg60">お祝い</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="61" id="ctg61">
                        <label class="form-check-label" for="ctg61">その他（ギフト）</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.collapse -->
            </div><!-- /.card -->
        </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#gurume_syokuhin" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> グルメ食品 </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="gurume_syokuhin" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="04" id="catAll04">
                      <label class="form-check-label" for="catAll04">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="14" id="ctg14">
                      <label class="form-check-label" for="ctg14">総合（グルメ・食品）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="15" id="ctg15"
                      <label class="form-check-label" for="ctg15">グルメ予約</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="16" id="ctg16">
                      <label class="form-check-label" for="ctg16">飲料</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="17" id="ctg17">
                      <label class="form-check-label" for="ctg17">加工食品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="18" id="ctg18">
                      <label class="form-check-label" for="ctg18">生鮮食品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="19" id="ctg19">
                      <label class="form-check-label" for="ctg19">その他（グルメ・食品）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#manabi_sikaku" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 学び・資格 </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="manabi_sikaku" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="10" id="catAll10">
                      <label class="form-check-label" for="catAll10">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="31" id="ctg31">
                      <label class="form-check-label" for="ctg31">総合（学び・資格）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="32" id="ctg32">
                      <label class="form-check-label" for="ctg32">習い事</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="33" id="ctg33">
                      <label class="form-check-label" for="ctg33">資格取得</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="34" id="ctg34">
                      <label class="form-check-label" for="ctg34">専門学校・スクール</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="35" id="ctg35">
                      <label class="form-check-label" for="ctg35">家庭教師・塾</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="36" id="ctg36">
                      <label class="form-check-label" for="ctg36">幼児教育</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="37" id="ctg37">
                      <label class="form-check-label" for="ctg37">その他（学び・資格）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
      <div class="col-lg-4">
        <div class="card ">
            <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
              <h5 class="mb-0">
                <a href="#supo_tu_syumi" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> スポーツ・趣味 </a>
              </h5>
            </div><!-- /.card-header -->
            <div class="collapse" role="tabpanel" id="supo_tu_syumi" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="16" id="catAll16">
                    <label class="form-check-label" for="catAll16">すべて</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="62" id="ctg62">
                    <label class="form-check-label" for="ctg62">総合（スポーツ・趣味）</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="63" id="ctg63">
                    <label class="form-check-label" for="ctg63">車・バイク</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="64" id="ctg64">
                    <label class="form-check-label" for="ctg64">スポーツ</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="65" id="ctg65">
                    <label class="form-check-label" for="ctg65">アウトドア</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="66" id="ctg66">
                    <label class="form-check-label" for="ctg66">その他（スポーツ・趣味）</label>
                  </div>
                </li>
              </ul>
            </div><!-- /.collapse -->
        </div><!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#fassyon" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> ファッション </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="fassyon" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" id="catAll05">
                      <label class="form-check-label" for="catAll05">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" ame="ecsCtgCd" value="1A" id="ctg1A">
                      <label class="form-check-label" for="ctg1A">総合（ファッション）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="1B" id="ctg1B">
                      <label class="form-check-label" for="ctg1B">服</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="1C" id="ctg1C">
                      <label class="form-check-label" for="ctg1C">ファッション小物</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="1D" id="ctg1D">
                      <label class="form-check-label" for="ctg1D">その他（ファッション）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#kurasi" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 暮らし </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="kurasi" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" id="catAll11">
                      <label class="form-check-label" for="catAll11">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="38" id="ctg38">
                      <label class="form-check-label" for="ctg38">総合（暮らし）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="39" id="ctg39">
                      <label class="form-check-label" for="ctg39">インテリア</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="3A" id="ctg3A">
                      <label class="form-check-label" for="ctg3A">家電</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="3B" id="ctg3B">
                      <label class="form-check-label" for="ctg3B">電話</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="3C" id="ctg3C">
                      <label class="form-check-label" for="ctg3C">生活雑貨</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" id="ctg3D">
                      <label class="form-check-label" for="ctg3D">オフィス用品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="3E" id="ctg3E">
                      <label class="form-check-label" for="ctg3E">家事・日用品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="3F" id="ctg3F">
                      <label class="form-check-label" for="ctg3F">ガーデニング</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="40" id="ctg40">
                      <label class="form-check-label" for="ctg40">リサイクル</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="41" id="ctg41">
                      <label class="form-check-label" for="ctg41">子育て</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="ecsCtgCd" value="42" id="ctg42">
                      <label class="form-check-label" for="ctg42">お得情報</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="43" id="ctg43">
                      <label class="form-check-label" for="ctg43">写真・プリント</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="44" id="ctg44">
                      <label class="form-check-label" for="ctg44">ペット</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="45" id="ctg45">
                      <label class="form-check-label" for="ctg45">葬祭</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="46" id="ctg46">
                      <label class="form-check-label" for="ctg46">その他（暮らし）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
      <div class="col-lg-4">
        <div class="card ">
            <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
              <h5 class="mb-0">
                <a href="#kekkon_rennai" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 結婚・恋愛 </a>
              </h5>
            </div><!-- /.card-header -->
            <div class="collapse" role="tabpanel" id="kekkon_rennai" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="17" id="catAll17">
                    <label class="form-check-label" for="catAll17">すべて</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="67" id="ctg67">
                    <label class="form-check-label" for="ctg67">総合（結婚・恋愛）</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="ecsCtgCd" value="68" id="ctg68">
                    <label class="form-check-label" for="ctg68">婚活</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="ecsCtgCd" value="69" id="ctg69">
                    <label class="form-check-label" for="ctg69">恋愛</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="6A" id="ctg6A">
                    <label class="form-check-label" for="ctg6A">ウエディング</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="6B" id="ctg6B">
                    <label class="form-check-label" for="ctg6B">その他（結婚・恋愛）</label>
                  </div>
                </li>
              </ul>
            </div><!-- /.collapse -->
        </div><!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#ryokou" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> 旅行 </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="ryokou" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="06" id="catAll06">
                      <label class="form-check-label" for="catAll06">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="1E" id="ctg1E">
                      <label class="form-check-label" for="ctg1E">総合（旅行）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="1F" id="ctg1F">
                      <label class="form-check-label" for="ctg1F">海外旅行</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="20" id="ctg20">
                      <label class="form-check-label" for="ctg20">国内旅行</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="21" id="ctg21">
                      <label class="form-check-label" for="ctg21">トラベルグッズ</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="22" id="ctg22">
                      <label class="form-check-label" for="ctg22">その他（旅行）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
      </div>
      <div class="col-lg-4">
          <div class="card ">
              <div class="card-header bg-success" role="tab" id="collapseListGroupHeading1">
                <h5 class="mb-0">
                  <a href="#web_service" class="collapsed text-body d-block p-3 m-n3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1"> Webサービス </a>
                </h5>
              </div><!-- /.card-header -->
              <div class="collapse" role="tabpanel" id="web_service" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsMainCtgCd" value="12" id="catAll12">
                      <label class="form-check-label" for="catAll12">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="47" id="ctg47">
                      <label class="form-check-label" for="ctg47">総合（Webサービス）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="48" id="ctg48">
                      <label class="form-check-label" for="ctg48">webコンサルティング</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="49" id="ctg49">
                      <label class="form-check-label" for="ctg49">サーバー</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="4A" id="ctg4A">
                      <label class="form-check-label" for="ctg4A">ドメイン</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="4B" id="ctg4B">
                      <label class="form-check-label" for="ctg4B">ホームページ・ネットショップ</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="4C" id="ctg4C">
                      <label class="form-check-label" for="ctg4C">ポイントサービス・懸賞</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="4D" id="ctg4D">
                      <label class="form-check-label" for="ctg4D">ASP</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ecsCtgCd" value="4E" id="ctg4E">
                      <label class="form-check-label" for="ctg4E">その他（Webサービス）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
        </form>
          <br>
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
            $("#search,#a8").addClass('active');
            // if(!confirm('A8.netのページに移動します。よろしいですか？')){
            //     return false;
            // }else{
            //     location.href = 'https://pub.a8.net/a8v2/asSearchAction.do';
            // }
        });
    </script>
@endsection