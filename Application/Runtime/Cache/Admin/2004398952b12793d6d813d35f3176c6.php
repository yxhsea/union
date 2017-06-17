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
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>会员详情</h5>
                <div class="ibox-tools">
                    <!--<a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="table_basic.html#">选项1</a>
                        </li>
                        <li><a href="table_basic.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>-->
                    <button type="button" class="btn btn-outline btn-primary btn-xs" onclick="history.go(-1);">返回</button>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-bordered" style="width: 80%;margin: auto;">
                    <thead>
                        <tr>
                            <th colspan="5"  style="text-align: center;">会员<?php echo ($member["name"]); ?>基本信息</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>姓名</th>
                        <td><?php echo ($member["name"]); ?></td>
                        <th>性别</th>
                        <td>
                            <?php if(($member['sex'] == 0)): ?>男<?php endif; ?>
                            <?php if(($member['sex'] == 1)): ?>女<?php endif; ?>
                        </td>
                        <th rowspan="4" style="width: 100px;">
                            <img src="<?php echo getImage($member['picture']);?>" style="width:100px;"/>
                        </th>
                    </tr>
                    <tr>
                        <th>民族</th>
                        <td><?php echo ($member["national"]); ?></td>
                        <th>籍贯</th>
                        <td><?php echo ($member["native_place"]); ?></td>
                    </tr>
                    <tr>
                        <th>出生日期</th>
                        <td><?php echo ($member["birthday"]); ?></td>
                        <th>政治面貌</th>
                        <td><?php echo ($member["political"]); ?></td>
                    </tr>
                    <tr>
                        <th>学历</th>
                        <td>
                            <?php if(($member['school'] == 0)): ?>小学<?php endif; ?>
                            <?php if(($member['school'] == 1)): ?>初中<?php endif; ?>
                            <?php if(($member['school'] == 2)): ?>高中<?php endif; ?>
                            <?php if(($member['school'] == 3)): ?>中专<?php endif; ?>
                            <?php if(($member['school'] == 4)): ?>大专<?php endif; ?>
                            <?php if(($member['school'] == 5)): ?>本科<?php endif; ?>
                            <?php if(($member['school'] == 6)): ?>研究生<?php endif; ?>
                            <?php if(($member['school'] == 7)): ?>博士<?php endif; ?>
                        </td>
                        <th>专业</th>
                        <td><?php echo ($member["professional"]); ?></td>
                    </tr>
                    <tr>
                        <th>毕业院校</th>
                        <td><?php echo ($member["college"]); ?></td>
                        <th>联系电话</th>
                        <td colspan="2"><?php echo ($member["phone"]); ?></td>
                    </tr>
                    <tr>
                        <th>身份证号码</th>
                        <td><?php echo ($member["id_card"]); ?></td>
                        <th>身份证有效期</th>
                        <td colspan="2"><?php echo ($member["card_start"]); ?>至<?php echo ($member["card_end"]); ?></td>
                    </tr>
                    <tr>
                        <th>现居住址</th>
                        <td><?php echo ($member["address_now"]); ?></td>
                        <th>入会时间</th>
                        <td colspan="2"><?php echo ($member["come_time"]); ?></td>
                    </tr>
                    <tr>
                        <th>邮编</th>
                        <td><?php echo ($member["zip_code"]); ?></td>
                        <th>邮箱</th>
                        <td colspan="2"><?php echo ($member["email"]); ?></td>
                    </tr>
                    <tr>
                        <th>单位编码</th>
                        <td><?php echo ($member["unit_code"]); ?></td>
                        <th>所属单位</th>
                        <td colspan="2"><?php echo ($member["unit"]); ?></td>
                    </tr>
                    <tr>
                        <th>就业状态</th>
                        <td>
                            <?php if(($member['employ'] == 0)): ?>待业<?php endif; ?>
                            <?php if(($member['employ'] == 1)): ?>在职<?php endif; ?>
                        </td>
                        <th>外来务工人员</th>
                        <td colspan="2">
                            <?php if(($member['migrant'] == 0)): ?>否<?php endif; ?>
                            <?php if(($member['migrant'] == 1)): ?>是<?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>个人简介</th>
                        <td colspan="4"><?php echo ($member["introduct"]); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>