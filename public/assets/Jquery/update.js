$(function(){
    $("#saveUpdateProfile").on("submit",function(e){
        e.preventDefault();
        // alert()
        var data = {
            _token:$('meta[name="csrf_token"]').attr("content"),
            name:$('[name="name"]').val(),
            email:$('[name="email"]').val(),
        }
        $.post($('meta[name="base_url"]').attr("content")+"/profile",data,function(response){
            window.location.href = $('meta[name="base_url"]').attr("content")+"/profile";
        })
        .fail(function(response){
            alert(response.responseJSON[0])
        })
    })
});
