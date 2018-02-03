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
        $strUserNameRandom = 'hackingangle_'. time();
        $arrUserInfoMocked = [
            'user_name' => $strUserNameRandom,
            'user_email' => "$strUserNameRandom@gmail.com",
            'user_passwd' => '123456',
        ];
        $integerCreateUserId = $this->objUserService->createUser($arrUserInfoMocked['user_name'],
            $arrUserInfoMocked['user_email'], $arrUserInfoMocked['user_passwd']);
        $this->assertGreaterThan(1, $integerCreateUserId);
        $arrUserInfoMocked['user_id'] = $integerCreateUserId;
        return $arrUserInfoMocked;
    }

    /**
     * get user from create user
     * @depends testCreateUser
     */
    public function testGetUser($arrCreateUserInfo)
    {
        $arrUserInfo = $this->objUserService->getUser($arrCreateUserInfo['user_id']);
        $this->assertEquals($arrUserInfo['user_name'], $arrCreateUserInfo['user_name']);
        $this->assertEquals($arrUserInfo['user_email'], $arrCreateUserInfo['user_email']);
        $this->assertEquals($arrUserInfo['user_passwd'], $arrCreateUserInfo['user_passwd']);
    }

    /**
     * get user test more
     * @dataProvider getUserIds
     * @param integer $intUserId
     */
    public function testGetUserForMore($intUserId)
    {
        $arrUserInfo = $this->objUserService->getUser($intUserId);
        $this->assertEquals($intUserId, $arrUserInfo['user_id']);
    }

    /**
     * get user ids for data provider
     * @return array
     */
    public function getUserIds()
    {
        return [
            [
                1001,
            ],
            [
                1002,
            ],
            [
                1003,
            ],
        ];
    }
}
