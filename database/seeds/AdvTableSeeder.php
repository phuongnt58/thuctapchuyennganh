<?php

use Illuminate\Database\Seeder;

class AdvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert([
            ['adv_company' => 'CÔNG TY CỔ PHẦN XÂY DỰNG VÀ THƯƠNG MẠI VT',
                'adv_url' => 'mU102wrwyunhadat.PNG',
                'adv_position' => 'header',
                'url_company' => 'http://www.vinhomestancang.co/',
                'created_day' => '2017-03-28',
                'expired_day' => '2017-05-28'],
            ['adv_company' => 'Công ty TNHH A',
                'adv_url' => 'IpfS2MjTSznewomg.jpg',
                'adv_position' => 'sidebar',
                'url_company' => 'http://www.lazada.vn/',
                'created_day' => '2017-03-28',
                'expired_day' => '2017-05-28']
        ]);
    }
}
