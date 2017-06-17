<?php
namespace Admin\Controller;
use Org\Net\Http;
use Think\Controller;

/**
 * 文档管理控制器
 * Class DocController
 * @package Doc\Controller
 */
class DocController extends BaseController{
    /**
     * 添加文档
     */
    public function addDoc(){
       $this->display();
    }

    /**
     * 文档列表
     */
    public function docList(){
        $Doc = M('Doc');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $Doc->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        $data = $Doc->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($data as &$value){
            $value['size'] = $this->sizecount($value['size']);
        }

        $this->assign('doclist',$data);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 下载文件
     */
    public function download(){
        if(IS_GET){
            $res = M('Doc')->where(['id'=>I('get.id')])->find();
            $url = $_SERVER['DOCUMENT_ROOT'].__ROOT__.'/'.$res['path'];

            //导入下载类
            import('Org.Net.Http');

            Http::download($url,$res['name']);

        }else{
            $this->ajaxReturn(['info'=>'非法请求','status'=>0]);
        }
    }

    /**
     * 字节转换
     * @param $byte
     * @return string
     */
    public function sizecount($byte){
        if($byte < 1024){
            return $byte.'&nbsp;byte';
        }else if(($size = round($byte/1024,2)) < 1024){
            return $size.'&nbsp;KB';
        }else if(($size = round($byte/(1024*1024),2)) < 1024){
            return $size.'&nbsp;MB';
        }else{
            return round($byte/(1024*1024*1024),2).'&nbsp;GB';
        }
    }
}