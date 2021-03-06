<?php namespace Smilecode;

class AccessorImpl
{
    use Accessor;

    private $firstName;
    private $age;
}

class AccessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @before
     */
    public function before()
    {
        $this->sut = new AccessorImpl();
    }

    /**
     * @test
     */
    public function setFirstNameでfirstNameプロパティに値を設定できること()
    {
        $this->sut->setFirstName('Takashi');
        $this->assertAttributeEquals('Takashi', 'firstName', $this->sut);
        //$this->assertTrue(method_exists($this->sut, 'setFirstName'));
    }

    /**
     * @test
     */
    public function getFirstNameでfirstNameプロパティの値が取得できること()
    {
        $this->sut->setFirstName('Takashi');
        $this->assertEquals('Takashi', $this->sut->getFirstName());
    }

    /**
     * @test
     */
    public function setAgeでageプロパティに値を設定できること()
    {
        $this->sut->setAge(34);
        $this->assertAttributeEquals(34, 'age', $this->sut);
    }

    /**
     * @test
     */
    public function getAgeでageプロパティの値が取得できること()
    {
        $this->sut->setAge(34);
        $this->assertEquals(34, $this->sut->getAge());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function setAgeに引数を設定しない場合にはInvalidArgumentExceptionが送出されること()
    {
        $this->sut->setAge();
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function setAgeに2つの引数を設定するとInvalidArgumentExceptionが送出されること()
    {
        $this->sut->setAge(34, 1);
    }

    /**
     * @test
     * @expectedException BadMethodCallException
     */
    public function setAddressメソッドの呼び出しでBadMethodCallExceptionが送出されること()
    {
        $this->sut->setAddress('test');
    }

    /**
     * @test
     * @expectedException BadMethodCallException
     */
    public function hogeメソッドの呼び出しでBadMethodCallExceptionが送出されること()
    {
        $this->sut->hoge();
    }
}

