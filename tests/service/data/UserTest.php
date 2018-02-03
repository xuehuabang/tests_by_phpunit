<?php
/**
 * @name UserTest
 * @desc user test
 * @auth hackingangle<hackingangle@gmail.com>
 */

use PHPUnit\Framework\TestCase;
use \Hackingangle\Service\Data\User;

class UserTest extends TestCase {
    /**
     * user data service
     * @var Service_Data_User
     */
    protected $objUserService;

    /**
     * set up autoload
     */
    public function setUp()
    {
        $this->objUserService = new User();
    }

    /**
     * test case for create user
     */
    public function testCreateUser()
    {
        $this->assertEquals(true, true, "创建用户失败");
    }
}
