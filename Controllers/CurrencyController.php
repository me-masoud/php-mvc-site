<?php

namespace Controllers;

class CurrencyController{
    public function index()
    {
        return include('./resources/view/pages/currency.php');
    }
}
