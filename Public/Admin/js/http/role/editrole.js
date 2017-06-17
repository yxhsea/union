$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var role_id = $.trim($("input[name='role_id']").val())
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
        $.ajax({
            'url': GV.role_editrole,
            'type':'post',
            'data':{'role_id':role_id,'name':name,'auth':auth,'status':status},
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