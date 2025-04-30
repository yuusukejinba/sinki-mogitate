<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'comment' => $this->faker->randomElement
                (['甘い', 'おいしい', 'ジューシー' , 'いくらでも食べれる']),            
            
        ];
    }
}
