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
                    <form action="" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">キーワードを入力</label>
                            <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
                        </div>
                        <div>
                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                              <i class="fa fa-lock fa-search"></i>&nbsp;
                              <span id="payment-button-amount">検索</span>
                              <span id="payment-button-sending" style="display:none;">Sending…</span>
                          </button>
                        </div>
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
                      <input class="form-check-input" type="checkbox" id="check1a" name="ecsMainCtgCd">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a" name="ecsCtgCd" value="01">
                      <label class="form-check-label" for="check1a">ショッピングモール</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a" name="ecsCtgCd" value="01">
                      <label class="form-check-label" for="check1a">百貨店・デパート</label>
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
                          <input class="form-check-input" type="checkbox" id="check1a">
                          <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（金融・投資・保険）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">金融</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">投資</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">保険</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（金融・投資・保険）</label>
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
                          <input class="form-check-input" type="checkbox" id="check1a">
                          <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                  </li>
                  <li class="list-group-item"> 
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="check1a">
                          <label class="form-check-label" for="check1a">総合（インターネット接続）</label>
                        </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">wifi</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">プロバイダー</label>
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
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（健康）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">医療</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">健康グッズ</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">健康食品</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（健康）</label>
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
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（不動産・引越）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">物件</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">引越</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（不動産・引越）</label>
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
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（エンタメ）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">動画</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">ギャンブル</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">グッズ</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">ゲーム</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">音楽</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">書籍・本</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">占い</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（エンタメ）</label>
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
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（美容）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">エステ</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">コスメ・メイク</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">スキンケア</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">ダイエット</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">ネイル</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">ヘアケア</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">ボディケア</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">クリニック</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">美容機器</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">美容食品</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（美容）</label>
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
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（仕事情報）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">就職・転職</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">起業・会社設立</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">在宅ワーク</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（仕事情報）</label>
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
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">すべて</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">総合（ギフト）</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">オリジナルギフト</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">花</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">お祝い</label>
                      </div>
                    </li>
                    <li class="list-group-item"> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1a">
                        <label class="form-check-label" for="check1a">その他（ギフト）</label>
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
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">総合（グルメ・食品）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">グルメ予約</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">飲料</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">加工食品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">生鮮食品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（グルメ・食品）</label>
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
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">総合（学び・資格）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">習い事</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">資格取得</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">専門学校・スクール</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">家庭教師・塾</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">幼児教育</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（学び・資格）</label>
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
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">すべて</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">総合（スポーツ・趣味）</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">車・バイク</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">スポーツ</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">アウトドア</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">その他（スポーツ・趣味）</label>
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
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">総合（ファッション）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">服</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ファッション小物</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（ファッション）</label>
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
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">総合（暮らし）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">インテリア</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">家電</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">電話</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">生活雑貨</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">オフィス用品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">家事・日用品</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ガーデニング</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">リサイクル</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">子育て</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">お得情報</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">写真・プリント</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ペット</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">葬祭</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（暮らし）</label>
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
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">すべて</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">総合（結婚・恋愛）</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">婚活</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">恋愛</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">ウエディング</label>
                  </div>
                </li>
                <li class="list-group-item"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1a">
                    <label class="form-check-label" for="check1a">その他（結婚・恋愛）</label>
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
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">総合（旅行）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">海外旅行</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">国内旅行</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">トラベルグッズ</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（旅行）</label>
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
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">すべて</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">総合（Webサービス）</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">webコンサルティング</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">サーバー</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ドメイン</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ホームページ・ネットショップ</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ポイントサービス・懸賞</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">ASP</label>
                    </div>
                  </li>
                  <li class="list-group-item"> 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1a">
                      <label class="form-check-label" for="check1a">その他（Webサービス）</label>
                    </div>
                  </li>
                </ul>
              </div><!-- /.collapse -->
          </div><!-- /.card -->
          <div class="row">
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                <i class="fa fa-lock fa-search"></i>&nbsp;
                <span id="payment-button-amount">検索</span>
                <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
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
            $("#search,#a8").addClass('active');
            // if(!confirm('A8.netのページに移動します。よろしいですか？')){
            //     return false;
            // }else{
            //     location.href = 'https://pub.a8.net/a8v2/asSearchAction.do';
            // }
        });
    </script>
@endsection