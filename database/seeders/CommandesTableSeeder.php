<?php

namespace Database\Seeders;
use App\Models\Commande;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Database\Seeder;

class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Commande::factory()->count(50)->create();

        foreach(Commande::all() as $cmd){
            $products = Product::inRandomOrder()->take(rand(1,3))->pluck('id');
            foreach($products as $prod){
                $cmd->products()->attach($prod,['quantity'=> rand(1,3),'price'=> rand(100,300)]);
            }
        }
    }
}
