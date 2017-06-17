<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 系统首页控制器
 * Class IndexController
 * @package Admin\Controller
 */
class IndexController extends BaseController {
    public function index(){
        $role_id = M('Admin')->where(['id'=>session('admin_id')])->getField('role_id');
        $auth = M('Role')->where(['id'=>$role_id])->getField('auth');
        $this->assign('auth',unserialize($auth));

        $usernamae =  M('Admin')->where(['id'=>session('admin_id')])->getField('username');
        $images =  M('Admin')->where(['id'=>session('admin_id')])->getField('images_id');
        $rolename = M('Role')->where(['id'=>$role_id])->getField('name');
        $this->assign('user_id',session('admin_id'));
        $this->assign('username',$usernamae);
        $this->assign('images',$images);
        $this->assign('rolename',$rolename);

        $this->display();
    }
    public function main(){
        //mysql版本信息
        $mysql_version = M()->query('SELECT VERSION() AS ver');
        $config = [
            'url'             => $_SERVER['HTTP_HOST'],
            'document'        => $_SERVER['DOCUMENT_ROOT'],
            'server_os'       => PHP_OS,
            'server_port'     => $_SERVER['SERVER_PORT'],
            'server_soft'     => $_SERVER['SERVER_SOFTWARE'],
            'php_version'     => PHP_VERSION,
            'mysql_version'   => $mysql_version[0]['ver'],
            'max_upload_size' => ini_get('upload_max_filesize')
        ];

        $this->assign('config',$config);
        $this->display();
    }
}