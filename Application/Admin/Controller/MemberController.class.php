<?php
namespace Admin\Controller;
use app\mobile\controller\Base;
use Think\Controller;

/**
 * 会员信息控制器
 * Class MemberController
 * @package Admin\Controller
 */
class MemberController extends BaseController{
    /**
     * 新增会员
     */
    public function addMember(){
        if(IS_AJAX){
            $member = M('Member');
            $data = $member->create();
            $data['create_time'] = time();
            $res = $member->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'新增成功','status'=>1,'url'=>U('Member/memberList')]);
            }else{
                $this->ajaxReturn(['info'=>'新增失败','status'=>0,'url'=>U('Member/addMember')]);
            }
        }else{
            $this->display();
        }
    }

    /**
     * 会员列表
     */
    public function memberList(){
        //实例化Memebr
        $member = M('Member');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $member->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $member->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('memberlist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 编辑会员信息
     */
    public function editMember(){
        if(IS_AJAX){
            $member = M('Member');
            $data = $member->create();
            $data['update_time'] = time();
            $res = $member->where(['id'=>I('post.member_id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Member/memberList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Member/editMember')]);
            }
        }else{
            $member = M('Member')->where(['id'=>I('get.id')])->find();
            $this->assign('member',$member);
            $this->display();
        }
    }

    /**
     * 会员信息详情
     */
    public function detailMember(){
        $member = M('Member')->where(['id'=>I('get.id')])->find();
        $this->assign('member',$member);
        $this->display();
    }
}