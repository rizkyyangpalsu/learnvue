<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'HP',
                'price' => 10000
            ],
            [
                'name' => 'Casing',
                'price' => 1000
            ],
            [
                'name' => 'Camera',
                'price' => 100000
            ],
        ]);
    }
}
