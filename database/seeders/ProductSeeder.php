<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [['name' => 'Coke',
                'price' => 12.00,
                'quantity' => 100],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],
            ['name' => 'C2',
            'price' => 5.00,
            'quantity' => 200,],],
            
    );
    }
}
