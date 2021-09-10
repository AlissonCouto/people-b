<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\People;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PeopleTableSeeder::class);
    }
}

class PeopleTableSeeder extends Seeder{

    public function run()
    {
        People::create([
            'firstName' => 'João',
            'lastName' => 'Teste',
            'email' => 'email@example.com',
            'phone' => '6790000000',
            'legalPerson' => false,
            'cpf' => '00000000000'
        ]);
    }

}
