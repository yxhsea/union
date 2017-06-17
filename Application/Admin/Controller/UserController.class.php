<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 用户管理控制器
 * Class UserController
 * @package Admin\Controller
 */
class UserController extends BaseController{
    /**
     * 添加用户
     */
    public function addUser(){
        if(IS_AJAX){
            $User = M('Admin');
            $data = $User->create();
            $data['create_time'] = time();
            $data['password'] = md5($data['password']);
            $res = $User->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'添加成功','status'=>1,'url'=>U('User/userList')]);
            }else{
                $this->ajaxReturn(['info'=>'添加失败','status'=>0,'url'=>U('User/addUser')]);
            }
        }else{
            $role = M('Role')->where(['status'=>0])->select();
            $this->assign("role",$role);

            $this->display();
        }
    }

    /**
     * 用户列表
     */
    public function userList(){
        $User = M('Admin');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $User->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $User->join('LEFT JOIN union_role on union_admin.role_id = union_role.id')->limit($Page->firstRow.','.$Page->listRows)->field('union_admin.id,union_admin.username,union_admin.last_login_ip,union_admin.last_login_time,union_admin.create_time,union_admin.update_time,union_admin.status,union_role.name')->select();
        $this->assign('userlist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 编辑用户信息
     */
    public function editUser(){
        if(IS_AJAX){
            $User = M('Admin');
            $data = $User->create();
            $history_data = $User->where(['id'=>I('post.id')])->find();
            $user_data = array(
                'username'=>$data['username'],
                'password'=>$data['password'] == '' ? $history_data['password'] : md5($data['password']),
                'status'=>$data['status'],
                'update_time'=>time(),
                'role_id'=>$data['role_id'],
                'images_id'=>$data['images_id'] == '' ? $history_data['images_id'] : $data['images_id'],
            );
            $res = $User->where(['id'=>I('post.id')])->save($user_data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('User/userList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('User/userList')]);
            }
        }else{
            $role = M('Role')->where(['status'=>0])->select();
            $this->assign("role",$role);

            $User = M('Admin')->where(['id'=>I('get.id')])->find();
            $this->assign('user',$User);
            $this->display();
        }
    }

    /**
     * 用户详情
     */
    public function detailUser(){
        $User = M('Admin')->where(['id'=>I('get.id')])->find();;
        $this->assign('User',$User);
        $this->display();
    }

    /**
     * 验证用户名是否存在
     */
    public function is_username(){
        if(IS_AJAX){
            $user = M('Admin');
            $res = $user->where(['username'=>I('post.username')])->find();
            if($res){
                $this->ajaxReturn(['info'=>'用户名已经存在','status'=>1]);
            }else{
                $this->ajaxReturn(['info'=>'用户名不存在','status'=>0]);
            }
        }else{
            $this->ajaxReturn(['info'=>'非法请求','status'=>0]);
        }
    }

    /**
     * 获取用户名
     */
    public function getUsername(){
        if(IS_AJAX){
            $user = M('Admin');
            $res = $user->where(['id'=>I('post.id')])->find();
            if($res){
                $this->ajaxReturn(['data'=>['username'=>$res['username']],'info'=>'请求成功','status'=>1]);
            }else{
                $this->ajaxReturn(['info'=>'请求失败','status'=>0]);
            }
        }else{
            $this->ajaxReturn(['info'=>'非法请求','status'=>0]);
        }
    }
}