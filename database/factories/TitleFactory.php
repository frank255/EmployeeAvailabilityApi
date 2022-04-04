<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Title>
 */
class TitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->randomElement(['4RR','KJC','ODF','1GL','SWB','YFG','SJA','1OF','MUA','EI5','PEW','8MW','2QJ','G15','D9Q','RLV','PIR','VPE','ON7','GRJ']),
            'name' => $this->faker->jobtitle()
        ];
    }
}
