<?php
namespace Controllers;

use DataBase\DBController;

include './Database/app.php';

class LoginController{
    function __construct()
    {
        session_start();
    }
    public function showLoginPage()
    {
        if(isset($_SESSION['login']) && $_SESSION['login']){
            include('./resources/view/dashboard/index.php');
        }else{
            include('./resources/view/pages/auth.php');
        }
    }

    public function loginUser()
    {
        $email = $_POST['email'];
        $password = hash('sha256' , $_POST['password']);
        if($email == '' || $password == ''){
            return 'please fill the filds';
        }
        $user = $this->checkUserExist($email);

        if($user && $this->checkPassword($user , $password)){
           $this->setLogin($user);
        }else{
            return (!$user) ? 'user dosnt exist!' : 'password in not matched to this user!';
        }
        ($user === true) ? $this->setLogin($user) : 

        $this->redirectLogin();
    }

    public function signupUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        if($email == '' || $password == '' || $name == ''){
            return 'please fill the filds';
        }
        $fields = array('email' , 'password' , 'name' , 'created_at') ;
        $valus  = array($_POST['email'] , hash('sha256' , $_POST['password']) , $_POST['name'] ,date("Y-m-d h:i:s"));
        if(!$this->checkUserExist($email)){
            $insert = new DBController;
            $result = $insert->insert('users' , $fields , $valus);
            return $result;
        }
    }

    public function checkPassword($user , $password)
    {
        return ($user[0]['password'] == $password)? true : false;
    }

    public function checkUserExist($email)
    {
        $sql = "SELECT * FROM users WHERE email = '$email';";
        $select = new DBController;
        $result = $select->select($sql);
        $user = $result->fetchAll();
        return $user;
    }

    public function setLogin($final)
    {
        $_SESSION['login'] = true;
        $_SESSION['name']  = $final[0]['name'];
        $_SESSION['id']    = $final[0]['id'];
    }

    public function redirectLogin()
    {
        if($_SESSION['login']){
            header("location: dashboard");
        }else{
            header("Location: login");    
        }
    }

    public function logout()
    {
        $_SESSION['login'] = false;
        return header("Location: login");
    }
}