<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/1/15 20:33
 * description :
 */
namespace Admin\Controller;
use Think\Controller;

/**
 * Class BaseController
 * @package Admin\Controller
 */
class BaseController extends Controller{

    public function _initialize(){
        if(!session('admin_id')){
            echo "<script>window.location.href='admin.php/Login/index';</script>";
        }
    }

    /**
     * 更改状态
     * @param $id   @id
     * @param $tableName @表名
     * @param $status @状态值
     */
    public function setStatus($id,$tableName,$status){
        if(IS_AJAX){
            $data = array(
                'status' => $status
            );
            $res = M($tableName);
            $res->where(['id'=>$id]);
            $res->save($data);
            $sql = $res->getLastSql();
            if($res){
                $this->ajaxReturn(['info'=>'操作成功','status'=>'1','sql'=>$sql]);
            }else{
                $this->ajaxReturn(['info'=>'操作失败','status'=>'0','sql'=>$sql]);
            }
        }else{
            $this->ajaxReturn(['info'=>'非法操作']);
        }
    }

    /**
     * 移除操作
     * @param $id
     * @param $tableName
     * @param $remove
     */
    public function remove($id,$tableName,$remove){
        if(IS_AJAX){
            $data = array(
                'remove' => $remove
            );
            $res = M($tableName);
            $res->where(['id'=>$id]);
            $res->save($data);
            $sql = $res->getLastSql();
            if($res){
                $this->ajaxReturn(['info'=>'操作成功','status'=>'1','sql'=>$sql]);
            }else{
                $this->ajaxReturn(['info'=>'操作失败','status'=>'0','sql'=>$sql]);
            }
        }else{
            $this->ajaxReturn(['info'=>'非法操作']);
        }
    }

    /**
     * 删除
     * @param $id
     * @param $tableName
     */
    public function delete($id,$tableName){
        if(IS_AJAX){
            $res = M($tableName);
            $res->where(['id'=>$id])->delete();
            $sql = $res->getLastSql();
            if($res){
                $this->ajaxReturn(['info'=>'操作成功','status'=>'1','sql'=>$sql]);
            }else{
                $this->ajaxReturn(['info'=>'操作失败','status'=>'0','sql'=>$sql]);
            }
        }else{
            $this->ajaxReturn(['info'=>'非法操作']);
        }
    }
}