<?php

use Illuminate\Database\Seeder;

class Room_priceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'price' => 300,'category_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Room_price::create($item);
        }
    }
}
