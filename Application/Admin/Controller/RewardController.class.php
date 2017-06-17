<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 奖惩记录控制器
 * Class RewardController
 * @package Admin\Controller
 */
class RewardController extends BaseController{
    /**
     * 添加奖惩记录
     */
    public function addReward(){
        if(IS_AJAX){
            $reward = M('Reward');
            $data = $reward->create();
            $data['create_time'] = time();
            $res = $reward->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'添加成功','status'=>1,'url'=>U('Reward/rewardList')]);
            }else{
                $this->ajaxReturn(['info'=>'添加失败','status'=>0,'url'=>U('Reward/addReward')]);
            }
        }else{
            $this->display();
        }
    }

    /**
     * 奖惩记录列表
     */
    public function rewardList(){
        //实例化Reward
        $reward = M('Reward');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $a_count = $reward->where(['type'=>0])->count();
        $b_count = $reward->where(['type'=>0])->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $a_Page = new \Think\Page($a_count,10);
        $b_Page = new \Think\Page($b_count,10);

        //分页显示输出
        $a_show = $a_Page->show();
        $b_show = $b_Page->show();

        $a_reward = $reward->where(['type'=>0])->order('create_time desc')->limit($a_Page->firstRow.','.$a_Page->listRows)->select();
        $b_reward = $reward->where(['type'=>1])->order('create_time desc')->limit($b_Page->firstRow.','.$b_Page->listRows)->select();

        $this->assign('a_reward',$a_reward);
        $this->assign('a_Page',$a_show);

        $this->assign('b_reward',$b_reward);
        $this->assign('b_Page',$b_show);
        $this->display();
    }

    /**
     * 编辑奖惩记录
     */
    public function editReward(){
        if(IS_AJAX){
            $reward = M('Reward');
            $data = $reward->create();
            $data['update_time'] = time();
            $res = $reward->where(['id'=>$data['id']])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Reward/rewardList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Reward/addReward')]);
            }
        }else{
            $reward = M('Reward')->where(['id'=>I('get.id')])->find();;
            $this->assign('reward',$reward);
            $this->display();
        }
    }

    /**
     * 奖惩记录详情
     */
    public function detailReward(){
        $reward = M('Reward')->where(['id'=>I('get.id')])->find();;
        $this->assign('reward',$reward);
        $this->display();
    }
}