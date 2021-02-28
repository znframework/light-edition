<?php namespace Project\Controllers;

use URI;

class Home extends Controller
{
    public function main()
    {
        Masterpage::title('Welcome to Light Edition');
    }

    public function s404()
    {
        Masterpage::title('404! File Not Found');
    }
}