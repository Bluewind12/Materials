<?php

use Illuminate\Database\Seeder;

class StageToMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('stage_to_materials')->insert([
                'stage_id' => $i,
                'material_id' => $i,
                'percent'=>rand(10,100),
            ]);
        }
    }
}
