<?php

namespace Database\Factories;

use App\Models\UsersProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersProfile>
 */
class UsersProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullName' => $this->faker->name,
            'dateBirth' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'profilePicture' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
        ];
    }
}
