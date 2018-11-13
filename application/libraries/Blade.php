<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade as BladeEngine;

class Blade 
{
    private $blade;
    protected $viewDirectory = VIEWPATH;
    protected $cacheDirectory = APPPATH . 'cache';

    public function __construct()
    {
        $this->blade = new BladeEngine($this->viewDirectory, $this->cacheDirectory);
    }

    public function render($view, $data)
    {
        echo $this->blade->make($view, $data);
    }
}