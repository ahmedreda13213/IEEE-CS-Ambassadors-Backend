<?php


namespace Database\Factories;


use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class AnswerFactory extends Factory
{



public function definition()
{
return [
'user_id' => User::factory(),
'question_id' => Question::factory(),
'body' => fake()->paragraphs(),
];
}
}