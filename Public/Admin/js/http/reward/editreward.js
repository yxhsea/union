/**
 * Created by Yxh_PC on 2017/2/6.
 */
$(document).ready(function(){
    $("#a_save").click(function(){
        var a_id = $.trim($("#a_id").val());
        var a_member_id_card = $.trim($("#a_member_id_card").val());
        var a_member_name = $.trim($("#a_member_name").val());
        var a_reward_time = $.trim($("#a_reward_time").val());
        var a_reward_title = $.trim($("#a_reward_title").val());
        var a_reward_level = $.trim($("#a_reward_level").val());
        var a_reward_unit = $.trim($("#a_reward_unit").val());
        var a_reward_reason = $.trim($("#a_reward_reason").val());
        var a_reward_note = $.trim($("#a_reward_note").val());

        if(a_member_id_card == ''){
            layer.msg("请填写身份号码");
            return false;
        }else if(!(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(a_member_id_card))){
            layer.msg("身份证号码格式不正确");
            return false;
        }

        if(a_member_name == ''){
            layer.msg("请填写会员姓名");
            return false;
        }

        if(a_reward_time == ''){
            layer.msg("请填写奖励时间");
            return false;
        }

        if(a_reward_title == ''){
            layer.msg("请填写奖励项目名称");
            return false;
        }

        if(a_reward_level == ''){
            layer.msg("请填写奖励级别");
            return false;
        }

        if(a_reward_reason == ''){
            layer.msg("请填写奖励原因");
            return false;
        }

        $.ajax({
            'url': GV.reward_editreward,
            'type':'post',
            'data':{'id':a_id,'member_id_card':a_member_id_card,'member_name':a_member_name,'reward_time':a_reward_time,'reward_title':a_reward_title,'reward_level':a_reward_level,'reward_unit':a_reward_unit,'reward_unit':a_reward_unit,'reward_reason':a_reward_reason,'reward_note':a_reward_note},
            success:function(data){
                //console.log(data);
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

    $("#b_save").click(function(){
        var b_id = $.trim($("#b_id").val());
        var b_member_id_card = $.trim($("#b_member_id_card").val());
        var b_member_name = $.trim($("#b_member_name").val());
        var b_reward_time = $.trim($("#b_reward_time").val());
        var b_reward_title = $.trim($("#b_reward_title").val());
        var b_reward_level = $.trim($("#b_reward_level").val());
        var b_reward_unit = $.trim($("#b_reward_unit").val());
        var b_reward_reason = $.trim($("#b_reward_reason").val());
        var b_reward_note = $.trim($("#b_reward_note").val());

        if(b_member_id_card == ''){
            layer.msg("请填写身份号码");
            return false;
        }else if(!(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(b_member_id_card))){
            layer.msg("身份证号码格式不正确");
            return false;
        }

        if(b_member_name == ''){
            layer.msg("请填写会员姓名");
            return false;
        }

        if(b_reward_time == ''){
            layer.msg("请填写奖励时间");
            return false;
        }

        if(b_reward_title == ''){
            layer.msg("请填写奖励项目名称");
            return false;
        }

        if(b_reward_level == ''){
            layer.msg("请填写奖励级别");
            return false;
        }

        if(b_reward_reason == ''){
            layer.msg("请填写奖励原因");
            return false;
        }

        $.ajax({
            'url': GV.reward_editreward,
            'type':'post',
            'data':{'id':b_id,'member_id_card':b_member_id_card,'member_name':b_member_name,'reward_time':b_reward_time,'reward_title':b_reward_title,'reward_level':b_reward_level,'reward_unit':b_reward_unit,'reward_unit':b_reward_unit,'reward_reason':b_reward_reason,'reward_note':b_reward_note},
            success:function(data){
                //console.log(data);
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