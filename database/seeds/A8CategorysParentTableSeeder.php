<?php

use Illuminate\Database\Seeder;

class A8CategorysParentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('a8_category_parents')->insert([
            [
                'name' => '総合通販',
            ],
            [
                'name' => '金融・投資・保険',
            ],
            [
                'name' => 'インターネット接続',
            ],
            [
                'name' => '健康',
            ],
            [
                'name' => '不動産・引越',
            ],
            [
                'name' => 'エンタメ',
            ],
            [
                'name' => '美容',
            ],
            [
                'name' => '仕事情報',
            ],
            [
                'name' => 'ギフト',
            ],
            [
                'name' => 'グルメ・食品',
            ],
            [
                'name' => '学び・資格',
            ],
            [
                'name' => 'スポーツ・趣味',
            ],
            [
                'name' => 'ファッション',
            ],
            [
                'name' => '暮らし',
            ],
            [
                'name' => '結婚・恋愛',
            ],
            [
                'name' => '旅行',
            ],
            [
                'name' => 'Webサービス',
            ],
        ]);
    }
}
