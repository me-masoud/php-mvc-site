<?php

namespace DataBase;

require_once (realpath(dirname(__FILE__)."/app.php"));

class Tables extends DBController{
    private $tables = array(
        "CREATE TABLE `users` (
            `id` int(11) unsigned  NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `name` varchar(200) COLLATE utf8_general_ci NOT NULL,
            `email` varchar(200) COLLATE utf8_general_ci NOT NULL,
            `password` varchar(200) COLLATE utf8_general_ci NOT NULL,
            `status` enum('active','susband') COLLATE utf8_general_ci NOT NULL DEFAULT 'active',
            `role` enum('user' , 'admin' , 'super') COLLATE utf8_general_ci NOT NULL DEFAULT 'user',
            `created_at` datetime NOT NULL,
            `updated_at` datetime DEFAULT NULL
        ) ENGINE =InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;",
        "CREATE TABLE `contacts` (
            `id` int(11) unsigned  NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            `clientname` varchar(200) COLLATE utf8_general_ci,
            `email` varchar(200) COLLATE utf8_general_ci,
            `title` varchar(200) COLLATE utf8_general_ci,
            `text` longtext COLLATE utf8_general_ci,
            `status` enum('unread','read','stared') COLLATE utf8_general_ci NOT NULL DEFAULT 'unread',
            `created_at` datetime NOT NULL,
            `updated_at` datetime DEFAULT NULL
        ) ENGINE =InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;"
    );

    public function run()
    {
        foreach($this->tables as $table){
           $create =  $this->createTable($table);
           echo ($create) ? '<br>table created!' : '<br>failed to create table ';
           
        }
    }
}