<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'single room',],
            ['id' => 2, 'name' => 'double room',],
            ['id' => 3, 'name' => 'suite room',],

        ];

        foreach ($items as $item) {
            \App\Category::create($item);
        }
    }
}
