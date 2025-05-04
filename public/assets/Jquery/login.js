$(function(){
    $("#login").on('submit',function(e){
        e.preventDefault();
        var $this = $(this);
        $this.find('button[type="submit"]').attr('disabled',true)
        $this.find('button[type="submit"]').text("جارِ التحميل...")
        var data = {
            _token:$('meta[name="csrf_token"]').attr("content"),
            email : $this.find('[name="email"]').val(),
            password : $this.find('[name="password"]').val(),

        }
        $.post($('meta[name="base_url"]').attr("content")+"/login",data,function(response){
            window.location.href = $('meta[name="base_url"]').attr("content");
        })
        .fail(function(response){
            alert(response.responseJSON[0]);
        })
        .always(function(){
            $this.find('button[type="submit"]').attr('disabled',false)
            $this.find('button[type="submit"]').text("تسجيل الدخول")
        })
    })

});
