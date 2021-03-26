<?php namespace Project\Controllers;

class Initialize extends Controller
{
    public function main(string $params = NULL)
    {
        Theme::active('/');

        Masterpage::headPage('Sections/head')
                  ->bodyPage('Sections/body')
                  ->browserIcon('favicon.ico');
    }
}