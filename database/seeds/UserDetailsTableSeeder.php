<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'name' => 'mokko',
            'img' => 'users/usopp.png',
            'self_introduction' => '頑張ります',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table('user_details')->updateOrInsert($param);
    }
}
