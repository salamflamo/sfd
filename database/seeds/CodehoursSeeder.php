<?php

use Illuminate\Database\Seeder;

class CodehoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,35)as $index) {

        DB::table('codehours')->insert([

            'nama' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'kode_codehours' => substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 3)), 0, 3),
            'no_hp' => substr(str_shuffle(str_repeat("0123456789", 3)), 0, 3),
            'jurusan' => str_random(10),
            'confirmed' => 0
        ]);
    }
    }
}
