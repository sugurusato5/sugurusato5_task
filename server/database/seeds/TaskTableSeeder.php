<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'テストタスク1',
            'body' => 'テスト'
        ]);

        $param = [[
            'title' => 'テスト2',
            'body' => 'てすと2'
        ]];
        DB::table('tasks')->insert($param);
    }
}
