<?php namespace Hackingangle\Service\Data;
/**
 * @name User
 * @desc user service
 * @auth hackingangle<hackingangle@gmail.com>
 */

class User {
    /**
     * create user
     * @param  string $strUserName
     * @param  string $strUserEmail
     * @param  string $strUserPasswd
     * @return int
     */
    public function createUser($strUserName, $strUserEmail, $strUserPasswd)
    {
        // mock do create user ret start
        $ret = 10001;
        // mock do create user ret end
        return $ret;
    }

    /**
     * get user info
     * @param  integer $intUserId
     * @return array
     */
    public function getUser($intUserId)
    {
        $ret = [];
        // mock start
        $strUserNameRandom = 'hackingangle_'. time();
        $arrUserInfoMocked = [
            'user_id' => $intUserId,
            'user_name' => $strUserNameRandom,
            'user_email' => "$strUserNameRandom@gmail.com",
            'user_passwd' => '123456',
        ];
        $ret = $arrUserInfoMocked;
        // mock end
        return $ret;
    }
}
