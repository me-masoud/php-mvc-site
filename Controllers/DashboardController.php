<?php

namespace Controllers;
include './Database/app.php';

class DashboardController{
    public function index()
    {
        return include('./resources/view/dashboard/index.php');
    }

    public function getMessages()
    {
        $sql = "SELECT * FROM contacts order by id desc";
        return DBController::database($sql);
    }
}