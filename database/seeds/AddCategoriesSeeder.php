<?php

use Illuminate\Database\Seeder;

class AddCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['name' => 'Single'],
            ['name' => 'Double'],
            ['name' => 'Suite'],
        ];

        foreach ($items as $item) {
            \App\Category::create($item);
        }
    }
}
