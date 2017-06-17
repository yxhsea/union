<?php
namespace Admin\Controller;

use think\controller;

/**
 * 系统管理控制器
 * Class SystemController
 * @package Admin\Controller
 */
class SystemController extends BaseController{
    /**
     * 站点配置
     */
    public function siteConfig(){
        if(IS_AJAX){
            $config = M('System');
            $data['value'] = serialize(I('post.'));
            $res = $config->where(['name'=>'config'])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'配置成功','status'=>1,'url'=>U('System/siteConfig')]);
            }else{
                $this->ajaxReturn(['info'=>'配置失败','status'=>0,'url'=>U('System/siteConfig')]);
            }
        }else{
            $config = M('System');
            $res = $config->where(['name'=>'config'])->find();
            $data = unserialize($res['value']);
            $this->assign('config',$data);
            $this->display();
        }
    }
}