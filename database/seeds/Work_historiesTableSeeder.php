<?php

use Illuminate\Database\Seeder;

class Work_historiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $param = [
            'student_id' => '2',
            'start_at' => '2014-09-01',
            'end_at' => '2015-04-01',
            'event' => '松楽 飲食店でホールアルバイトをやりました。',

        ];
        DB::table('work_histories')->insert($param);

        $param = [
            'student_id' => '2',
            'start_at' => '2015-06-01',
            'end_at' => '2016-02-01',
            'event' => 'ローソンコンビニでレジーナをやりました。',
        ];
        DB::table('work_histories')->insert($param);

        $param = [
            'student_id' => '3',
            'start_at' => '2006-07-01',
            'end_at' => '2007-07-01',
            'event' => '中国大連HP（ヒューレットパッカード)',
        ];
        DB::table('work_histories')->insert($param);

        $param = [
            'student_id' => '3',
            'start_at' => '2015-06-01',
            'end_at' => '2018-01-21',
            'event' => 'ディアフーズ株式会社',
        ];
        DB::table('work_histories')->insert($param);



        $param = [
            'student_id' => '5',
            'start_at' => '2016-04-01',
            'end_at' => '2016-08-21',
            'event' => '中華料理',
        ];
        DB::table('work_histories')->insert($param);

    }
}
