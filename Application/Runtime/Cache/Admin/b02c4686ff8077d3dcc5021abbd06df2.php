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
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="" style="text-align: center;">
                <h3>
                    <?php if($reward["type"] == 0): ?>奖励记录详情<?php endif; ?>
                    <?php if($reward["type"] == 1): ?>处罚记录详情<?php endif; ?>
                </h3>
            </div>
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>身份证号码</th>
                    <td><?php echo ($reward["member_id_card"]); ?></td>
                </tr>
                <tr>
                    <th>会员姓名</th>
                    <td><?php echo ($reward["member_name"]); ?></td>
                </tr>
                <tr>
                    <th>
                        <?php if($reward["type"] == 0): ?>奖励时间<?php endif; ?>
                        <?php if($reward["type"] == 1): ?>处罚时间<?php endif; ?>
                    </th>
                    <td><?php echo ($reward["reward_time"]); ?></td>
                </tr>
                <tr>
                    <th>
                        <?php if($reward["type"] == 0): ?>奖励级别<?php endif; ?>
                        <?php if($reward["type"] == 1): ?>处罚级别<?php endif; ?>
                    </th>
                    <td><?php echo ($reward["reward_level"]); ?></td>
                </tr>
                <tr>
                    <th>
                        <?php if($reward["type"] == 0): ?>授予单位<?php endif; ?>
                        <?php if($reward["type"] == 1): ?>处罚单位<?php endif; ?>
                    </th>
                    <td><?php echo ($reward["reward_unit"]); ?></td>
                </tr>
                <tr>
                    <th>
                        <?php if($reward["type"] == 0): ?>授予原因<?php endif; ?>
                        <?php if($reward["type"] == 1): ?>处罚原因<?php endif; ?>
                    </th>
                    <td><?php echo ($reward["reward_reason"]); ?></td>
                </tr>
                <tr>
                    <th>备注</th>
                    <td><?php echo ($reward["reward_note"]); ?></td>
                </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-outline btn-primary btn-xs" onclick="history.go(-1);">返回</button>
        </div>
    </div>
</div>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>