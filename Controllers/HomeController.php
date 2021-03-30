<?php

namespace Controllers;

use DataBase\DBController;
use PDO;
use PDOException;
include './Database/app.php';

class HomeController{
    public function index(int $var = null)
    {
        include('./resources/view/pages/index.php');
    }
    public function abouteMe(int $var = null)
    {
        include('./resources/view/pages/abouteme.php');
    }
    public function abouteMeFa()
    {
        include('./resources/view/pages/abouteme-fa.php');
    }

    public function submitForm()
    {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $text  = $_POST['text'];

        date_default_timezone_set('Asia/Tehran');
        $table = "contacts";
        $fields= array('clientname' , 'title' , 'email' , 'text' , 'created_at' , 'updated_at');
        $values= array($name , $title , $email , $text ,date("Y-m-d h:i:s"), null);
        $DB = new DBController;
        $result = ($DB->insert($table , $fields , $values)) ?  true : false;
  
        if($result == true){
            session_start();
            $_SESSION['send_message'] = 'sent';
            if(isset($_SESSION['send_message'])){
                header('Location:' . $_SERVER['HTTP_REFERER']);
            }
            

        }
        
    }

}