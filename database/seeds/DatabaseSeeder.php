<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CountrySeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(CategorySeeder::class);
        $this->call(Room_pictureSeeder::class);
        $this->call(Room_priceSeeder::class);
        

    }
}
