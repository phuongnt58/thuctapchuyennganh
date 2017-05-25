<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => 'Thế giới',
                'category_slug' => 'the-gioi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_name' => 'Kinh doanh',
                'category_slug' => 'kinh-doanh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_name' => 'Giải trí',
                'category_slug' => 'giai-tri',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_name' => 'Giáo dục',
                'category_slug' => 'giao-duc',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_name' => 'Khoa học',
                'category_slug' => 'khoa-hoc',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_name' => 'Số hóa',
                'category_slug' => 'so-hoa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_name' => 'Thể thao',
                'category_slug' => 'the-thao',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
