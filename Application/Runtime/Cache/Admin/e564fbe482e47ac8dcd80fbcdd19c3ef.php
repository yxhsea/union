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
                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">奖励记录</a>
                </li>
                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">处罚记录</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3" style="float: right;">
                                <!-- <div class="input-group">
                                    <input type="text" placeholder="请输入会员姓名" class="input-sm form-control"> <span class="input-group-btn">
                            <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div> -->
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>姓名</th>
                                    <th>身份证号码</th>
                                    <th>奖励名称</th>
                                    <th>奖励时间</th>
                                    <th>奖励理由</th>
                                    <th>授予单位</th>
                                    <th>奖励级别</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($a_reward)): $i = 0; $__LIST__ = $a_reward;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a_reward): $mod = ($i % 2 );++$i;?><tr>
                                        <td>
                                            <input type="checkbox" class="i-checks" name="id[]" value="<?php echo ($a_reward["id"]); ?>">
                                        </td>
                                        <td><?php echo ($a_reward["member_name"]); ?></td>
                                        <td>
                                            <?php echo ($a_reward["member_id_card"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($a_reward["reward_title"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($a_reward["reward_time"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($a_reward["reward_reason"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($a_reward["reward_unit"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($a_reward["reward_level"]); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo U('Reward/detailReward',['id'=>$a_reward['id']]);?>"><button type="button" class="btn btn-outline btn-primary btn-xs">详情</button></a>
                                            <a href="<?php echo U('Reward/editReward',['id'=>$a_reward['id']]);?>"><button type="button" class="btn btn-outline btn-default btn-xs">编辑</button></a>
                                            <a href="<?php echo U('User/delete',['id'=>$a_reward['id'],'tableName'=>'Reward']);?>" class="ajax-delete"><button type="button" class="btn btn-outline btn-warning btn-xs">删除</button></a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div style="text-align: center;"><?php echo ($a_Page); ?></div>
                    </div>

                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3" style="float: right;">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入会员姓名" class="input-sm form-control"> <span class="input-group-btn">
                            <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>姓名</th>
                                    <th>身份证号码</th>
                                    <th>处罚名称</th>
                                    <th>处罚时间</th>
                                    <th>处罚理由</th>
                                    <th>处罚单位</th>
                                    <th>处罚级别</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($b_reward)): $i = 0; $__LIST__ = $b_reward;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b_reward): $mod = ($i % 2 );++$i;?><tr>
                                        <td>
                                            <input type="checkbox" class="i-checks" name="id[]" value="<?php echo ($b_reward["id"]); ?>">
                                        </td>
                                        <td><?php echo ($b_reward["member_name"]); ?></td>
                                        <td>
                                            <?php echo ($b_reward["member_id_card"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($b_reward["reward_title"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($b_reward["reward_time"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($b_reward["reward_reason"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($b_reward["reward_unit"]); ?>
                                        </td>
                                        <td>
                                            <?php echo ($b_reward["reward_level"]); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo U('Reward/detailReward',['id'=>$b_reward['id']]);?>"><button type="button" class="btn btn-outline btn-primary btn-xs">详情</button></a>
                                            <a href="<?php echo U('Reward/editReward',['id'=>$b_reward['id']]);?>"><button type="button" class="btn btn-outline btn-default btn-xs">编辑</button></a>
                                            <a href="<?php echo U('User/delete',['id'=>$b_reward['id'],'tableName'=>'Reward']);?>" class="ajax-delete"><button type="button" class="btn btn-outline btn-warning btn-xs">删除</button></a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div style="text-align: center;"><?php echo ($b_Page); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/union/public/Admin/js/http/ajax.js"></script>
<script src="/union/public/Admin/js/http/reward/rewardlist.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>