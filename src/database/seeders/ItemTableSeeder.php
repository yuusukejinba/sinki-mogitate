<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
        'item' => 'キウイ',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'ストロベリー',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'オレンジ',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'スイカ',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'ピーチ',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'シャインマスカット',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'パイナップル',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'ブドウ',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'バナナ',
    ];
    DB::table('items')->insert($param);

    $param = [
        'item' => 'メロン',
    ];
    DB::table('items')->insert($param);

    Item::factory()->count(10)->create();
    }

   
}
