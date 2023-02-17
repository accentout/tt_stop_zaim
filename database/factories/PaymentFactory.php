<?php

namespace Database\Factories;

use App\Models\Source;
use App\Models\Status;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client' => fake()->name(),
            'contract' => fake()->numerify(),
            'type_id' => Type::all()->random(),
            'date' => fake()->dateTimeThisMonth(),
            'summ' => fake()->randomFloat(2,1, 10000),
            'source_id' => Source::all()->random(),
            'status_id' => Status::all()->random(),
            'created_at' => Carbon::create('now'),
            'updated_at' => Carbon::create('now')
        ];
    }
}
