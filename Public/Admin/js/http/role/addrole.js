$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var name = $.trim($("input[name='name']").val());
        var auth = [];
        $("input:checkbox:checked").each(function(){
            auth.push($(this).val());
        });
        var status = $.trim($("input[name='status']").val());
        if(name==''){
            layer.msg("请填写角色名称");
            return false;
        }
        console.log(auth);
        $.ajax({
            'url': GV.role_addrole,
            'type':'post',
            'data':{'name':name,'auth':auth,'status':status},
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