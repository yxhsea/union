<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 电子提案管理控制器
 * Class ProposalController
 * @package Admin\Controller
 */
class ProposalController extends Controller{
    /**
     * 添加电子提案
     */
    public function addProposal(){
        if(IS_AJAX){
            $proposal = M('Proposal');
            $data = $proposal->create();
            $data['create_time'] = time();
            $res = $proposal->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'新增成功','status'=>1,'url'=>U('Proposal/ProposalList')]);
            }else{
                $this->ajaxReturn(['info'=>'新增失败','status'=>0,'url'=>U('Proposal/addProposal')]);
            }
        }else{
            $this->display();
        }
    }

    /**
     * 电子提案列表
     */
    public function ProposalList(){
        $Proposal = M('Proposal');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $Proposal->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $Proposal->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('proposallist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 编辑电子提案信息
     */
    public function editProposal(){
        if(IS_AJAX){
            $proposal = M('Proposal');
            $data = $proposal->create();
            $data['update_time'] = time();
            $res = $proposal->where(['id'=>I('post.proposal_id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('Proposal/ProposalList')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('Proposal/ProposalList')]);
            }
        }else{
            $proposal = M('Proposal')->where(['id'=>I('get.id')])->find();
            $this->assign('proposal',$proposal);
            $this->display();
        }
    }

    /**
     * 电子提案详情
     */
    public function detailProposal(){
        $proposal = M('Proposal')->where(['id'=>I('get.id')])->find();;
        $this->assign('proposal',$proposal);
        $this->display();
    }
}