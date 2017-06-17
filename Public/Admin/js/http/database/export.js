(function($){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    var $form = $("#export-form"), $export = $("#export"), tables
    $optimize = $("#optimize"), $repair = $("#repair");

    $optimize.add($repair).click(function(){
        $.post(this.href, $form.serialize(), function(data){
            if(data.status){
                //alert(data.info,'alert-success');
                layer.msg(data.info)
                delay();
            } else {
                //alert(data.info,'alert-error');
                layer.msg(data.info)
                delay();
            }
            setTimeout(function(){
                $('#top-alert').find('button').click();
                $(that).removeClass('disabled').prop('disabled',false);
            },1500);
        }, "json");
        return false;
    });

    $export.click(function(){
        $export.parent().children().addClass("disabled");
        $export.html("正在发送备份请求...");
        $.post(
            $form.attr("action"),
            $form.serialize(),
            function(data){
                if(data.status){
                    tables = data.tables;
                    $export.html(data.info + "开始备份，请不要关闭本页面！");
                    backup(data.tab);
                    window.onbeforeunload = function(){ return "正在备份数据库，请不要关闭！" }
                } else {
                    alert(data.info,'alert-error');
                    $export.parent().children().removeClass("disabled");
                    $export.html("立即备份");
                    setTimeout(function(){
                        $('#top-alert').find('button').click();
                        $(that).removeClass('disabled').prop('disabled',false);
                    },1500);
                }
            },
            "json"
        );
        return false;
    });

    function backup(tab, status){
        status && showmsg(tab.id, "开始备份...(0%)");
        $.get($form.attr("action"), tab, function(data){
            if(data.status){
                showmsg(tab.id, data.info);

                if(!$.isPlainObject(data.tab)){
                    $export.parent().children().removeClass("disabled");
                    $export.html("备份完成，点击重新备份");
                    window.onbeforeunload = function(){ return null }
                    return;
                }
                backup(data.tab, tab.id != data.tab.id);
            } else {
                alert(data.info,'alert-error');
                $export.parent().children().removeClass("disabled");
                $export.html("立即备份");
                setTimeout(function(){
                    $('#top-alert').find('button').click();
                    $(that).removeClass('disabled').prop('disabled',false);
                },1500);
            }
        }, "json");

    }

    function showmsg(id, msg){
        $form.find("input[value=" + tables[id] + "]").closest("tr").find(".info").html(msg);
    }

    $(".ajax-get").click(function(){
        var _href = $(this).attr('href');
        console.log(_href);
        $.ajax({
            url: _href,
            type: 'get',
            success: function(data) {
                layer.msg(data.info);
                delay();
            }
        });
        return false;
    });

    function delay(){
        setTimeout(function () {
            window.location.reload();
        },1000);
    }
})(jQuery);