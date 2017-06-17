function logout(){
    $.ajax({
        url:GV.login_logout,
        type:'get',
        success:function(data){
            if(data.status == 200){
                window.location.href= GV.login_index;
            }
        }
    })
}