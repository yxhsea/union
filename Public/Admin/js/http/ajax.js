$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    //更改status状态
    $(".ajax-status").click(function(){
        var _href = $(this).attr('href');
        $.ajax({
            url:_href,
            type:"get",
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('操作成功');
                }else{
                    delay('操作失败');
                }
            }
        });
        return false;
    });

    //移除
    $(".ajax-remove").click(function(){
        var _href = $(this).attr('href');
        $.ajax({
            url:_href,
            type:"get",
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('操作成功');
                }else{
                    delay('操作失败');
                }
            }
        });
        return false;
    });

    //删除操作
    $(".ajax-delete").click(function(){
        var _href = $(this).attr('href');
        layer.confirm("您确定要删除?",function(){
            $.ajax({
                url:_href,
                type:"get",
                complete:refresh,
                success:function(data){
                    if(data.status == 1){
                        delay('操作成功');
                    }else{
                        delay('操作失败');
                    }
                }
            });
        });
        return false;
    });

    //刷新当前页面
    function refresh(){
        setTimeout(function(){
            window.location.reload();
        },1000);
    }

    //延时1s
    function delay($msg){
        setTimeout(function(){
            layer.msg($msg);
        },0);
    }
});