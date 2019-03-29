<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/29
 * Time: 19:52
 */

class Login extends User
{

    public function __construct($username, $passwod){
        $this->username=$username;
        $this->password=$passwod;
    }
    function query()
    {
        // TODO: Implement query() method.
        //载入xml
       $sxe = simplexml_load_file('user.xml');
       $username=$sxe->name;
       $password=$sxe->password;
       if($this->username==$username && $this->password==$password){
//           echo '登录成功';
           //生成cookie

           setcookie('username',$this->username);
           Tool::_loaction($this->username.'欢迎回来,登录成功','?index=member');
       }else{
//           echo '登录失败';
       Tool::_loaction('登录失败','?index=login');
       }
    }

    function check()
    {
        // TODO: Implement check() method.
        // 判断输入是否为空
        if(empty($this->username) || empty($this->password)){
            return false;
        }
        return true;
    }
}