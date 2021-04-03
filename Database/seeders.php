<?php

namespace DataBase;

require_once realpath(dirname(__FILE__ . '/app.php'));
class Seeder extends DBController{

    public function run()
    {    $fields = array('id' , 'name' , 'email' , 'password', 'status', 'role' , 'created_at' , 'updated_at');
        $users= array(
            array(1 , 'masoud' ,'hosseiny998@gmail.com' ,'362935bbcbc912ead265299442f395d399620783781275803014a41ac694c56f' ,'active' ,'super' , '2021-04-01 11:58:37' , null),
            array(2 ,'milad' , 'asdf2@ff.ff' ,'c834750c0e9bc9f5ce5423f83331ea478c09347d42c7698116561ba5b204a4af' , 'susband' , 'user' , '2021-04-01 11:58:37' , null)
        );

        foreach($users as $key=>$user){

            if($this->insert('users',$fields,$user)){
                echo $key . '<br>';
            };
            
        }
    }
    
}