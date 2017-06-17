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
                        <h5>编辑电子提案</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">提案主题</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="theme" value="<?php echo ($proposal["theme"]); ?>" placeholder="请填写提案主题" id="theme">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">提案时间</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="time" value="<?php echo ($proposal["time"]); ?>" placeholder="请填写提案时间" id="time" onclick="laydate();">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">案由</label>

                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="reason" value="<?php echo ($proposal["reason"]); ?>" placeholder="请填写案由" id="reason"><?php echo ($proposal["reason"]); ?></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">审查意见</label>

                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="opinions" value="<?php echo ($proposal["opinions"]); ?>" placeholder="请填写提案审查意见" id="opinions"><?php echo ($proposal["opinions"]); ?></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">提案人</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="header" value="<?php echo ($proposal["header"]); ?>" placeholder="请填写提案人" id="header">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">所在部门</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="department" value="<?php echo ($proposal["department"]); ?>" placeholder="请填写提案人所在部门" id="department">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系电话</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" value="<?php echo ($proposal["phone"]); ?>" placeholder="请填写提案人联系电话" id="phone">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">提案内容</label>

                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="content" value="<?php echo ($proposal["content"]); ?>" placeholder="请填写提案内容" id="content"><?php echo ($proposal["content"]); ?></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">解决方案</label>

                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="solution" value="<?php echo ($proposal["solution"]); ?>" placeholder="请填写提案解决方案" id="solution"><?php echo ($proposal["solution"]); ?></textarea>
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
            proposal_editproposal : "<?php echo U('Proposal/editProposal');?>"
        };
    </script>
    <script src="/union/public/Admin/js/http/proposal/editproposal.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>