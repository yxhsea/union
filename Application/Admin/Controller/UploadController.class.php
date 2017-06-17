<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

/**
 * 文件上传控制器
 * Class UploadController
 * @package Admin\Controller
 */
class UploadController extends Controller{
    /**
     * 上传图片接口
     */
    public function uploadPicture(){
        $upload = new Upload();//实例化上传类
        $upload->maxSize = 3145728;//设置附件上传大小
        $upload->exts = array('jpg','gif','png','jpeg');//设置附件上传类型
        $upload->rootPath = './Uploads/picture/';//设置附件上传根目录
        //上传文件
        $info = $upload->upload();
        if(!$info){
            $this->ajaxReturn(['info'=>$upload->getError(),'status'=>0]);
        }else{
            $files=$info['file'];
            //判断图片是否已经存在
            $pic = M('Picture')->where(['md5'=>$files['md5'],'sha1'=>$files['sha1']])->find();
            if($pic){
                $this->ajaxReturn(['data'=>['id'=>$pic['id']],'info'=>'上传成功','status'=>1]);
            }else{
                $data = array(
                    'path' => 'Uploads/picture/'.$files['savepath'].$files['savename'],
                    'md5'  => $files['md5'],
                    'sha1' => $files['sha1'],
                    'create_time' => time()
                );
                $picture = M('Picture');
                $id = $picture->add($data);
                if($id){
                    $this->ajaxReturn(['data'=>['id'=>$id],'info'=>'上传成功','status'=>1]);
                }
            }
        }
    }

    /**
     * 上传文件接口
     */
    public function uploadDoc(){
        $upload = new Upload();//实例化上传类
        $upload->maxSize = 1024*1024;//设置附件上传大小
        $upload->exts = '';
        $upload->mimes = '';
        $upload->rootPath = './Uploads/document/';//设置附件上传根目录
        //上传文件
        $info = $upload->upload();
        if(!$info){
            $this->ajaxReturn(['info'=>$upload->getError(),'status'=>0]);
        }else{
            $files=$info['file'];
            //判断图片是否已经存在
            $pic = M('Doc')->where(['md5'=>$files['md5'],'sha1'=>$files['sha1']])->find();
            if($pic){
                $this->ajaxReturn(['data'=>['id'=>$pic['id']],'info'=>'上传成功','status'=>1]);
            }else{
                $data = array(
                    'name' => $files['name'],
                    'size' => $files['size'],
                    'path' => 'Uploads/document/'.$files['savepath'].$files['savename'],
                    'md5'  => $files['md5'],
                    'sha1' => $files['sha1'],
                    'create_time' => time()
                );
                $picture = M('Doc');
                $id = $picture->add($data);
                if($id){
                    $this->ajaxReturn(['data'=>['id'=>$id],'info'=>'上传成功','status'=>1]);
                }
            }
        }
    }
}