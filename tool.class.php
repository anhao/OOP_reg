<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/29
 * Time: 21:29
 */

//final 不能被继承，不能修改
final class Tool
{
 static function _loaction($_info,$_url=''){
     echo "<script>alert('$_info');location.href='$_url';</script>";
     exit();
 }
}