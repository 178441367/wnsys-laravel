<?php

class AdminTest extends TestCase
{
    public function setUp(){
        parent::setUp();
    }
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAdminIndex()
    {
        echo 1;
    }
    public function testAdminLogin()
    {
        $mock = new \Mockery\Container();
        $model = $mock->mock('\App\Module\Cms\ModelArticleModel');
        $model->shouldReceive("test")->andReturn(1);
        $this->assertTrue(1==$model->test());
    }

}

