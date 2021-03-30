<?php

namespace Controllers;

class LoginController{
    public function showLoginPage()
    {
        include('./resources/view/pages/auth.php');
    }
}