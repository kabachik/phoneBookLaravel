<?php

namespace Database\Seeders;

use App\Models\contact_models;
use App\Models\Phone;
use App\Models\Phones;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        contact_models::factory(50)->create();
    }
}
