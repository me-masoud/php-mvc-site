<?php

namespace Controllers;

use DataBase\Tables;

include './Database/tables.php';

class DbRunController{
    public function run()
    {
       
        $createTable = new Tables;
        $createTable->run();
    }
}