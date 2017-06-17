<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 运动会管理控制器
 * Class SportsController
 * @package Admin\Controller
 */
class SportsController extends BaseController{
    /**
     * 添加运动会
     */
    public function addSports(){
        if(IS_AJAX){
            $sports = M('Sports');
            $data = $sports->create();
            $data['create_time'] = time();
            $res = $sports->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'添加成功','status'=>1,'url'=>U('Sports/sportsList')]);
            }else{
                $this->ajaxReturn(['info'=>'添加失败','status'=>0,'url'=>U('Sports/addSports')]);
            }
        }else{
            $this->display();
        }
    }

    /**
     * 运动会列表
     */
    public function sportsList(){
        $sports = M('Sports');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $sports->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $sports->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('sportslist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 编辑运动会信息
     */
    public function editSports(){
        if(IS_AJAX){
            $sports = M('Sports');
            $data = $sports->create();
            $data['update_time'] = time();
            $res = $sports->where(['id'=>I('post.sports_id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Sports/SportsList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Sports/SportsList')]);
            }
        }else{
            $sports = M('Sports')->where(['id'=>I('get.id')])->find();
            $this->assign('sports',$sports);
            $this->display();
        }
    }

    /**
     * 运动会详情
     */
    public function detailSports(){
        $sports = M('Sports')->where(['id'=>I('get.id')])->find();;
        $this->assign('sports',$sports);
        $this->display();
    }
}