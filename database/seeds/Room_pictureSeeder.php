<?php

use Illuminate\Database\Seeder;

class Room_pictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'picture' => 'assets/images/pic2.jpg','category_id' => 1,],
            ['id' => 2, 'picture' => 'assets/images/pic3.jpg','category_id' => 2,],
            ['id' => 3, 'picture' => 'assets/images/pic1.jpg','category_id' => 3,],
        ];

        foreach ($items as $item) {
            \App\Room_picture::create($item);
        }
    }
}
