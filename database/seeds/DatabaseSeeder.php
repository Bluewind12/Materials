<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MaterialsTableSeeder::class);
        $this->call(StagesTableSeeder::class);
        $this->call(MaterialRecipesTableSeeder::class);
        $this->call(StageToMaterialsTableSeeder::class);
    }
}
