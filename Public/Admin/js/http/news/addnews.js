$(document).ready(function(){
    //新闻内容的js
    $(".summernote").summernote({
        height:300,
        focus:true,
        lang:"zh-CN"
    });

    //单选框的js
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    $("#save").click(function(){
        var title = $.trim($("input[name='title']").val());
        var author = $.trim($("input[name='author']").val());
        var cate_id = $.trim($("select[name='cate_id']").val());
        var content = $('.summernote').code();
        var label = $.trim($("input[name='label']:checked").val());
        var status = $.trim($("input[name='status']:checked").val());

        if(title == ''){
            layer.msg("请填写新闻标题");
            return false;
        }

        if(author == ''){
            layer.msg("请填写新闻作者");
            return false;
        }

        $.ajax({
            'url':GV.news_addnews,
            'type':'post',
            'data':{'title':title,'author':author,'cate_id':cate_id,'content':content,'label':label,'status':status},
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