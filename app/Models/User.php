<?php

namespace App\Models;

class User{
    // 
    public $firstName;

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        // return 'Dhikrullah';
       return $this->firstName;
    }
}


?>