<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'name'=>'山田太郎',
            'email'=>'taro_yamada@mail.com',
            'password'=>'aiueo',
            'age'=>'24',
            'sex'=>'男',
            
            ];
        DB::table('users')->insert($param);
    }
}
