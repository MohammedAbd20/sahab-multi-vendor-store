$(function(){
    var randomImage = Math.floor(Math.random() * 5) +1;
    $(".advertising img").attr("src", `https://accord.ps/Modules/Website/Resources/assets/images/adv-search${randomImage}.jpg`);


    $("#searchInput").on("input", function () {
        var searchTerm = $(this).val().trim().toLowerCase();

        $(".row.rounded").each(function () {
            var itemName = $(this).find("h5 a").text().trim().toLowerCase();

            if (itemName.includes(searchTerm)) {
                $(this).show();
                $(".nonShow").addClass("d-none");
            } else {
                $(this).hide();
                $(".nonShow").removeClass("d-none");
            }
        });
    });

    $('.colorChangeButton').click(function() {
        var svgIcon = $(this).find('svg');
        svgIcon.toggleClass('text-danger');
    });
})
