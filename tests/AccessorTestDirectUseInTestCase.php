<?php namespace Smilecode;

class AccessorTest extends \PHPUnit_Framework_TestCase
{
    use Accessor;

    private $firstName;
    private $age;

    /**
     * @test
     */
    public function setFirstNameでfirstNameプロパティに値を設定できること()
    {
        $this->setFirstName('Takashi');
        $this->assertEquals('Takashi', $this->firstName);
    }

    /**
     * @test
     */
    public function getFirstNameでfirstNameプロパティの値が取得できること()
    {
        $this->setFirstName('Takashi');
        $this->assertEquals('Takashi', $this->getFirstName());
    }

    /**
     * @test
     */
    public function setAgeでageプロパティに値を設定できること()
    {
        $this->setAge(34);
        $this->assertEquals(34, $this->age);
    }

    /**
     * @test
     */
    public function getAgeでageプロパティの値が取得できること()
    {
        $this->setAge(34);
        $this->assertEquals(34, $this->getAge());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function setAgeに引数を設定しない場合にはInvalidArgumentExceptionが送出されること()
    {
        $this->setAge();
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function setAgeに2つの引数を設定するとInvalidArgumentExceptionが送出されること()
    {
        $this->setAge(34, 1);
    }

    /**
     * @test
     * @expectedException BadMethodCallException
     */
    public function setAddressメソッドの呼び出しでBadMethodCallExceptionが送出されること()
    {
        $this->setAddress('test');
    }

    /**
     * @test
     * @expectedException BadMethodCallException
     */
    public function hogeメソッドの呼び出しでBadMethodCallExceptionが送出されること()
    {
        $this->hoge();
    }
}


