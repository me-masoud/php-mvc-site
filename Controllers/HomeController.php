<?php

namespace Controllers;

class HomeController{
    public function index(int $var = null)
    {
        include('./resources/view/pages/index.php');
    }
    public function abouteMe(int $var = null)
    {
        include('./resources/view/pages/abouteme.php');
    }

}