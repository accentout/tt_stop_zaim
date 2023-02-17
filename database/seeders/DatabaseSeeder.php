<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Payment;
use App\Models\Source;
use App\Models\Status;
use App\Models\Type;
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
        Type::factory(3)->create();
        Source::factory(3)->create();
        Status::factory(3)->create();
        Payment::factory(3)->create();
    }
}
