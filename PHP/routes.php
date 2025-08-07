<?php

use Core\Router;
use Controllers\HomeController;
use Controllers\NotesController;
use Controllers\AuthController;


$router = new Router;
$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/notes', [NotesController::class, 'index'])           
    ->get('/notes/create', [NotesController::class, 'create'])   
    ->post('/notes', [NotesController::class, 'store'])          
    ->get('/login', [AuthController::class, 'showLoginForm'])  
    ->post('/login', [AuthController::class, 'store'])  
     ->get('/logout', [AuthController::class, 'logout'])   
    ->delete('/session', [AuthController::class, 'logout'])    
    ->get('/about', [HomeController::class, 'about'])
    ->get('/task-list', [HomeController::class, 'taskList']);
     
return $router;