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

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑运动会</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">
                        <input type="hidden" name="sports_id" value="<?php echo ($sports["id"]); ?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">运动会主题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="theme" value="<?php echo ($sports["theme"]); ?>" placeholder="请填写运动会主题" id="theme">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">主办方</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="host" value="<?php echo ($sports["host"]); ?>" placeholder="请填写运动会主办方" id="host">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">承办方</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="undertake" value="<?php echo ($sports["undertake"]); ?>" placeholder="请填写运动会承办方" id="undertake">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">运动会时间</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control layer-date" name="start_time" value="<?php echo ($sports["start_time"]); ?>" placeholder="运动会开始时间" id="start">
                                <input type="text" class="form-control layer-date" name="end_time" value="<?php echo ($sports["end_time"]); ?>" placeholder="运动会结束时间" id="end">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">运动会地点</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="<?php echo ($sports["address"]); ?>" placeholder="请填写运动会地点" id="address">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">负责人</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="header" value="<?php echo ($sports["header"]); ?>" placeholder="请填写运动会负责人" id="header">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">负责人联系方式</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="<?php echo ($sports["phone"]); ?>" placeholder="请填写运动会负责人联系方式" id="phone">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">运动会简介</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control layer-date" name="introduct" value="<?php echo ($sports["introduct"]); ?>" placeholder="请填写运动会简介" id="introduct">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" id="save">保存内容</button>
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
        sports_editsporst : "<?php echo U('Sports/editSports');?>"
    };
</script>
<script src="/union/public/Admin/js/http/sports/editsports.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>