<?php

namespace App\Models;

class User{
    // 
    public $firstName;
    public $lastName;
    public $getFullName;
    public $email;

    public function setFirstName($firstName){
        $this->firstName = trim($firstName); //trim input of user
    }

    public function getFirstName(){
        // return 'Dhikrullah';
       return $this->firstName;
    }

    public function setLastName($lastName){
        $this->lastName = trim($lastName);
    }

    public function getLastName(){
        // return 'Hayjay';
        return $this->lastName;
    }

    public function getFullName(){
        // return 'DhikrullahHayjay';
        return $this->firstName .' '. $this->lastName;
    }

    //set email
    public function setEmail($email){
        return $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    //test if email variables contains same values
    public function getEmailVariables(){
        return [
            'fullName' => $this->getFullName(),
            'email' => $this->getEmail(),
        ];
    }
}


?>