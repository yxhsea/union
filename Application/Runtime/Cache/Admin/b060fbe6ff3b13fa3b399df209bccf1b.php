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
                    <h5>新增会员</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">会员姓名</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="请填写会员姓名" id="name">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传寸照</label>
                            <div class="col-sm-10">
                                <!--dom结构部分-->
                                <div id="uploader-demo">
                                    <!--用来存放item-->
                                    <div id="fileList" class="uploader-list" style="width:100px;"></div>
                                    <div id="filePicker"><i class="fa fa-upload"></i> 选择照片</div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                会员性别
                            </label>

                            <div class="col-sm-10">
                                <div class="radio i-checks">
                                    <label><input type="radio" value="0" name="sex" checked="checked"> <i></i> 男</label>
                                    <label><input type="radio" value="1" name="sex"> <i></i>女</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">民族</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="national" placeholder="请填写民族" id="national">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">籍贯</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="native_place" placeholder="请填写籍贯" id="native_place">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">出生日期</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="birthday" placeholder="请填写出生日期" id="birthday"  onclick="laydate();">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">政治面貌</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="political" placeholder="请填写政治面貌" id="political">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">专业</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="professional" placeholder="请填写专业" id="professional">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">毕业院校</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="college" placeholder="请填写毕业院校" id="college">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">邮编</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="zip_code" placeholder="请填写邮编" id="zip_code">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">邮箱</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" placeholder="请填写邮箱" id="email">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">个人简介</label>

                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="introduct" placeholder="请填写个人简介" id="introduct"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

<!--                        <div class="form-group">
                            <label class="col-sm-2 control-label">照片</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="picture " placeholder="请填写个人简介" id="picture">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>-->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">身份证号码</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id_card" placeholder="请填写身份证号码" id="id_card">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">身份证有效期</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control layer-date" name="card_start " placeholder="身份证开始时间" id="start">
                                <input type="text" class="form-control layer-date" name="card_end" placeholder="身份证到期时间" id="end">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">单位编码</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="unit_code" placeholder="请填写单位编码" id="unit_code">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属单位</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="unit" placeholder="请填写所属单位" id="unit">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">学历</label>

                            <div class="col-sm-10">
                                <div class="radio i-checks">
                                    <label><input type="radio" value="0" name="school" checked="checked"> <i></i> 小学</label>
                                    <label><input type="radio" value="1" name="school"> <i></i> 初中</label>
                                    <label><input type="radio" value="2" name="school"> <i></i> 高中</label>
                                    <label><input type="radio" value="3" name="school"> <i></i> 中专</label>
                                    <label><input type="radio" value="4" name="school"> <i></i> 大专</label>
                                    <label><input type="radio" value="5" name="school"> <i></i> 本科</label>
                                    <label><input type="radio" value="6" name="school"> <i></i> 研究生</label>
                                    <label><input type="radio" value="7" name="school"> <i></i> 博士</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">就业状态</label>

                            <div class="col-sm-10">
                                <div class="radio i-checks">
                                    <label><input type="radio" value="0" name="employ" checked="checked"> <i></i> 待业</label>
                                    <label><input type="radio" value="1" name="employ"> <i></i>在职</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">外来务工人员</label>

                            <div class="col-sm-10">
                                <div class="radio i-checks">
                                    <label><input type="radio" value="1" name="migrant" checked="checked"> <i></i> 是</label>
                                    <label><input type="radio" value="0" name="migrant"> <i></i>否</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系电话</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="请填写联系电话" id="phone">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">入会时间</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control layer-date" name="come_time" placeholder="请填写入会时间" id="come_time"  onclick="laydate();">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">现居住地</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address_now" placeholder="请填写居住地" id="address_now">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" id="save">保存内容</button>
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
        member_addmember : "<?php echo U('Member/addMember');?>"
    };
</script>
<script src="/union/public/Admin/js/http/member/addmember.js"></script>
<script src="/union/public/Admin/js/http/upload.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>