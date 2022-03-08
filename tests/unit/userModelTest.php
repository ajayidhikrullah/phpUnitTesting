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
}