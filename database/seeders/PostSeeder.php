<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
         'name'=>'ハム太郎',
         'title'=>'お腹すいた',
         'Body'=>'ヒマワリの種食べたい',
         'team_id'=>'1',
     ];
     DB::table('posts')->insert($param);
        //
    }
}
