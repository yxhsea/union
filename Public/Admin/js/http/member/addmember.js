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
        var name = $.trim($("input[name='name']").val());
        var sex = $.trim($("input[name='sex']:checked").val());
        var national = $.trim($("#national").val());
        var native_place = $.trim($("#native_place").val());
        var birthday = $.trim($("#birthday").val());
        var political = $.trim($("#political").val());
        var professional = $.trim($("#professional").val());
        var college = $.trim($("#college").val());
        var zip_code = $.trim($("#zip_code").val());
        var email = $.trim($("#email").val());
        var introduct = $.trim($("#introduct").val());
        var id_card = $.trim($("input[name='id_card']").val());
        var card_start = $.trim($("#start").val());
        var card_end = $.trim($("#end").val());
        var unit_code = $.trim($("input[name='unit_code']").val());
        var unit = $.trim($("input[name='unit']").val());
        var school = $.trim($("input[name='school']:checked").val());
        var employ = $.trim($("input[name='employ']:checked").val());
        var migrant = $.trim($("input[name='migrant']:checked").val());
        var phone = $.trim($("input[name='phone']").val());
        var come_time = $.trim($("input[name='come_time']").val());
        var address_now = $.trim($("input[name='address_now']").val());
        var picture = $.trim($("#uploader-demo").attr('data-id'));

        if(name == ''){
            layer.msg("请填写会员姓名");
            return false;
        }

        if(picture == ''){
            layer.msg("请上传寸照");
            return false;
        }

        if(national == ''){
            layer.msg("请填写民族");
            return false;
        }

        if(native_place == ''){
            layer.msg("请填写籍贯");
            return false;
        }

        if(birthday == ''){
            layer.msg("请填写出生日期");
            return false;
        }


        if(political == ''){
            layer.msg("请填写政治面貌");
            return false;
        }

        if(professional == ''){
            layer.msg("请填写专业");
            return false;
        }

        if(college == ''){
            layer.msg("请填写毕业院校");
            return false;
        }

        if(zip_code == ''){
            layer.msg("请填写邮编");
            return false;
        }else if(!(/^[1-9][0-9]{5}$/.test(zip_code))){
            layer.msg("邮编格式不正确");
            return false;
        }

        if(email == ''){
            layer.msg("请填写邮箱");
            return false;
        }else if(!(/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/).test(email)){
            layer.msg("邮箱格式不正确");
            return false;
        }

        if(introduct == ''){
            layer.msg("请填写个人简介");
            return false;
        }

        if(id_card == ''){
            layer.msg("请填写身份证号码");
            return false;
        }else if(!(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(id_card))){
            layer.msg("身份证格式不正确");
            return false;
        }

        if(card_start == ''){
            layer.msg("请填写身份证起始时间");
            return false;
        }

        if(card_end == ''){
            layer.msg("请填写身份证结束时间");
            return false;
        }

        if(unit_code == ''){
            layer.msg("请填写单位编号");
            return false;
        }else if(!(/^[0-9]*$/.test(unit_code))){
            layer.msg("单位编码格式不正确");
            return false;
        }

        if(unit == ''){
            layer.msg("请填写单位名称");
            return false;
        }

        if(phone == ''){
            layer.msg("请填写联系方式");
            return false;
        }else if(!(/^1\d{10}$/.test(phone))){
            layer.msg("手机号码格式不正确");
            return false;
        }

        if(come_time == ''){
            layer.msg("请填写入会时间");
            return false;
        }

        if(address_now == ''){
            layer.msg("请填写现居住址");
            return false;
        }

        $.ajax({
            'url': GV.member_addmember,
            'type':'post',
            'data':{'name':name,'sex':sex,'national':national,'native_place':native_place,'birthday':birthday,'political':political,'professional':professional,'college':college,'zip_code':zip_code,'email':email,'introduct':introduct,'id_card':id_card,'card_start':card_start,'card_end':card_end,'unit_code':unit_code,'unit':unit,'school':school,'employ':employ,'migrant':migrant,'phone':phone,'come_time':come_time,'address_now':address_now,'picture':picture},
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