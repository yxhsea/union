$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var member_name = $.trim($("input[name='member_name']").val());
        var id_card = $.trim($("input[name='id_card']").val());
        var member_cost = $.trim($("input[name='member_cost']").val());
        var note = $.trim($("input[name='note']").val());

        if(member_name == '') {
            layer.msg("请填写会员姓名");
            return false;
        }

        if(id_card == ''){
            layer.msg("请填写身份证号码");
            return false;
        }else if(!(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(id_card))){
            layer.msg("身份证格式不正确");
            return false;
        }

        if(member_cost == '') {
            layer.msg("请填写会费金额");
            return false;
        }


        $.ajax({
            'url': GV.cost_addcost,
            'type':'post',
            'data':{'member_name':member_name,'id_card':id_card,'member_cost':member_cost,'note':note},
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