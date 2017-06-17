$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    //分类id
    var cate_id = GV.cate_id;

    //判断分类名称是否为空
    $("#save").click(function(){
        //获取pid、title的值
        var pid = $.trim($("#pid").val());
        var title = $.trim($("#title").val());

        //判断分类名称是否为空
        if(title == ''){
            layer.tips('请填写分类!','#title');
            return false;
        }

        //ajax异步提交数据
        $.ajax({
            url:GV.news_editcate,
            type:'post',
            data:{'pid':pid,'title':title,'cate_id':cate_id},
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