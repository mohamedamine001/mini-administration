<?php

namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Seeder;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('clients')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => $faker->numerify('###-###-####')
        ]);*/
        Client::factory()->count(50)->create();
    }
}
