<?php

namespace Controllers;

use DataBase\DBController;

include_once './Database/app.php';

class DashboardController{
    private $select;
    function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->select = new DBController;
    }
    public function index()
    {
        return include('./resources/view/dashboard/index.php');
    }

    public function getMessages()
    {
        $sql = "SELECT * FROM contacts ORDER BY id desc";
        return $this->select->select($sql);
    }

    public function getUnReadMessages()
    {
        $sql = "SELECT * FROM contacts WHERE status = 'unread' ORDER BY id desc";
        return $this->select->select($sql);
    }
}