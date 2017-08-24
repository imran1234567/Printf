<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'username' => 'Imran',
            'email' => 'sk2read@gmail.com',
            'report'    => 'description',
            'description'   => 'hello'
        ]);
            
        $product->save();    
    }
}
