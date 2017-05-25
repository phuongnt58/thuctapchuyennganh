<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
        	['comment_news_id' => 1,
        		'comment_is_check' => 1,
        		'comment_name' => 'thucnv',
        		'comment_content' => 'Nhìn thẳng vào mắt là thể hiện lịch sự và tôn trọng người mình bắt tay.',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        	['comment_news_id' => 1,
        		'comment_is_check' => 1,
        		'comment_name' => 'Hungbd',
        		'comment_content' => 'Truyền thông của Trump đúng mạnh. Và cuối cùng, chẳng ai biết ông ta muốn làm gì và dự định sẽ làm như thế nào. Đúng là bậc thầy.',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        	['comment_news_id' => 1,
        		'comment_is_check' => 1,
        		'comment_name' => 'Huyentl',
        		'comment_content' => 'Đây gọi là "Vụng chèo, khéo chống". Thôi, mình chả thích được "giỏi" kiểu này đâu!',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        	['comment_news_id' => 1,
        		'comment_is_check' => 0,
        		'comment_name' => 'Quangtv',
        		'comment_content' => 'Làm mình nhớ tới series phim Destination với câu chủ đạo "You can run but cannot hide" , sự thật vẫn là sự thật đã được đóng đinh rồi.',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        	['comment_news_id' => 1,
        		'comment_is_check' => 0,
        		'comment_name' => 'Longld',
        		'comment_content' => 'Mọi thứ mình đều không bằng ông ấy nên không dám bình luận.',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s')]
        ]);
    }
}
