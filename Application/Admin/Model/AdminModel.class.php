<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
    //验证登录用户
    public function checkUser($username,$password){
        $res = M('admin')->where(['username'=>$username,'password'=>$password])->find();
        return $res;
    }
}