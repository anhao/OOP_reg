<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/29
 * Time: 19:53
 */

class Reg extends User
{

    /**
     * Reg constructor.
     * @param $username
     * @param $passwod
     * @param $notpasswod
     * @param $email
     */
    public function __construct($username, $passwod, $notpasswod, $email){
        $this->username=$username;
        $this->password=$passwod;
        $this->notpassword=$notpasswod;
        $this->email=$email;
    }

    /**
     *
     */
    public function query()
    {
        // TODO: Implement query() method.
      $_xml = <<<xml
<user>
<name>$this->username</name>
<password>$this->password</password>
<notpassword>$this->notpassword</notpassword>
<email>$this->email</email>
</user>
xml;

        //创建xml对象
        $sxe = new SimpleXMLElement($_xml);

        //保存xml
        $sxe->asXML('user.xml');
        Tool::_loaction('注册成功','?index=login');
    }

    public function check()
    {
        // TODO: Implement check() method.
        if(empty($this->username) || empty($this->password) || empty($this->notpassword) || empty($this->email)){
            return false;
        }
        return true;
    }
}