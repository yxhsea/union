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

<div class="wrapper wrapper-content animated fadeIn">
    <div class="row" style="width: 96%;margin: auto;">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <?php if(($reward['type'] == 0)): ?><li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">编辑奖励记录</a>
                    </li><?php endif; ?>
                <?php if(($reward['type'] == 1)): ?><li class="active"><a data-toggle="tab" href="#tab-2" aria-expanded="false">编辑处罚记录</a>
                    </li><?php endif; ?>
            </ul>
            <div class="tab-content">
                <?php if(($reward['type'] == 0)): ?><div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <input type="hidden" value="<?php echo ($reward["id"]); ?>" name="id" id="a_id" >
                            <div class="form-group">
                                <label class="col-sm-2 control-label">身份证号码</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="member_id_card" value="<?php echo ($reward["member_id_card"]); ?>" placeholder="请填写会员身份证号码" id="a_member_id_card">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">会员姓名</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="member_name" value="<?php echo ($reward["member_name"]); ?>" placeholder="请填写会员姓名" id="a_member_name">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">奖励时间</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_time" value="<?php echo ($reward["reward_time"]); ?>" placeholder="请填写奖励时间" id="a_reward_time" onclick="laydate();">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">奖励项目</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_title" value="<?php echo ($reward["reward_title"]); ?>" placeholder="请填写奖励项目" id="a_reward_title">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">奖励级别</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_level" value="<?php echo ($reward["reward_level"]); ?>" placeholder="请填写奖励级别" id="a_reward_level">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">授予单位</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_unit" value="<?php echo ($reward["reward_unit"]); ?>" placeholder="请填写授予单位" id="a_reward_unit">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">授予原因</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_reason" value="<?php echo ($reward["reward_reason"]); ?>" placeholder="请填写授予原因" id="a_reward_reason">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">备注</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_note" value="<?php echo ($reward["reward_note"]); ?>" placeholder="请填写备注" id="a_reward_note">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" id="a_save">保存内容</button>
                                    <button class="btn btn-white" type="button" onclick="history.go(-1);">返回</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><?php endif; ?>
                <?php if(($reward['type'] == 1)): ?><div id="tab-2" class="tab-pane active">
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <input type="hidden" value="<?php echo ($reward["id"]); ?>" name="id" id="b_id" >
                            <div class="form-group">
                                <label class="col-sm-2 control-label">身份证号码</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="member_id_card" value="<?php echo ($reward["member_id_card"]); ?>" placeholder="请填写会员身份证号码" id="b_member_id_card">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">会员姓名</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="member_name" value="<?php echo ($reward["member_name"]); ?>" placeholder="请填写会员姓名" id="b_member_name">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">处罚时间</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_time" value="<?php echo ($reward["reward_time"]); ?>" placeholder="请填写处罚时间" id="b_reward_time" onclick="laydate();">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">处罚项目</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_title" value="<?php echo ($reward["reward_title"]); ?>" placeholder="请填写处罚项目" id="b_reward_title">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">处罚级别</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_level" value="<?php echo ($reward["reward_level"]); ?>" placeholder="请填写处罚级别" id="b_reward_level">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">处罚单位</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_unit" value="<?php echo ($reward["reward_unit"]); ?>" placeholder="请填写处罚单位" id="b_reward_unit">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">处罚原因</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_reason" value="<?php echo ($reward["reward_reason"]); ?>" placeholder="请填写处罚原因" id="b_reward_reason">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">备注</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reward_note" value="<?php echo ($reward["reward_note"]); ?>" placeholder="请填写备注" id="b_reward_note">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" id="b_save">保存内容</button>
                                    <button class="btn btn-white" type="button" onclick="history.go(-1);">返回</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script>
    //定义全局变量
    var GV = {
        reward_editreward : "<?php echo U('Reward/editReward');?>"
    }
</script>
<script src="/union/public/Admin/js/http/reward/editreward.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>