$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    //判断分类名称是否为空
    $("#save").click(function(){
        var pid = $.trim($("select[name='pid']").val());
        var name = $.trim($("input[name='name']").val());
        var path = $.trim($("input[name='path']").val());
        var status = $.trim($("input[name='status']").val());
        var sort = $.trim($("input[name='sort']").val());

        if(name == ''){
            layer.msg('请填写权限名称');
            return false;
        }

        if(path == ''){
            layer.msg('请填写控制器方法');
            return false;
        }


        //ajax异步提交数据
        $.ajax({
            url: GV.auth_addauth,
            type:'post',
            data:{'pid':pid,'name':name,'path':path,'status':status,'sort':sort},
            success:function(data){
                if(data.status == 1){
                    layer.msg(data.info);
                    setTimeout(function(){
                        location.href = data.url;
                    },1000);
                }else{
                    layer.msg(data.info);
                    location.href = data.url;
                }
            }
        });
    });
});