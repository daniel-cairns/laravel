<?php

use Illuminate\Database\Seeder;

class WorkPhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workphone')->insert([
            'phone_number' => '(+64) '.rand( 100000, 1000000),
            'description' => str_random(rand(100, 1000))
        ]);
    }
}
