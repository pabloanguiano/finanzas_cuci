<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Captura>
 */
class CapturaFactory extends Factory
{
  
    public function definition(): array
    {
        return [

            'application' => fake()->numberBetween(1000, 5000),
            'type_application' => fake()->numberBetween(1,5),
            'receipt_date' => fake()->dateTime('10/03/2024 12:00:00', null),
            'user' => fake()->numberBetween(1,5),
            'status_application' => fake()->numberBetween(1,3),
            'payment_method' => fake()->numberBetween(1,5),
            'payment_type' => fake()->numberBetween(1,5),
            'payment_complement' => fake()->numberBetween(1,2),
            'patrimonial_registration' => fake()->numberBetween(1,2),
            'travel_format' => fake()->numberBetween(1,0),
            'beneficiary_name' => fake()->name(),
            'concept' => fake()->paragraph(5),
            'proyect_p3e' => fake()->paragraph(2),
            'proyect_name' => fake()->paragraph(2),
            'fund' => fake()->name(),
            'stock' => fake()->numberBetween(1,10),
            'stock_name' => fake()->name(),
            'ures' => fake()->name(),
            'ures_name' => fake()->name(),
            'request_amount' => 10.0,    
            
        ];
    }
}
