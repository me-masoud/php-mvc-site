<?php
namespace Controllers;

use mysqli;
use PDO;
use PDOException;

class DBController{
    public static function database($sql)
    {
        $servername = 'localhost';
        $database   = 'masoudpolo';
        $user       = 'root';
        $password   = '';

        $con = new mysqli($servername , $user , $password , $database);
        if($con->connect_error){
            die('failed to connect to database' . $con->connect_error);
        }
        
        $result = $con->query($sql);

        return $result;

        $con->close();
    }





    // public static function database($sql)
    // {
    //     $servername= 'localhost';
    //     $database = 'masoudpolo';
    //     $user     = 'root';
    //     $password = '';

    //     try{
    //         $con = new PDO("mysql:host=$servername;dbname=$database" , $user , $password);
    //         $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    //         $q = $con->query($sql);
    //         $q->setFetchMode(PDO::FETCH_ASSOC);
    //         return $con;
            
    //     }catch(PDOException $e){
    //         echo "failed : " . $e->getMessage();
    //     }
    // }
}