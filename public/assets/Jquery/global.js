$(function(){
    $("#logout").click(function(e){
        e.preventDefault();
        var data = {
            _token:$('meta[name="csrf_token"]').attr("content"),
        }
        $.post($('meta[name="base_url"]').attr("content")+"/logout",data,function(response){
            window.location.href = $('meta[name="base_url"]').attr("content");
        })
        .fail(function(response){
            alert(response.responseJSON[0])
        })
    })
});
