<?php

namespace Controllers;

use DataBase\Seeder;
use DataBase\Tables;

include './Database/tables.php';
include './Database/seeders.php';

class DbRunController{

    public function createTable()
    {
        $createTable = new Tables;
        $createTable->run();
    }
    public function seeder()
    {
        $seeder = new Seeder;
        $seeder->run();
    }
}