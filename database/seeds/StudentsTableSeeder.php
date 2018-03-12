<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'name' => '孟繁瑾',
        'phone' => '09042046941',
        'birthday' => '1992-03-17',
        'gender' => '1',
        'address' => '〒302-0023 茨城県取手市白山1-2-5',
        'photo' => 'http://image.baidu.com/search/detail?ct=503316480&z=0&ipn=d&word=facaimao&step_word=&hs=0&pn=95&spn=0&di=175185675721&pi=0&rn=1&tn=baiduimagedetail&is=0%2C0&istype=2&ie=utf-8&oe=utf-8&in=&cl=2&lm=-1&st=-1&cs=731035231%2C4146148569&os=885351008%2C2470722949&simid=4222048444%2C739753662&adpicid=0&lpn=0&ln=1980&fr=&fmq=1520841134645_R&fm=result&ic=0&s=undefined&se=&sme=&tab=0&width=&height=&face=undefined&ist=&jit=&cg=&bdtype=0&oriquery=&objurl=http%3A%2F%2Fimg.zcool.cn%2Fcommunity%2F011bda57a948d60000012e7e599d77.png&fromurl=ippr_z2C%24qAzdH3FAzdH3F5s1_z%26e3Bzv55s_z%26e3Bv54_z%26e3BvgAzdH3Fo56hAzdH3FZMTvdNDE8MzY%3D_z%26e3Bip4s&gsm=3c&rpstart=0&rpnum=0',
      ];
      DB::table('students') -> insert($param);

      $param = [
        'name' => '盛夢元',
        'phone' => '08079610814',
        'birthday' => '1994-10-10',
        'gender' => '1',
        'address' => '〒353-0004 志木市本町3-5-29 302',
        'photo' => 'https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=4f794950b819ebc4c078719fba1da8c1/37d12f2eb9389b50798a96678e35e5dde7116e89.jpg',
      ];
      DB::table('students') -> insert($param);

      $param = [
        'name' => '周志',
        'phone' => '08041337710',
        'birthday' => '1984-07-10',
        'gender' => '0',
        'address' => '〒302-0023 東京荒川区西尾久 7-50-13',
        'photo' => 'https://image.baidu.com/search/detail?ct=503316480&z=0&ipn=d&word=%E8%AF%81%E4%BB%B6%E7%85%A7&hs=2&pn=6&spn=0&di=96217962500&pi=0&rn=1&tn=baiduimagedetail&is=0%2C0&ie=utf-8&oe=utf-8&cl=2&lm=-1&cs=1958527031%2C1661349129&os=1148554870%2C407625642&simid=0%2C0&adpicid=0&lpn=0&ln=30&fr=ala&fm=&sme=&cg=&bdtype=0&oriquery=%E8%AF%81%E4%BB%B6%E7%85%A7&objurl=http%3A%2F%2Fa3.att.hudong.com%2F47%2F84%2F01300001365665134624841947350.jpg&fromurl=ippr_z2C%24qAzdH3FAzdH3Fp7rtwg_z%26e3Bkwthj_z%26e3Bv54AzdH3Fwn_90_b9_a8naaaa8nmcmmc8n9md9b98l90nca_89a_3r2_z%26e3Bip4s&gsm=0',
      ];
      DB::table('students') -> insert($param);

      $param = [
        'name' => 'fanjiayong',
        'phone' => '08008088',
        'birthday' => '1992-11-27',
        'gender' => '0',
        'address' => '〒302-0023 tokyo',
        'photo' => 'https://fotopus.com/pict/event_campiagn/item13/2017/img_473_1488875864.jpg',
      ];
      DB::table('students') -> insert($param);

      $param = [
        'name' => '任璐',
        'phone' => '08047998888',
        'birthday' => '1985-04-19',
        'gender' => '0',
        'address' => '〒302-0023 東京都中野区江古田4-40-15',
        'photo' => 'http://image.so.com/v?q=%E5%88%87%E6%A0%BC%E7%93%A6%E6%8B%89&src=tab_www&correct=%E5%88%87%E6%A0%BC%E7%93%A6%E6%8B%89&cmsid=27cd9c1ea38096c61ca9e2ef0ce0e085&cmran=0&cmras=0&cn=0&gn=0&kn=32#multiple=0&gsrc=1&dataindex=3&id=c323f04989f57c33acd9aa46ee7ea57e&currsn=0&jdx=3&fsn=92',
      ];
      DB::table('students') -> insert($param);
    }
}
