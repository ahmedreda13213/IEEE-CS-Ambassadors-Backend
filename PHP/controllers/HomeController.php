<?php

namespace Controllers;

class HomeController
{
    public function index()
    {
        view('home');
    }
public function about()
{
    return view('about-content');
}

    public function taskList()
    {
        return view('task-list');
    }
}