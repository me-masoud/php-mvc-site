<?php

namespace Controllers;

class DashboardController{
    public function index()
    {
        return include('./resources/view/dashboard/index.php');
    }
}