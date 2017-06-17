$(document).ready(function () {
    $(".db-import").click(function(){
        var self = this, status = ".";
        $.get(self.href, success, "json");
        window.onbeforeunload = function(){ return "正在还原数据库，请不要关闭！" }
        return false;

        function success(data){
            if(data.status){
                if(data.gz){
                    data.info += status;
                    if(status.length === 5){
                        status = ".";
                    } else {
                        status += ".";
                    }
                }
                $(self).parent().prev().text(data.info);
                if(data.part){
                    $.get(self.href,
                        {"part" : data.part, "start" : data.start},
                        success,
                        "json"
                    );
                }  else {
                    window.onbeforeunload = function(){ return null; }
                }
            } else {
                layer.msg(data.info);
            }
        }
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
                            delay(data.info);
                        }else{
                            delay(data.info);
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
})
