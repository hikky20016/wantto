<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $param=[
            'name'=>'ハム太郎ズ',
            'area'=>'ケージの中',
            'email'=>'taro_hamu@email/com',
            'tell'=>'08086868686',
            'ave_age'=>'86',
            'passion'=>'1',
            'user_id'=>'1',
        ];
        
        DB::table('teams')->insert($param);
        
    }
}
