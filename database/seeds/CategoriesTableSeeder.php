<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'order' => '1',
                'name' => '前菜',
            ],
            [
                'order' => '2',
                'name' => 'サラダ',
            ],
            [
                'order' => '3',
                'name' => 'スープ',
            ],
            [
                'order' => '4',
                'name' => 'パスタ',
            ],
            [
                'order' => '5',
                'name' => 'ピッツァ',
            ],
            [
                'order' => '6',
                'name' => 'メイン',
            ],
            [
                'order' => '7',
                'name' => 'アルコール',
            ],
            [
                'order' => '8',
                'name' => 'ソフトドリンク',
            ],
            [
                'order' => '9',
                'name' => 'デザート',
            ],
            [
                'order' => '10',
                'name' => 'ランチ',
            ],
        ]);
    }
}
