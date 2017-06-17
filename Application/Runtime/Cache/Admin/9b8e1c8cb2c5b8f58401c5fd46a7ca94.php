<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>湘潭大学工会管理系统</title>
    <meta name="keywords" content="湘潭大学工会管理系统">
    <meta name="description" content="湘潭大学工会管理系统">

    <link rel="shortcut icon" href="/union/public/Admin/img/favicon.ico">
    <link href="/union/public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/union/public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/union/public/Admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/union/public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/union/public/Admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/union/public/Admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/union/public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="/union/public/Admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <script src="/union/public/Admin/js/jquery.min63b9.js?v=2.1.4"></script>
    <script src="/union/public/Admin/js/bootstrap.min14ed.js?v=3.3.6"></script>
    <script src="/union/public/Admin/js/content.mine209.js?v=1.0.0"></script>
    <script src="/union/public/Admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="/union/public/Admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="/union/public/Admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="/union/public/Admin/js/demo/bootstrap-table-demo.min.js"></script>
    <script src="/union/public/Admin/js/plugins/summernote/summernote.min.js"></script>
    <script src="/union/public/Admin/js/plugins/summernote/summernote-zh-CN.js"></script>
    <script src="/union/public/Admin/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/union/public/Admin/js/demo/peity-demo.min.js"></script>
    <script src="/union/public/Admin/js/plugins/peity/jquery.peity.min.js"></script>
    <link href="/union/public/Admin/css/plugins/webuploader/webuploader.css" rel="stylesheet">
    <script src="/union/public/Admin/js/plugins/webuploader/webuploader.js"></script>
    <script src="/union/public/Admin/js/layer/layer.js"></script>
    <script src="/union/public/Admin/js/laydate/laydate.js"></script>
    <script src="http://tajs.qq.com/stats?sId=9051096" type="text/javascript"  charset="UTF-8"></script>
</head>

<body class="gray-bg">

<div class="wrapper wrapper-content">
    <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>编辑新闻</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo ($editnews["id"]); ?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">新闻标题</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="请输入新闻标题" class="form-control" value="<?php echo ($editnews["title"]); ?>" name="title" id="title">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">新闻作者</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="请输入新闻作者" class="form-control" value="<?php echo ($editnews["author"]); ?>" name="author" id="author">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">新闻分类</label>

                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="cate_id" id="cate_id">
                                        <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cate["id"]); ?>" <?php if($editnews['cate_id'] == $cate['id']): ?>selected="selected"<?php endif; ?> ><?php echo ($cate["level"]); echo ($cate["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">新闻内容</label>
                                <div class="col-sm-10">
                                    <div class="summernote" id="content">
                                        <?php echo ($editnews["content"]); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    新闻标签
                                </label>

                                <div class="col-sm-10">
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="0" name="label" <?php if($editnews["label"] == 0): ?>checked="checked"<?php endif; ?> ><i></i> 普通</label>
                                        <label><input type="radio" value="1" name="label" <?php if($editnews["label"] == 1): ?>checked="checked"<?php endif; ?>> <i></i> 置顶</label>
                                        <label><input type="radio" value="2" name="label" <?php if($editnews["label"] == 2): ?>checked="checked"<?php endif; ?>> <i></i> 推荐</label>
                                        <label><input type="radio" value="3" name="label" <?php if($editnews["label"] == 3): ?>checked="checked"<?php endif; ?>> <i></i> 热点</label>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    新闻状态
                                </label>

                                <div class="col-sm-10">
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="0" name="status" <?php if($editnews["status"] == 0): ?>checked="checked"<?php endif; ?> > <i></i> 启用</label>
                                        <label><input type="radio" value="1" name="status" <?php if($editnews["status"] == 1): ?>checked="checked"<?php endif; ?>> <i></i> 禁用</label>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit" id="save">保存内容</button>
                                    <button class="btn btn-white" type="button" onclick="history.go(-1);">返回</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
    //定义全局变量
    var GV = {
       news_editnews : "<?php echo U('news/editnews');?>"
    };
</script>
<script src="/union/public/Admin/js/http/news/editnews.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>