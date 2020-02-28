<?php

use Illuminate\Database\Seeder;

class A8CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('a8_categories')->insert([
            [
                'parent_name' => '総合通販',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '総合通販',
                'children_name' => 'ショッピングモール',
            ],
            [
                'parent_name' => '総合通販',
                'children_name' => '百貨店・デパート',
            ],
            [
                'parent_name' => '金融・投資・保険',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '金融・投資・保険',
                'children_name' => '総合（金融・投資・保険',
            ],
            [
                'parent_name' => '金融・投資・保険',
                'children_name' => '金融',
            ],
            [
                'parent_name' => '金融・投資・保険',
                'children_name' => '投資',
            ],
            [
                'parent_name' => '金融・投資・保険',
                'children_name' => '保険',
            ],
            [
                'parent_name' => '金融・投資・保険',
                'children_name' => 'その他（金融・投資・保険）',
            ],
            [
                'parent_name' => 'インターネット接続',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'インターネット接続',
                'children_name' => '総合（インターネット接続）',
            ],
            [
                'parent_name' => 'インターネット接続',
                'children_name' => 'wifi',
            ],
            [
                'parent_name' => 'インターネット接続',
                'children_name' => 'プロバイダー',
            ],
            [
                'parent_name' => 'インターネット接続',
                'children_name' => '回線',
            ],
            [
                'parent_name' => 'インターネット接続',
                'children_name' => 'その他（インターネット接続）',
            ],
            [
                'parent_name' => '健康',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '健康',
                'children_name' => '総合（健康）',
            ],
            [
                'parent_name' => '健康',
                'children_name' => '医療',
            ],
            [
                'parent_name' => '健康',
                'children_name' => '健康グッズ',
            ],
            [
                'parent_name' => '健康',
                'children_name' => '健康食品',
            ],
            [
                'parent_name' => '健康',
                'children_name' => 'その他（健康）',
            ],
            [
                'parent_name' => '不動産・引越',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '不動産・引越',
                'children_name' => '総合（不動産・引越）',
            ],
            [
                'parent_name' => '不動産・引越',
                'children_name' => '物件',
            ],
            [
                'parent_name' => '不動産・引越',
                'children_name' => '引越',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => '総合（エンタメ）',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => '動画',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => 'ギャンブル',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => 'グッズ',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => 'ゲーム',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => '音楽',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => '書籍・本',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => '占い',
            ],
            [
                'parent_name' => 'エンタメ',
                'children_name' => 'その他（エンタメ）',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '美容',
                'children_name' => '総合（美容）',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'エステ',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'コスメ・メイク',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'スキンケア',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'ダイエット',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'ネイル',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'ヘアケア',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'ボディケア',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'クリニック',
            ],
            [
                'parent_name' => '美容',
                'children_name' => '美容機器',
            ],
            [
                'parent_name' => '美容',
                'children_name' => '美容食品',
            ],
            [
                'parent_name' => '美容',
                'children_name' => 'その他（美容）',
            ],
            [
                'parent_name' => '仕事情報',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '仕事情報',
                'children_name' => '総合（仕事情報）',
            ],
            [
                'parent_name' => '仕事情報',
                'children_name' => '就職・転職',
            ],
            [
                'parent_name' => '仕事情報',
                'children_name' => '起業・会社設立',
            ],
            [
                'parent_name' => '仕事情報',
                'children_name' => '在宅ワーク',
            ],
            [
                'parent_name' => '仕事情報',
                'children_name' => 'その他（仕事情報）',
            ],
            [
                'parent_name' => 'ギフト',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'ギフト',
                'children_name' => '総合（ギフト）',
            ],
            [
                'parent_name' => 'ギフト',
                'children_name' => 'オリジナルギフト',
            ],
            [
                'parent_name' => 'ギフト',
                'children_name' => '花',
            ],
            [
                'parent_name' => 'ギフト',
                'children_name' => 'お祝い',
            ],
            [
                'parent_name' => 'ギフト',
                'children_name' => 'その他（ギフト）',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => '総合（グルメ・食品）',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => 'グルメ予約',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => '飲料',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => '加工食品',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => '生鮮食品',
            ],
            [
                'parent_name' => 'グルメ・食品',
                'children_name' => 'その他（グルメ・食品）',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => '総合（学び・資格）',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => '習い事',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => '資格取得',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => '専門学校・スクール',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => '家庭教師・塾',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => '幼児教育',
            ],
            [
                'parent_name' => '学び・資格',
                'children_name' => 'その他（学び・資格）',
            ],
            [
                'parent_name' => 'スポーツ・趣味',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'スポーツ・趣味',
                'children_name' => '総合（スポーツ・趣味）',
            ],
            [
                'parent_name' => 'スポーツ・趣味',
                'children_name' => '車・バイク',
            ],
            [
                'parent_name' => 'スポーツ・趣味',
                'children_name' => 'スポーツ',
            ],
            [
                'parent_name' => 'スポーツ・趣味',
                'children_name' => 'アウトドア',
            ],
            [
                'parent_name' => 'スポーツ・趣味',
                'children_name' => 'その他（スポーツ・趣味）',
            ],
            [
                'parent_name' => 'ファッション',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'ファッション',
                'children_name' => '総合（ファッション）',
            ],
            [
                'parent_name' => 'ファッション',
                'children_name' => '服',
            ],
            [
                'parent_name' => 'ファッション',
                'children_name' => 'ファッション小物',
            ],
            [
                'parent_name' => 'ファッション',
                'children_name' => 'その他（ファッション）',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '総合（暮らし）',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'インテリア',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '家電',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '電話',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '生活雑貨',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'オフィス用品',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '家事・日用品',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'ガーデニング',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'リサイクル',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '子育て',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'お得情報',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '写真・プリント',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'ペット',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => '葬祭',
            ],
            [
                'parent_name' => '暮らし',
                'children_name' => 'その他（暮らし）',
            ],
            [
                'parent_name' => '結婚・恋愛',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '結婚・恋愛',
                'children_name' => '総合（結婚・恋愛）',
            ],
            [
                'parent_name' => '結婚・恋愛',
                'children_name' => '婚活',
            ],
            [
                'parent_name' => '結婚・恋愛',
                'children_name' => '恋愛',
            ],
            [
                'parent_name' => '結婚・恋愛',
                'children_name' => 'ウエディング',
            ],
            [
                'parent_name' => '結婚・恋愛',
                'children_name' => 'その他（結婚・恋愛）',
            ],
            [
                'parent_name' => '旅行',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => '旅行',
                'children_name' => '総合（旅行）',
            ],
            [
                'parent_name' => '旅行',
                'children_name' => '海外旅行',
            ],
            [
                'parent_name' => '旅行',
                'children_name' => '国内旅行',
            ],
            [
                'parent_name' => '旅行',
                'children_name' => 'トラベルグッズ',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'すべて',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'webコンサルティング',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'サーバー',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'ドメイン',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'ホームページ・ネットショップ',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'ポイントサービス・懸賞',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'ASP',
            ],
            [
                'parent_name' => 'Webサービス',
                'children_name' => 'その他（Webサービス）',
            ],
        ]);
    }
}
