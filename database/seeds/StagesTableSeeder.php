<?php

use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('stages')->insert([
                'name' => "ステージ" . $i,
                'stamina' => rand(10, 50),
            ]);
        }
    }
}
