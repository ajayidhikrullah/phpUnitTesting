<?php

namespace App\Models;

class User{
    // 
    public $firstName;
    public $lastName;

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        // return 'Dhikrullah';
       return $this->firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getLastName(){
        // return 'Hayjay';
        return $this->lastName;
    }
}


?>