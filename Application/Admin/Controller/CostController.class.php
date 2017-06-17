<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 经费管理控制器
 * Class CostController
 * @package Admin\Controller
 */
class CostController extends BaseController{
    /**
     * 添加经费
     */
    public function addCost(){
        if(IS_AJAX){
            $cost = M('Cost');
            $data = $cost->create();
            $data['create_time'] = time();
            $res = $cost->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'添加成功','status'=>1,'url'=>U('Cost/costList')]);
            }else{
                $this->ajaxReturn(['info'=>'添加失败','status'=>0,'url'=>U('Cost/addCost')]);
            }
        }else{
            $this->display();
        }
    }

    /**
     * 经费列表
     */
    public function costList(){
        $cost = M('Cost');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $cost->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $cost->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('costlist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 编辑经费信息
     */
    public function editCost(){
        if(IS_AJAX){
            $cost = M('Cost');
            $data = $cost->create();
            $data['update_time'] = time();
            $res = $cost->where(['id'=>I('post.cost_id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Cost/costList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Cost/costList')]);
            }
        }else{
            $cost = M('Cost')->where(['id'=>I('get.id')])->find();
            $this->assign('cost',$cost);
            $this->display();
        }
    }

    /**
     * 经费详情
     */
    public function detailCost(){
        $cost = M('Cost')->where(['id'=>I('get.id')])->find();;
        $this->assign('cost',$cost);
        $this->display();
    }
}