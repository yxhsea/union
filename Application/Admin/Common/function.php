<?php
/**
 * 后台公共函数
 */

/**
 * 获取图片路径
 * @param $id
 * @param string $field
 * @return bool|string
 */
function getImgPath($images_id){
    $info = M('picture')->where(['id'=>$images_id])->find();
    if($info){
        $path = __ROOT__.'/'.$info['path'];
    }else{
        $path = false;
    }
    return $path;
}

/**
 * 内容输出时,将内容中的base64_images转换为base64
 * @param $content  文章内容
 * @param $images_id 图片id
 * @return mixed|string
 */
function content_images($content, $images_id){
    $pattern = '/base64_images/U';
    preg_match($pattern,$content,$res);
    if($res){
        if($images_id) {
            $ids = unserialize($images_id);
            foreach ($ids as $key => $value) {
                $img_path = getImgPath($value);
                $content = preg_replace($pattern, $img_path, $content, 1);
            }
        }
    }
    return $content;
}


/**
 * 内容转换，将base64,转换为简化的base64_images,进行内容与图片分离
 * @param $content
 * @return mixed
 */
function content_conversion($content){
    $pattern = '/<img src="(.*)"/U';
    preg_match_all($pattern, $content, $res);
    if(!$res[1]) {
        $data['content'] = $content;
        $data['images_id'] = '';
        return $data;
    }
    foreach ($res[1] as $key => $value) {
        $images[] = base64_to_imgid($value);
    }
    foreach ($images as $key => $value) {
        $content = preg_replace('/data:.*"/U', 'base64_images"', $content, 1);
    }
    $data['content'] = $content;            //文章内容
    $data['images_id'] = serialize($images);//图片id序列化
    return $data;
}

/**
 * base64转换为图片存储,图片路径存储在picture数据表。
 * @param $base64
 * @return int|mixed|string 返回图片id
 */
function base64_to_imgid($base64){
    //对base64进行正则匹配
    preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64, $result);

    //图片格式
    $type = $result[2];

    //实现判断图片是否上传过
    $pattern = '/data:.*base64/U';
    //获取base64的数据
    $res = preg_replace($pattern, '', $base64);
    $str = base64_decode($res);
    $md5 = md5($str);
    $sha1 = sha1($str);
    $res = M('picture')->where(['md5'=>$md5,'sha1'=>$sha1])->find();
    if ($res) {
        //如果图片存在，则返回图片id
        return $res['id'];
    }else{
        //存储目录
        $PATH = 'Uploads/picture/'. date('Y-m-d', time()) . "/";

        //判断目录是否存在，不存在则创建
        if (!is_dir($PATH)) {
            mkdir($PATH, 0777, true);
        }

        //文件名
        $name = md5(rand(100, 999) . time());

        //图片路径
        $imgPath = $PATH . $name . '.' . $type;

        //拼装数据
        $data = [
            'path'        => $imgPath,
            'md5'         => $md5,
            'sha1'        => $sha1,
            'create_time' => time(),
        ];

        //插入数据到数据表
        $id = M('picture')->add($data);

        //返回图片id
        return $id;
    }
}

/**
 * 获取分类树(无限级分类)
 * @param $arr
 * @param int $pid 父级id
 * @param int $level 级别
 * @return array
 */
function getTree($arr,$pid=0,$level=0){
    static $list = array();
    foreach($arr as $value){
        if($value['pid'] == $pid){
            if($level == 0){
                $value['level'] = '';
            }else{
                $value['level'] = $level == 1 ? str_repeat('|&nbsp;---&nbsp;',$level) : '|'.str_repeat('&nbsp;---&nbsp;',$level);
            }
            $list[] = $value;
            getTree($arr,$value['id'],$level+1);
        }
    }
    return $list;
}

/**
 * 获取图片的地址
 * @param $img_id @图片id
 * @return string
 */
function getImage($img_id){
    $res = M('Picture')->where(['id'=>$img_id])->find();
    $url = __ROOT__.'/'.$res['path'];
    return $url;
}

/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function format_bytes($size, $delimiter = '') {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter ."&nbsp;".$units[$i];
}

