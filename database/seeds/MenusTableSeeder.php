<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'order' => 0,
                'category_id' => '1',
                'name' => 'オリーブのマリネ',
                'price' => 450,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => '燻製ナッツ',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => 'モッツァレラチーズのカプレーゼ',
                'price' => 530,
                'stock' => 1,
                'pickup' => 0,
            ],
                        [
                'order' => 0,
                'category_id' => '1',
                'name' => 'イタリア産チーズの盛り合わせ',
                'price' => 680,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => '３種のブルスケッタ',
                'price' => 420,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => '自家製ピクルス',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => '白身魚のカルパッチョ',
                'price' => 820,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => 'サーモンのカルパッチョ',
                'price' => 850,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => 'イタリア産生ハムの前菜プレート',
                'price' => 890,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '1',
                'name' => 'シェフのきまぐれ前菜プレート',
                'price' => 1000,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '2',
                'name' => 'シーザーサラダ',
                'price' => 650,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '2',
                'name' => 'たらことマスカルポーネのポテトサラダ',
                'price' => 580,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '2',
                'name' => 'キノコとベーコンのサラダ',
                'price' => 680,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '2',
                'name' => '彩り野菜のバーニャカウダ',
                'price' => 680,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '2',
                'name' => 'クルミとオリーブのグリーンサラダ',
                'price' => 580,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '3',
                'name' => 'ミネストローネ',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '3',
                'name' => 'クラムチャウダー',
                'price' => 380,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '3',
                'name' => 'コーンスープ',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'トマトクリームパスタ',
                'price' => 920,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'ペペロンチーノ',
                'price' => 920,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'カルボナーラ',
                'price' => 930,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'ボロネーゼ',
                'price' => 950,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'ジェノベーゼ',
                'price' => 1050,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => '海鮮たっぷりのペスカトーレ',
                'price' => 1250,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'エビと貝柱のクリームパスタ',
                'price' => 1200,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => 'キノコとサーモンの生パスタ',
                'price' => 1150,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '4',
                'name' => '季節野菜たっぷりのスープパスタ',
                'price' => 1230,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '5',
                'name' => 'マルゲリータ',
                'price' => 920,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '5',
                'name' => 'ペパロニ',
                'price' => 1020,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '5',
                'name' => 'マリナーラ',
                'price' => 900,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '5',
                'name' => 'シーフード',
                'price' => 1100,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '6',
                'name' => '鯛のアクアパッツァ',
                'price' => 1360,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '6',
                'name' => 'ミラノ風カツレツ',
                'price' => 1250,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '6',
                'name' => '地鶏のシチリア風ロースト',
                'price' => 1600,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' => 0,
                'category_id' => '6',
                'name' => '牛ほほ肉の赤ワイン煮込み',
                'price' => 1800,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => '赤ワイン',
                'price' => 480,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => '白ワイン',
                'price' => 480,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => 'ビール',
                'price' => 500,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => '自家製サングリア(赤)',
                'price' => 580,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => '自家製サングリア(白)',
                'price' => 580,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => 'スプリッツァー',
                'price' => 520,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => 'キティ',
                'price' => 520,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '7',
                'name' => 'キール',
                'price' => 520,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '8',
                'name' => 'ブラッドオレンジジュース',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '8',
                'name' => '自家製レモンスカッシュ',
                'price' => 380,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '8',
                'name' => 'グレープフルーツジュース',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '8',
                'name' => 'ジンジャーエール',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '8',
                'name' => 'アイスコーヒー',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '8',
                'name' => 'アイスティー',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '9',
                'name' => 'ティラミス',
                'price' => 520,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '9',
                'name' => 'イチゴのパンナコッタ',
                'price' => 580,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '9',
                'name' => '季節のジェラート',
                'price' => 320,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '10',
                'name' => 'Aランチ',
                'price' => 800,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '10',
                'name' => 'Bランチ',
                'price' => 850,
                'stock' => 1,
                'pickup' => 0,
            ],
            [
                'order' =>  0,
                'category_id' => '10',
                'name' => 'Cランチ',
                'price' => 900,
                'stock' => 1,
                'pickup' => 0,
            ],
        ]);
    }
}
