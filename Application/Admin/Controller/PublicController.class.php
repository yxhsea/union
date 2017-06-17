<?php
/**
 * 新闻类控制器
 */
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
    public function success(){
        $this->display();
    }
    public function error(){
        $this->display();
    }
}