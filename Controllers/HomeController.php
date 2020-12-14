<?php

namespace Controllers;

class HomeController{
    public function index(int $var = null)
    {
        include('./resources/view/home.php');
    }
}