<?php


namespace Database\Factories;


use App\Models\Comment;
use App\Models\Answer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class CommentFactory extends Factory
{



public function definition()
{
return [
'user_id' => User::factory(),
'answer_id' => Answer::factory(),
'body' => fake()->sentence(),
];
}
}