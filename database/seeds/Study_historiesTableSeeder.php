<?php

use Illuminate\Database\Seeder;

class Study_historiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'student_id' => '1',
          'start_at' => '2014-09-01',
          'end_at' => '2017-04-01',
          'event' => '東京デザイン専門学校卒業',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '2',
          'start_at' => '2010-09-01',
          'end_at' => '2013-06-30',
          'event' => '濮阳第三中学卒業',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '2',
          'start_at' => '2014-01-01',
          'end_at' => '2015-12-30',
          'event' => '赤門会日本語学校卒業',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '2',
          'start_at' => '2016-04-01',
          'end_at' => '2018-03-01',
          'event' => '中央情報専門学校卒業見込',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '3',
          'start_at' => '2008-04-01',
          'end_at' => '2010-03-01',
          'event' => '東京アンランゲージスクール',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '3',
          'start_at' => '2010-04-01',
          'end_at' => '2012-03-01',
          'event' => '東京法科学院専門学校',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '4',
          'start_at' => '2012-04-01',
          'end_at' => '2013-03-01',
          'event' => '日本健康医療専門学校',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '4',
          'start_at' => '2014-04-01',
          'end_at' => '2018-03-01',
          'event' => '拓殖大学',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '5',
          'start_at' => '2008-04-19',
          'end_at' => '2010-03-20',
          'event' => '上海宝山区行知学院',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '5',
          'start_at' => '2012-04-19',
          'end_at' => '2014-04-20',
          'event' => '日本千駄ヶ谷日本語学校',
        ];
        DB::table('study_histories')->insert($param);

        $param = [
          'student_id' => '5',
          'start_at' => '2014-04-20',
          'end_at' => '2016-03-01',
          'event' => '日本電子専門学校',
        ];
        DB::table('study_histories')->insert($param);
    }
}
