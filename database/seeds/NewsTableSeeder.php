<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['news_cate_id' => 2,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-hjth6oFrEJ',
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 1,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 6,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 1,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 2,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 1,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 7,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 6,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 11,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 12,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 1,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 18,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 18,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 18,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 19,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 13,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 1,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 23,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 23,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 1,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 23,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['news_cate_id' => 24,
                'news_user_id' => 2,
                'news_title' => 'IS khiêu khích Tổng thống Trump',
                'news_slug' => 'is-khieu-khich-tong-thong-trump-'.str_random(10),
                'news_description' => 'Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) cho rằng, Tổng thống Mỹ Donald Trump kh&ocirc;ng hiểu về Syria',
                'news_content' => '<p>Trong b&igrave;nh luận đầu ti&ecirc;n nhắm đến Tổng thống Mỹ Donald Trump kể từ khi &ocirc;ng nhậm chức, Tổ chức Nh&agrave; nước Hồi gi&aacute;o tự xưng (IS) n&oacute;i: &ldquo;Nước Mỹ c&aacute;c người đang bị nhấn ch&igrave;m m&agrave; kh&ocirc;ng c&oacute; cứu, c&aacute;c người trở th&agrave;nh con mồi cho c&aacute;c chiến binh của đế chế Hồi gi&aacute;o khắp nơi tr&ecirc;n thế giới, c&aacute;c người đ&atilde; kiệt quệ v&agrave; dấu hiệu diệt vong của c&aacute;c người hiển hiện r&otilde;&rdquo;.</p>

                    <p>Trong đoạn ghi &acirc;m, người ph&aacute;t ng&ocirc;n của IS Abu Hassan al-Muhajer n&oacute;i, nước Mỹ đang được điều h&agrave;nh bởi một người &ldquo;kh&ocirc;ng biết g&igrave; về Syria, Iraq hay Hồi gi&aacute;o&rdquo;.</p>

                    <p>Đ&acirc;y l&agrave; những b&igrave;nh luận đầu ti&ecirc;n của IS nhắm đến Tổng thống Trump kể từ khi &ocirc;ng nhậm chức hồi cuối th&aacute;ng 1 vừa qua. Trong b&igrave;nh luận trước đ&oacute;, IS n&oacute;i &ocirc;ng Trump l&agrave; &ldquo;người bốc đồng, kh&oacute; đo&aacute;n&rdquo;.</p>

                    <p>Về phần m&igrave;nh, Tổng thống Trump từng tuy&ecirc;n bố đ&aacute;nh bại IS l&agrave; ưu ti&ecirc;n h&agrave;ng đầu trong nhiệm kỳ của &ocirc;ng.</p>

                    <p>Tổng thống Trump đang nghi&ecirc;n cứu c&aacute;c biện ph&aacute;p để th&uacute;c đẩy chiến dịch chống IS ở Iraq v&agrave; Syria của li&ecirc;n minh do Mỹ đứng đầu. C&aacute;c lực lượng do Mỹ hậu thuẫn đang chiến đấu gi&agrave;nh lại hai th&agrave;nh phố lớn nhất của Nh&agrave; nước Hồi gi&aacute;o l&agrave; Mosul ở Iraq v&agrave; Raqqa ở Syria.</p>

                    <p>Đoạn ghi &acirc;m k&eacute;o d&agrave;i khoảng 37 ph&uacute;t v&agrave; được đăng tải qua Telegram. Trong đ&oacute;, IS c&ograve;n đề cập đến c&aacute;c vụ tấn c&ocirc;ng khủng bố gần đ&acirc;y ở ch&acirc;u &Acirc;u, k&ecirc;u gọi những kẻ ủng hộ ch&uacute;ng thực hiện c&aacute;c vụ tấn c&ocirc;ng kh&aacute;c nhằm giảm bớt sức &eacute;p với tổ chức n&agrave;y ở Iraq v&agrave; Syria vốn đang tr&ecirc;n đ&agrave; suy yếu.</p>

                    <p>Ph&aacute;t ng&ocirc;n vi&ecirc;n IS n&oacute;i rằng, tổ chức n&agrave;y sẽ kh&ocirc;ng từ bỏ Trung Đ&ocirc;ng, tiếp tục duy tr&igrave; th&agrave;nh tr&igrave; của ch&uacute;ng ở Syria, Iraq v&agrave; Yemen.</p>',
                'news_view' => 0,
                'news_is_hot' => 0,
                'news_is_check' => 1,
                'news_is_public' => 1,
                'news_images' => 'TzV3t3WmpIaaa1.jpg',
                'news_image_thumbnail' => 'R7xZ5tKP4raaa1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
