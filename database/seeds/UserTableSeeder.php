<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'admin',
                'user_fullName' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('matkhau123'),
                'user_birthday' =>'1999-03-27',
                'user_phone' => '0972889825',
                'user_address' => 'Hà Nội',
                'user_role' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['username' => 'lamnv',
                'user_fullName' => 'Cao Minh Lam',
                'email' => 'lamnv@gmail.com',
                'password' => bcrypt('admin'),
                'user_birthday' =>'1989-03-27',
                'user_phone' => '0972889825',
                'user_address' => 'Hai Phong',
                'user_role' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['username' => 'huync',
                'user_fullName' => 'Nguyen Cong Huy',
                'email' => 'huync@gmail.com',
                'password' => bcrypt('admin'),
                'user_birthday' =>'1994-03-27',
                'user_phone' => '0972889825',
                'user_address' => 'Hà Nội',
                'user_role' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')],  
        ]);
    }
}
