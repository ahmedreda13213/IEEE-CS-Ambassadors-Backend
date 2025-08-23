<?php


namespace Database\Factories;


use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class QuestionFactory extends Factory
{



public function definition()
{
return [
'user_id' => User::factory(),
'title' => fake()->sentence(),
'body' => fake()->paragraphs(),
];
}
}