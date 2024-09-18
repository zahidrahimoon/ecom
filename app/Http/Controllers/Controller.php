<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function showHeroPage()
    {
        return view('components.pagehero', ['title' => 'Your Page Title Here']);
    }
}
