<!-- Testing Models -->
<?php


use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase{
    //what should user model do
    //get first and last name of user
    public function testThatWeCanGetTheFirstName(){
        $user = new \App\Models\User;
        $fn = $user->setFirstName('Dhikrullah');
        $checkFn = $user->getFirstName();
          $this->assertEquals($checkFn, $fn);
    }

    // public function testThatWeCanGetTheLastName()
}