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
                        <h5>备份数据</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-5 m-b-xs">
                                <a href="javascript:;" autocomplete="off">
                                    <button id="export" class="btn btn-primary" type="button"><i class="fa fa-database"></i>&nbsp;立即备份</button>
                                </a>
                                <a  id="optimize" href="<?php echo U('Database/optimize');?>">
                                    <button class="btn btn-success" type="button"><i class="fa fa-fire"></i>&nbsp;优化表</button>
                                </a>
                                <a id="repair" href="<?php echo U('Database/repair');?>">
                                    <button class="btn btn-info" type="button"><i class="fa fa-wrench"></i>&nbsp;修复表</button>
                                </a>
                            </div>
                            <div class="col-sm-3" style="float: right;">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入表名" class="input-sm form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </div>
                        <form id="export-form" method="post" action="<?php echo U('export');?>">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        <input class="i-checks" checked="chedked" type="checkbox" value="">
                                        <!--<input type="checkbox" class="i-checks" name="id[]" value="<?php echo ($table["id"]); ?>">-->
                                    </th>
                                    <th>表名</th>
                                    <th>数据量</th>
                                    <th>数据大小</th>
                                    <th>创建时间</th>
                                    <th>备份状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><tr>
                                        <!--<td class="num">
                                            <input type="checkbox" class="i-checks" name="id[]" value="<?php echo ($table["id"]); ?>">
                                            <input class="i-checks" checked="chedked" type="checkbox" name="tables[]" value="<?php echo ($table["name"]); ?>">
                                        </td>-->
                                        <td class="num">
                                            <input class="i-checks ids" checked="chedked" type="checkbox" name="tables[]" value="<?php echo ($table["name"]); ?>">
                                        </td>
                                        <td><?php echo ($table["name"]); ?></td>
                                        <td>
                                            <?php echo ($table["rows"]); ?>
                                        </td>
                                        <td>
                                            <?php echo (format_bytes($table["data_length"])); ?>
                                        </td>
                                        <td>
                                            <?php echo ($table["create_time"]); ?>
                                        </td>
                                        <td class="info">未备份</td>
                                        <td>
                                            <a href="<?php echo U('Database/optimize',['tables'=>$table['name']]);?>" class="ajax-get"><button type="button" class="btn btn-outline btn-primary btn-xs">优化表</button></a>
                                            <a href="<?php echo U('Database/repair',['tables'=>$table['name']]);?>" class="ajax-get"><button type="button" class="btn btn-outline btn-default btn-xs">修复表</button></a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        </form>
                        <div style="text-align: center;"><?php echo ($page); ?></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<script type="text/javascript" src="/union/public/Admin/js/http/database/export.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>