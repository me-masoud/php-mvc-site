<?php

namespace Controllers;

use DataBase\DBController;

include './Database/app.php';

class DashboardController{
    public function index()
    {
        return include('./resources/view/dashboard/index.php');
    }

    public function getMessages()
    {
        $sql = "SELECT * FROM contacts ORDER BY id desc";
        $select = new DBController;
        return $select->select($sql);
    }

    public function getUnReadMessages()
    {
        $sql = "SELECT * FROM contacts WHERE status = 'unread' ORDER BY id desc";
        $select = new DBController;
        return $select->select($sql);
    }
}