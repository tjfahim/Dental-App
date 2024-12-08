<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrescriptionAssist>
 */
class PrescriptionAssistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(400, 400, 'medical', true, 'Prescription'), // Random image
            'description' => $this->faker->paragraphs(2, true), // Random description
        ];
    }
}
