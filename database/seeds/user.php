<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('bk');
        $user = [];
        $user_info = [];
        for ($i = 1; $i <= 10; $i++) {
            $user[] = [
                'id' => Str::random(5),
                'name_lengkap' => $faker->name(),
                'jenis_kelamin' => 'L',
                'alamat' => $faker->address(),

            ];
        }
    }
}