<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:21 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo (C("system_title")); ?></title>
    <meta name="keywords" content="<?php echo (C("system_title")); ?>">
    <meta name="description" content="<?php echo (C("system_title")); ?>">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/union/public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/union/public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/union/public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/union/public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox float-e-margins">
        <div class="ibox-content">

            <table class="table table-hover">
                <tbody>
                <tr>
                    <td>网站域名</td>
                    <td><?php echo ($config["url"]); ?></td>
                </tr>
                <tr>
                    <td>网站目录</td>
                    <td><?php echo ($config["document"]); ?></td>
                </tr>
                <tr>
                    <td>服务器操作系统</td>
                    <td><?php echo ($config["server_os"]); ?></td>
                </tr>
                <tr>
                    <td>服务器端口</td>
                    <td><?php echo ($config["server_port"]); ?></td>
                </tr>
                <tr>
                    <td>服务器环境</td>
                    <td><?php echo ($config["server_soft"]); ?></td>
                </tr>
                <tr>
                    <td>PHP版本</td>
                    <td><?php echo ($config["php_version"]); ?></td>
                </tr>
                <tr>
                    <td>MySQL版本</td>
                    <td><?php echo ($config["mysql_version"]); ?></td>
                </tr>
                <tr>
                    <td>最大上传限制</td>
                    <td><?php echo ($config["max_upload_size"]); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="/union/public/Admin/js/jquery.min63b9.js?v=2.1.4"></script>
<script src="/union/public/Admin/js/bootstrap.min14ed.js?v=3.3.6"></script>
<script src="/union/public/Admin/js/content.mine209.js?v=1.0.0"></script>
<script src="/union/public/Admin/js/plugins/validate/jquery.validate.min.js"></script>
<script src="/union/public/Admin/js/plugins/validate/messages_zh.min.js"></script>
<script src="/union/public/Admin/js/demo/form-validate-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:26 GMT -->
</html>