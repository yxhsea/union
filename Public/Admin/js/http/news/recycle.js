var recover;
var cancel;
$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    })

    recover = function(data){
        var id = data;
        $.ajax({
            url:GV.news_setstatus,
            type:'post',
            data:{'id':id,'status':0,'tableName':'news','tableField':'remove'},
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('恢复成功');
                }else{
                    delay('恢复失败');
                }
            }
        });
    }

    cancel = function(data){
        var id = data;
        $.ajax({
            url:GV.news_cancelnews,
            type:'post',
            data:{'id':id},
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('删除成功');
                }else{
                    delay('删除失败');
                }
            }
        });
    }

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