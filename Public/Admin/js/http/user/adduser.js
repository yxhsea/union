$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var username = $.trim($("input[name='username']").val());
        var password = $.trim($("input[name='password']").val());
        var confirm = $.trim($("input[name='confirm']").val());
        var status = $.trim($("input[name='status']").val());
        var role_id = $.trim($("select[name='role_id']").val());
        var images_id = $.trim($("#uploader-demo").attr('data-id'));

        if(username == '') {
            layer.msg("请填写用户名");
            return false;
        }

        //验证用户名是否已经存在
        if(is_username(username)){
            layer.msg("用户名已经存在");
            return false;
        };

        if(images_id == '') {
            layer.msg("请上传头像");
            return false;
        }


        if(password == '') {
            layer.msg("请填写密码");
            return false;
        }

        if(confirm == '') {
            layer.msg("请填写确认密码");
            return false;
        }

        if(password!=confirm){
            layer.msg("密码不一致");
            return false;
        }

        $.ajax({
            'url': GV.user_adduser,
            'type':'post',
            'data':{'username':username,'password':password,'status':status,'role_id':role_id,'images_id':images_id},
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

    //检测用户名是否已经存在
    function is_username(username){
        var status;
        $.ajax({
            'url':GV.user_is_username,
            'type':'post',
            'async':false,
            'data':{'username':username},
            success:function(data){
                status = data.status;
            }
        });
        return status;
    }
});