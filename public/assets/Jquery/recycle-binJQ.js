$(function(){
    
    $('.btn-close').click(function () {
        $(this).parent().parent().remove();
        Swal.fire({
            title: 'تم العملية بنجاح!',
            text: 'تم إزالة المنتج بنجاح.',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500 
        })

    });
    $('.btn-return').click(function () {
        console.log(this);
        $(this).parent().parent().remove();
        Swal.fire({
            title: 'تم العملية بنجاح!',
            text: 'تم إرجاع المنتج إلى سلة المشتريات.',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500 
        })

    });
});