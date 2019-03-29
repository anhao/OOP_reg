<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/29
 * Time: 19:49
 */

//抽象用户类,规范子类的字段和方法
abstract class User
{
    //成员字段
    protected $username;
    protected $password;
    protected $notpassword;
    protected $email;

    //一个方法，登录或登录
    //点了登录就执行登录。否则注册
    abstract function query();
   //验证字段
    abstract function check();

}