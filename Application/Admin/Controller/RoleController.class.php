<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 角色管理控制器
 * Class RoleController
 * @package Admin\Controller
 */
class RoleController extends BaseController{
    /**
     * 添加角色
     */
    public function addRole(){
        if(IS_AJAX){
            $Role = M('Role');
            $data = $Role->create();
            $data['create_time'] = time();
            $data['auth'] = serialize($data['auth']);
            $res = $Role->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'添加成功','status'=>1,'url'=>U('Role/roleList')]);
            }else{
                $this->ajaxReturn(['info'=>'添加失败','status'=>0,'url'=>U('Role/addRole')]);
            }
        }else{
            $auth = M('Auth')->where(['status'=>0])->select();
            $this->assign('auth',getTree($auth));

            $this->display();
        }
    }

    /**
     * 角色列表
     */
    public function roleList(){
        $Role = M('Role');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $Role->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $Role->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('rolelist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 编辑角色信息
     */
    public function editRole(){
        if(IS_AJAX){
            $Role = M('Role');
            $data = $Role->create();
            $data['update_time'] = time();
            $data['auth'] = serialize($data['auth']);
            $res = $Role->where(['id'=>I('post.role_id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Role/roleList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Role/roleList')]);
            }
        }else{
            $auth = M('Auth')->where(['status'=>0])->select();
            $this->assign('auth',getTree($auth));

            $Role = M('Role')->where(['id'=>I('get.id')])->find();
            $Role['auth'] = unserialize($Role['auth']);
            $this->assign('role',$Role);
            $this->display();
        }
    }

    /**
     * 角色详情
     */
    public function detailRole(){
        $Role = M('Role')->where(['id'=>I('get.id')])->find();;
        $this->assign('role',$Role);
        $this->display();
    }
}