<!-- Testing Models -->
<?php


use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase{
    //what should user model do
    //get first and last name of user

    public function testThatWeCanGetTheFirstName(){
        $user = new \App\Models\User;
      
        $user->setFirstName('Dhikrullah');
        // $user->getFirstName();
          $this->assertEquals($user->getFirstName(), 'Dhikrullah');
    }

    public function testThatWeGetLastName(){
      $user = new \App\Models\User;

      $user->setLastName('Hayjay');

      $this->assertEquals($user->getLastName(), 'Hayjay');
  }

  // check for fullame of user
  public function testFullNameIsReturned(){
    $user = new \App\Models\User;
    
    $user->setFirstName('Dhikrullah');

    $user->setLastName('Hayjay');

    $this->assertEquals($user->getFullName(), 'Dhikrullah Hayjay');

  }


  //lets get trimmed input from users
  public function testFirstAndLastNameAreTrimmed(){
    $user = new \App\Models\User;

    $user->setFirstName(' Dhikrullah    ');
    
    $user->setLastName('    Hayjay   ');
    
    $this->assertEquals($user->getFirstName(), 'Dhikrullah');

    $this->assertEquals($user->getLastName(), 'Hayjay');

  }

  //check emaill address to be set

  public function testEmailAdd(){

    $user = new \App\Models\User; //initiate user in Model

    $user->setEmail('dhikr@teqniahub.com');

    $this->assertEquals($user->getEmail(), 'dhikr@teqniahub.com');


  }


}