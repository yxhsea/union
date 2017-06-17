<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
use Admin\Model\AdminModel;

/**
 * 后台登录控制器
 * Class LoginController
 * @package Admin\Controller
 */
class LoginController extends Controller{
    /**
     * 登录页面
     */
    public function index(){
        $this->display();
    }

    /**
     * 生成验证码
     */
    public function verify(){
        $config = [
            'fontSize' => 30,
            'length'   => 4,
        ];
        $Verify = new Verify($config);
        $Verify->entry();
    }

    /**
     * 登录验证
     */
    public function login(){
        if(IS_AJAX){
            //判断验证码是否正确
            $verify = new \Think\Verify();
            if(!$verify->check(I('post.verify'))){
                $this->ajaxReturn(['info'=>'验证码不正确','status'=>101]);
            }

            $user = new AdminModel();
            $res = $user->checkUser(I('post.username'),md5(I('post.password')));
            if(!$res){
                $this->ajaxReturn(['info'=>'用户名或密码错误','status'=>102]);
            }

            if($res['status']!=0){
                $this->ajaxReturn(['info'=>'账号被禁用','status'=>103]);
            }

            //将登录成功的用户信息存入session
            session('admin_id',$res['id']);
            session('admin_username',$res['username']);

            //获取登录时间、IP
            $data['last_login_time'] = time();
            $data['last_login_ip'] = get_client_ip();
            $loginUser = M('Admin')->where(['id'=>$res['id']])->save($data);

            if($loginUser){
                $this->ajaxReturn(['info'=>'登录成功','status'=>200]);
            }
        }else{
            return '非法操作!';
        }
    }

    /**
     * 退出登录
     */
    public function logout(){
        session('admin_id',null);
        session('admin_username',null);
        $this->ajaxReturn(['info'=>'退出成功','status'=>200]);
    }
}