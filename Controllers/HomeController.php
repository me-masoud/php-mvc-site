<?php

namespace Controllers;

use PDO;
use PDOException;
include 'DBController.php';

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

        $sql = "INSERT INTO contacts (clientname , title, email , text)
        VALUES ('$name', '$title', '$email' , '$text')";
        $result = (DBController::database($sql)) ?  true : false;
        // echo (DBController::database($sql));
        // die();
        if($result == true){
            $_SESSION['send_message'] = 'sent';
            if(isset($_SESSION['send_message'])){
                header('Location:' . $_SERVER['HTTP_REFERER']);
            }
            

        }
        
    }

}