/**
 * Created by Yxh_PC on 2017/1/15.
 */
$(function(){
    $(".layui-btn").click(function(){
        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        var verify = $("input[name='verify']").val();

        if(username == ''){
            layer.msg("用户名不能为空!");
            return false;
        }

        if(password == ''){
            layer.msg("密码不能为空!");
            return false;
        }

        if(verify == ''){
            layer.msg("验证码不能为空!");
            return false;
        }

        $.ajax({
            url:GV.login_controller,
            type:'post',
            data:{'username':username,'password':password,'verify':verify},
            success:function(message){
                if(message.status == 101){
                    layer.msg("验证码错误");
                    return false;
                }
                if(message.status == 102){
                    layer.msg("用户名或密码错误");
                    return false;
                }
                if(message.status == 103){
                    layer.msg("账号被禁用,请联系管理员");
                    return false;
                }
                if(message.status == 200){
                    layer.msg("登录成功");
                    setTimeout(function(){
                        window.location.href = GV.index_controller;
                    },1000);
                }
            }
        })
    })
})