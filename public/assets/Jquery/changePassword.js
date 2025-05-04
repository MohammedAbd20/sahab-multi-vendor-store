$(function(){
    $("#saveUpdatepPassword").on('submit',function(e){
        e.preventDefault();
        var $this = $(this);
        $this.find('button[type="submit"]').attr('disabled',true)
        var btnText = $this.find('button[type="submit"]').text()
        $this.find('button[type="submit"]').text("جارِ التحميل...")
        var data = {
            _token:$('meta[name="csrf_token"]').attr("content"),
            old_password : $this.find('[name="old_password"]').val(),
            new_password : $this.find('[name="new_password"]').val(),
            confirm_password : $this.find('[name="confirm_password"]').val(),
        }
        $.post($('meta[name="base_url"]').attr("content")+"/change-password",data,function(response){
            window.location.href = $('meta[name="base_url"]').attr("content")+"/profile";
        })
        .fail(function(response){
            alert(response.responseJSON[0]);
        })
        .always(function(){
            $this.find('button[type="submit"]').attr('disabled',false)
            $this.find('button[type="submit"]').text(btnText)
        })
    })

});
