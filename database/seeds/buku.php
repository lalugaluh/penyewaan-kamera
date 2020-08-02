<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $buku = [];
        for ($i = 1; $i <= 10; $i++) {
            $buku[] = [
                'bk' => Str::random(5),
                'nama_buku' => $faker->name(),
                'penerbit' => $faker->company(),
                'penulis' => $faker->name(),

            ];
        }
        DB::table('buku')->insert($buku);
    }
}
