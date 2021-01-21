<?php

use Illuminate\Database\Seeder;

class MaterialRecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('material_recipes')->insert([
                'target_material_id' => $i + 10,
                'material_id_1' => $i,
                'material_count_1' => $i,
            ]);
        }
        DB::table('material_recipes')->insert([
            'target_material_id' => 16,
            'material_id_1' => 11,
            'material_count_1' => 1,
            'material_id_2' => 12,
            'material_count_2' => 2,
            'material_id_3' => 13,
            'material_count_3' => 3,
        ]);


    }
}
