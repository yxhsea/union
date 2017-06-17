$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    //判断内容是否为空
    $("#save").click(function(){
        var copyright = $.trim($("input[name='copyright']").val());
        var icp = $.trim($("input[name='icp']").val());
        var count = $.trim($("#count").val());

        if(copyright == ''){
            layer.msg('请填写版权信息');
            return false;
        }

        if(icp == ''){
            layer.msg('请填写ICP备案号');
            return false;
        }

        if(count == ''){
            layer.msg('请填写统计代码');
            return false;
        }

        //ajax异步提交数据
        $.ajax({
            url: GV.system_siteconfig,
            type:'post',
            data:{'copyright':copyright,'icp':icp,'count':count},
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