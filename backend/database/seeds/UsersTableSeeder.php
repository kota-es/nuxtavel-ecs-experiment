<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => '鈴木太郎',
                'email' => 'taro.yamada@email.com',
                'password' => '1q2w3e4r',
            ],
            [
                'name' => '佐藤次郎',
                'email' => 'jiro.sato@email.com',
                'password' => '1q2w3e4r',
            ],
            [
                'name' => '高橋三郎',
                'email' => 'saburo.takahashi@email.com',
                'password' => '1q2w3e4r',
            ],
        ];

        foreach($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
