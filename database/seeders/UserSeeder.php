<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($index = 0; $index <= 10; $index++) {
            DB::table('users')->insert([
                'first_name' => 'default' . $index,
                'last_name' => 'default' . $index,
                'email' => Str::random(10) . '@default.com',
                'cellphone' => '12345678',
                'password' => password_hash('default', PASSWORD_DEFAULT),
                'state_id' => rand(1,4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
