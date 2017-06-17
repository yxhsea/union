<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 权限管理控制器
 * Class AuthController
 * @package Auth\Controller
 */
class AuthController extends BaseController{
    /**
     * 添加权限
     */
    public function addAuth(){
        if(IS_AJAX){
            $Auth = M('Auth');
            $data = $Auth->create();
            $data['create_time'] = time();
            $res = $Auth->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'添加成功','status'=>1,'url'=>U('Auth/AuthList')]);
            }else{
                $this->ajaxReturn(['info'=>'添加失败','status'=>0,'url'=>U('Auth/addAuth')]);
            }
        }else{
            $auth = M('Auth')->where(['status'=>0])->select();
            $this->assign('auth',getTree($auth));
            $this->display();
        }
    }

    /**
     * 权限列表
     */
    public function authList(){
        $Auth = M('Auth');
        $data = $Auth->select();
        $this->assign('authlist',getTree($data));
        $this->display();
    }

    /**
     * 编辑权限信息
     */
    public function editAuth(){
        if(IS_AJAX){
            $Auth = M('Auth');
            $data = $Auth->create();
            $data['update_time'] = time();
            $res = $Auth->where(['id'=>I('post.auth_id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Auth/AuthList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Auth/AuthList')]);
            }
        }else{
            $auth = M('Auth')->where(['status'=>0])->select();
            $this->assign('auth',getTree($auth));

            $authInfo = M('Auth')->where(['id'=>I('get.id')])->find();
            $this->assign('authInfo',$authInfo);
            $this->display();
        }
    }

    /**
     * 权限详情
     */
    public function detailAuth(){
        $Auth = M('Auth')->where(['id'=>I('get.id')])->find();;
        $this->assign('Auth',$Auth);
        $this->display();
    }
}