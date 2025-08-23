<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisteredUserController;

use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuestionController::class, 'index'])->name('home');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);
Route::delete('logout', [SessionController::class, 'destroy']);

Route::resource('questions', QuestionController::class);
Route::post('questions/{question}/answers', [AnswerController::class, 'store'])->name('answers.store');
Route::post('questions/{question}/answers/{answer}/best', [AnswerController::class, 'markBest'])->name('answers.best');
Route::post('answers/{answer}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('tags', [TagController::class, 'index'])->name('tags.index');
Route::post('tags', [TagController::class, 'store'])->name('tags.store');