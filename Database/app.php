<?php
namespace DataBase;

use mysqli;
use PDO;
use PDOException;

class DBController{

    private $connect; 
    private $option = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);

    private $servername = 'localhost';
    private $database   = 'masoudpolo';
    private $user       = 'root';
    private $password   = '';

    function __construct()
    {
        try{
            $this->connect = new PDO("mysql:host=".$this->servername.";dbname=".$this->database 
            , $this->user , $this->password,$this->option);
        }
        catch(PDOException $e){
            echo "see the errors : " . $e->getMessage();

        }
    }

    public function select($sql , $value = null)  
    {
        try{
            if($value === null){
                return $this->connect->query($sql);
            }else{
                $stmt = $this->connect->prepare($sql);
                $stmt->execute($value);
                return $stmt;
            }
        }
        catch(PDOException $e){
            echo "<div> style='color:red;'> There is some problem in connection :</div>". $e->getMessage();
            return false;
        }

    }

    public function insert($tableName , $fields , $values)
    {
        try{
            $sql  = "INSERT INTO"."$tableName"."(".implode(',',$fields) . ") VALUES ( :" . implode(', :',$fields) . " )";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute(array_combine($fields,$values));
            return true;
        }
        catch(PDOException $e){
            echo "<div> style='color:red;'> There is some problem in connection :</div>". $e->getMessage();
            return false;
        }
    }

    public function createTable($sql)
    {
        try{
            $this->connect->exec($sql);
            return true;
        }
        catch (PDOException $e){
            echo "<div> style='color:red;'> There is some problem in connection :</div>". $e->getMessage();
            return false;
        }
}
}