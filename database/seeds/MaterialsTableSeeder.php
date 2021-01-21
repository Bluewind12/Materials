<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('materials')->insert([
                'id' => $i,
                'name' => "素材" . $i,
                'comment' => "下位素材" . $i,
            ]);
        }
        for ($i = 11; $i <= 16; $i++) {
            DB::table('materials')->insert([
                'id' => $i,
                'name' => "素材" . $i,
                'comment' => "上位素材" . $i,
            ]);
        }

    }
}
