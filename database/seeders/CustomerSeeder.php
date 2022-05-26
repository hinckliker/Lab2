<?php

namespace Database\Seeders;

use App\Models\Addres;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
            ->count(100)
            ->has(Addres::factory()->count(3),'addres')
            ->create();
    }
}
