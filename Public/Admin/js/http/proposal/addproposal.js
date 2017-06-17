$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var theme = $.trim($("input[name='theme']").val());
        var time = $.trim($("input[name='time']").val());
        var reason = $.trim($("input[name='reason']").val());
        var opinions = $.trim($("input[name='opinions']").val());
        var header = $.trim($("input[name='header']").val());
        var phone = $.trim($("input[name='phone']").val());
        var department = $.trim($("input[name='department']").val());
        var content = $.trim($("input[name='content']").val());
        var solution = $.trim($("input[name='solution']").val());

        if(theme == '') {
            layer.msg("请填写提案主题");
            return false;
        }

        if(time == '') {
            layer.msg("请填写提案时间");
            return false;
        }

        if(reason == '') {
            layer.msg("请填写案由");
            return false;
        }

        if(opinions == '') {
            layer.msg("请填写审查意见");
            return false;
        }

        if(header == '') {
            layer.msg("请填写提案人");
            return false;
        }

        if(department == '') {
            layer.msg("请填写提案人所在部门");
            return false;
        }

        if(phone == ''){
            layer.msg("请填写提案人联系方式");
            return false;
        }else if(!(/^1\d{10}$/.test(phone))){
            layer.msg("手机号码格式不正确");
            return false;
        }

        if(content == '') {
            layer.msg("请填写内容");
            return false;
        }

        if(solution == '') {
            layer.msg("请填写解决方案");
            return false;
        }

        $.ajax({
            'url': GV.proposal_addproposal,
            'type':'post',
            'data':{'theme':theme,'time':time,'reason':reason,'opinions':opinions,'header':header,'department':department,'phone':phone,'content':content,'solution':solution},
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