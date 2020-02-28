<?php

use Illuminate\Database\Seeder;

class A8CategorysChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('a8_category_children')->insert([
            [
                'parent_id' => 1,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 1,
                'name' =>  'ショッピングモール',
            ],
            [
                'parent_id' => 1,
                'name' =>  '百貨店・デパート',
            ],
            [
                'parent_id' => 2,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 2,
                'name' =>  '総合（金融・投資・保険',
            ],
            [
                'parent_id' => 2,
                'name' =>  '金融',
            ],
            [
                'parent_id' => 2,
                'name' =>  '投資',
            ],
            [
                'parent_id' => 2,
                'name' =>  '保険',
            ],
            [
                'parent_id' => 2,
                'name' =>  'その他（金融・投資・保険）',
            ],
            [
                'parent_id' => 3,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 3,
                'name' =>  '総合（インターネット接続）',
            ],
            [
                'parent_id' => 3,
                'name' =>  'wifi',
            ],
            [
                'parent_id' => 3,
                'name' =>  'プロバイダー',
            ],
            [
                'parent_id' => 3,
                'name' =>  '回線',
            ],
            [
                'parent_id' => 3,
                'name' =>  'その他（インターネット接続）',
            ],
            [
                'parent_id' => 4,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 4,
                'name' =>  '総合（健康）',
            ],
            [
                'parent_id' => 4,
                'name' =>  '医療',
            ],
            [
                'parent_id' => 4,
                'name' =>  '健康グッズ',
            ],
            [
                'parent_id' => 4,
                'name' =>  '健康食品',
            ],
            [
                'parent_id' => 4,
                'name' =>  'その他（健康）',
            ],
            [
                'parent_id' => 5,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 5,
                'name' =>  '総合（不動産・引越）',
            ],
            [
                'parent_id' => 5,
                'name' =>  '物件',
            ],
            [
                'parent_id' => 5,
                'name' =>  '引越',
            ],
            [
                'parent_id' => 6,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 6,
                'name' =>  '総合（エンタメ）',
            ],
            [
                'parent_id' => 6,
                'name' =>  '動画',
            ],
            [
                'parent_id' => 6,
                'name' =>  'ギャンブル',
            ],
            [
                'parent_id' => 6,
                'name' =>  'グッズ',
            ],
            [
                'parent_id' => 6,
                'name' =>  'ゲーム',
            ],
            [
                'parent_id' => 6,
                'name' =>  '音楽',
            ],
            [
                'parent_id' => 6,
                'name' =>  '書籍・本',
            ],
            [
                'parent_id' => 6,
                'name' =>  '占い',
            ],
            [
                'parent_id' => 6,
                'name' =>  'その他（エンタメ）',
            ],
            [
                'parent_id' => 7,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 7,
                'name' =>  '総合（美容）',
            ],
            [
                'parent_id' => 7,
                'name' =>  'エステ',
            ],
            [
                'parent_id' => 7,
                'name' =>  'コスメ・メイク',
            ],
            [
                'parent_id' => 7,
                'name' =>  'スキンケア',
            ],
            [
                'parent_id' => 7,
                'name' =>  'ダイエット',
            ],
            [
                'parent_id' => 7,
                'name' =>  'ネイル',
            ],
            [
                'parent_id' => 7,
                'name' =>  'ヘアケア',
            ],
            [
                'parent_id' => 7,
                'name' =>  'ボディケア',
            ],
            [
                'parent_id' => 7,
                'name' =>  'クリニック',
            ],
            [
                'parent_id' => 7,
                'name' =>  '美容機器',
            ],
            [
                'parent_id' => 7,
                'name' =>  '美容食品',
            ],
            [
                'parent_id' => 7,
                'name' =>  'その他（美容）',
            ],
            [
                'parent_id' => 8,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 8,
                'name' =>  '総合（仕事情報）',
            ],
            [
                'parent_id' => 8,
                'name' =>  '就職・転職',
            ],
            [
                'parent_id' => 8,
                'name' =>  '起業・会社設立',
            ],
            [
                'parent_id' => 8,
                'name' =>  '在宅ワーク',
            ],
            [
                'parent_id' => 8,
                'name' =>  'その他（仕事情報）',
            ],
            [
                'parent_id' => 9,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 9,
                'name' =>  '総合（ギフト）',
            ],
            [
                'parent_id' => 9,
                'name' =>  'オリジナルギフト',
            ],
            [
                'parent_id' => 9,
                'name' =>  '花',
            ],
            [
                'parent_id' => 9,
                'name' =>  'お祝い',
            ],
            [
                'parent_id' => 9,
                'name' =>  'その他（ギフト）',
            ],
            [
                'parent_id' => 10,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 10,
                'name' =>  '総合（グルメ・食品）',
            ],
            [
                'parent_id' => 10,
                'name' =>  'グルメ予約',
            ],
            [
                'parent_id' => 10,
                'name' =>  '飲料',
            ],
            [
                'parent_id' => 10,
                'name' =>  '　加工食品',
            ],
            [
                'parent_id' => 10,
                'name' =>  '生鮮食品',
            ],
            [
                'parent_id' => 10,
                'name' =>  'その他（グルメ・食品）',
            ],
            [
                'parent_id' => 11,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 11,
                'name' =>  '総合（学び・資格）',
            ],
            [
                'parent_id' => 11,
                'name' =>  '習い事',
            ],
            [
                'parent_id' => 11,
                'name' =>  '資格取得',
            ],
            [
                'parent_id' => 11,
                'name' =>  '専門学校・スクール',
            ],
            [
                'parent_id' => 11,
                'name' =>  '家庭教師・塾',
            ],
            [
                'parent_id' => 11,
                'name' =>  '幼児教育',
            ],
            [
                'parent_id' => 11,
                'name' =>  'その他（学び・資格）',
            ],
            [
                'parent_id' => 12,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 12,
                'name' =>  '総合（スポーツ・趣味）',
            ],
            [
                'parent_id' => 12,
                'name' =>  '車・バイク',
            ],
            [
                'parent_id' => 12,
                'name' =>  'スポーツ',
            ],
            [
                'parent_id' => 12,
                'name' =>  'アウトドア',
            ],
            [
                'parent_id' => 12,
                'name' =>  'その他（スポーツ・趣味）',
            ],
            [
                'parent_id' => 13,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 13,
                'name' =>  '総合（ファッション）',
            ],
            [
                'parent_id' => 13,
                'name' =>  '服',
            ],
            [
                'parent_id' => 13,
                'name' =>  'ファッション小物',
            ],
            [
                'parent_id' => 13,
                'name' =>  'その他（ファッション）',
            ],
            [
                'parent_id' => 14,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 14,
                'name' =>  '総合（暮らし）',
            ],
            [
                'parent_id' => 14,
                'name' =>  'インテリア',
            ],
            [
                'parent_id' => 14,
                'name' =>  '家電',
            ],
            [
                'parent_id' => 14,
                'name' =>  '電話',
            ],
            [
                'parent_id' => 14,
                'name' =>  '生活雑貨',
            ],
            [
                'parent_id' => 14,
                'name' =>  'オフィス用品',
            ],
            [
                'parent_id' => 14,
                'name' =>  '家事・日用品',
            ],
            [
                'parent_id' => 14,
                'name' =>  'ガーデニング',
            ],
            [
                'parent_id' => 14,
                'name' =>  'リサイクル',
            ],
            [
                'parent_id' => 14,
                'name' =>  '子育て',
            ],
            [
                'parent_id' => 14,
                'name' =>  'お得情報',
            ],
            [
                'parent_id' => 14,
                'name' =>  '写真・プリント',
            ],
            [
                'parent_id' => 14,
                'name' =>  'ペット',
            ],
            [
                'parent_id' => 14,
                'name' =>  '葬祭',
            ],
            [
                'parent_id' => 14,
                'name' =>  'その他（暮らし）',
            ],
            [
                'parent_id' => 15,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 15,
                'name' =>  '総合（結婚・恋愛）',
                
            ],
            [
                'parent_id' => 15,
                'name' =>  '婚活',
            ],
            [
                'parent_id' => 15,
                'name' =>  '恋愛',
            ],
            [
                'parent_id' => 15,
                'name' =>  'ウエディング',
            ],
            [
                'parent_id' => 15,
                'name' =>  'その他（結婚・恋愛）',
            ],
            [
                'parent_id' => 16,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 16,
                'name' =>  '総合（旅行）',
            ],
            [
                'parent_id' => 16,
                'name' =>  '海外旅行',
            ],
            [
                'parent_id' => 16,
                'name' =>  '国内旅行',
            ],
            [
                'parent_id' => 16,
                'name' =>  'トラベルグッズ',
            ],
            [
                'parent_id' => 17,
                'name' =>  'すべて',
            ],
            [
                'parent_id' => 17,
                'name' =>  'webコンサルティング',
            ],
            [
                'parent_id' => 17,
                'name' =>  'サーバー',
            ],
            [
                'parent_id' => 17,
                'name' =>  'ドメイン',
            ],
            [
                'parent_id' => 17,
                'name' =>  'ホームページ・ネットショップ',
            ],
            [
                'parent_id' => 17,
                'name' =>  'ポイントサービス・懸賞',
            ],
            [
                'parent_id' => 17,
                'name' =>  'ASP',
            ],
            [
                'parent_id' => 17,
                'name' =>  'その他（Webサービス）',
            ],
        ]);
    }
}
