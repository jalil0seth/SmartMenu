$( document ).ready(function() {

    $('#close').click(function(e){
        e.preventDefault();
        $("#sB").toggleClass("opnU");
    });
});


$(document).ready(function() {
	$('.addtobasket').on("click", function() {
		$(this).shake({
			direction: "up",
			distance: 1,
            times:2
		});
	});
});
