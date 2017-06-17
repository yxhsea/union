var start = {
    elem: '#start',
    format: 'YYYY/MM/DD',
    istime: true,
    istoday: false,
    choose: function(datas){
        end.min = datas; //开始日选好后，重置结束日的最小日期
        end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#end',
    format: 'YYYY/MM/DD',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);

$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var theme = $.trim($("input[name='theme']").val());
        var host = $.trim($("input[name='host']").val());
        var undertake = $.trim($("input[name='undertake']").val());
        var start_time = $.trim($("input[name='start_time']").val());
        var end_time = $.trim($("input[name='end_time']").val());
        var address = $.trim($("input[name='address']").val());
        var header = $.trim($("input[name='header']").val());
        var phone = $.trim($("input[name='phone']").val());
        var introduct = $.trim($("#introduct").val());

        if(theme == '') {
            layer.msg("请填写运动会主题");
            return false;
        }

        if(host == '') {
            layer.msg("请填写运动会主办方");
            return false;
        }

        if(undertake == '') {
            layer.msg("请填写运动会承办方");
            return false;
        }

        if(start_time == '') {
            layer.msg("请填写运动会开始时间");
            return false;
        }

        if(end_time == '') {
            layer.msg("请填写运动会结束时间");
            return false;
        }

        if(address == '') {
            layer.msg("请填写运动会地点");
            return false;
        }

        if(header == '') {
            layer.msg("请填写运动会负责人");
            return false;
        }

        if(phone == ''){
            layer.msg("请填写运动会负责人联系方式");
            return false;
        }else if(!(/^1\d{10}$/.test(phone))){
            layer.msg("手机号码格式不正确");
            return false;
        }

        if(introduct == '') {
            layer.msg("请填写运动会简介");
            return false;
        }

        $.ajax({
            'url': GV.sports_addsporst,
            'type':'post',
            'data':{'theme':theme,'host':host,'undertake':undertake,'start_time':start_time,'end_time':end_time,'address':address,'header':header,'phone':phone,'introduct':introduct},
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