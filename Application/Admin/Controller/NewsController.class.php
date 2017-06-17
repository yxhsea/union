<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 新闻类控制器
 * Class NewsController
 * @package Admin\Controller
 */
class NewsController extends BaseController{
    /**
     * 发布新闻
     */
    public function addnews(){
        if(IS_AJAX){
            $result = content_conversion(htmlspecialchars_decode(I('post.content')));
            $data = array(
                'title'     => I('post.title'),
                'author'    => I('post.author'),
                'cate_id'   => I('post.cate_id'),
                'content'   => $result['content'],
                'label'     => I('post.label'),
                'status'    => I('post.status'),
                'create_time' => time(),
                'images_id'   => $result['images_id']
            );
            $res = M('news')->add($data);
            if($res){
                $this->ajaxReturn(['info'=>'发布新闻成功','status'=>1,'url'=>U('News/newslist')]);
            }else{
                $this->ajaxReturn(['info'=>'发布新闻失败','status'=>0,'url'=>U('News/addnews')]);
            }
        }else{
            //获取分类
            $this->assign('cate',$this->getCate(M('category')->select()));
            $this->display();
        }
    }

    /**
     * 新闻列表
     */
    public function newslist(){
        //实例化news对象
        $news = M('news');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $news->where(['remove'=>0])->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        //进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $newslist = $news->where(['remove'=>0])->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($newslist as $key => &$value){
            $res = M('category')->where(['id'=>$value['cate_id']])->find();
            $value['cate_title'] = $res['title'];
        }

        $this->assign('newslist',$newslist);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 新闻详情页
     */
    public function detailnews(){
        if(IS_GET){
            $detailnews = M('news')->where(['id'=>I('get.id')])->find();
            $detailnews['content'] = content_images($detailnews['content'],$detailnews['images_id']);
            $this->assign('detailnews',$detailnews);
            $this->display();
        }else{
            return "非法请求!";
        }
    }

    /**
     * 编辑新闻
     */
    public function editnews(){
        if(IS_AJAX){
            $result = content_conversion(htmlspecialchars_decode(I('post.content')));
            $data = array(
                'title'     => I('post.title'),
                'author'    => I('post.author'),
                'cate_id'   => I('post.cate_id'),
                'content'   => $result['content'],
                'label'     => I('post.label'),
                'status'    => I('post.status'),
                'update_time' => time(),
                'images_id'   => $result['images_id']
            );
            $res = M('news')->where(['id'=>I('post.id')])->save($data);
            if($res){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('News/newslist')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('News/editnews')]);
            }
        }else{
            $editnews = M('news')->where(['id'=>I('get.id')])->find();
            $editnews['content'] = content_images($editnews['content'],$editnews['images_id']);
            $this->assign('editnews',$editnews);

            //获取分类
            $this->assign('cate',$this->getCate(M('category')->select()));

            $this->display();
        }
    }

    /**
     * 分类列表
     */
    public function catelist(){
        $catelist = M('category')->select();
        $this->assign('catelist',$this->getCate($catelist));
        $this->assign('page',$catelist['show']);
        $this->display();
    }

    /**
     * 添加分类
     */
    public function addcate(){
        if(IS_AJAX){
            $data = array(
                'title' => I('post.title'),
                'pid'   => I('post.pid'),
                'create_time' => time(),
            );
            $cate = M('category')->add($data);
            if($cate){
                $this->ajaxReturn(['info'=>'添加分类成功','status'=>'1','url'=>U('News/catelist')]);
            }else{
                $this->ajaxReturn(['info'=>'添加分类失败','status'=>'0','url'=>U('News/addcate')]);
            }
        }else{
            $cate = M('category')->where(['status'=>0])->select();
            $this->assign('cate',$this->getCate($cate));
            $this->display();
        }
    }

    /**
     * 编辑分类
     */
    public function editcate(){
        if(IS_AJAX){
            $data = array(
                'pid' => I('post.pid'),
                'title' => I('post.title'),
                'update_time' => time(),
            );
            $cate = M('category')->where(['id'=>I('post.cate_id')])->save($data);
            if($cate){
                $this->ajaxReturn(['info'=>'编辑成功','status'=>1,'url'=>U('News/catelist')]);
            }else{
                $this->ajaxReturn(['info'=>'编辑失败','status'=>0,'url'=>U('News/editcate')]);
            }
        }else{
            $cate = M('category')->where(['id'=>I('get.id')])->find();
            $this->assign("cate",$cate);
            $this->assign("catelist",$this->getCate(M('category')->select()));
            $this->display();
        }
    }

    /**
     * 回收站管理
     */
    public function recycle(){
        //实例化news对象
        $news = M('news');

        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $news->where(['remove'=>1])->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();

        //进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $newslist = $news->where(['remove'=>1])->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($newslist as $key => &$value){
            $res = M('category')->where(['id'=>$value['cate_id']])->find();
            $value['cate_title'] = $res['title'];
        }

        $this->assign('newslist',$newslist);
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 删除新闻
     */
    public function cancelNews(){
        if(IS_AJAX){
            $res = M('news');
            $res->where(['id'=>I('post.id')]);
            $res->delete();
            $sql = $res->getLastSql();
            if($res){
                $this->ajaxReturn(['info'=>'操作成功','status'=>'1','sql'=>'']);
            }else{
                $this->ajaxReturn(['info'=>'操作失败','status'=>'0','sql'=>'']);
            }
        }else{
            $this->ajaxReturn(['info'=>'非法操作']);
        }
    }

    /**
     * 获取分类树(无限级分类)
     * @param $arr
     * @param int $pid 父级id
     * @param int $level 级别
     * @return array
     */
    public function getCate($arr,$pid=0,$level=0){
        static $list = array();
        foreach($arr as $value){
            if($value['pid'] == $pid){
                if($level == 0){
                    $value['level'] = '';
                }else{
                    $value['level'] = $level == 1 ? str_repeat('|---',$level) : '|'.str_repeat('---',$level);
                }
                $list[] = $value;
                self::getCate($arr,$value['id'],$level+1);
            }
        }
        return $list;
    }

    public function test(){
        $res = getPage('category');
        $cate = $this->getCate($res['result']);
        var_dump($cate);
    }
}