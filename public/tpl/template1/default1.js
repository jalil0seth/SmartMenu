$('#navigationopenbutton').on('click',function(){
	$('.nav').slideDown('fast', function(){
		$('#navigationopenbutton').hide();
		$('#navigationclosebutton').show();
	});

});
$('#navigationclosebutton').on('click',function(){
	$('.nav').slideUp('fast', function(){
		$('#navigationclosebutton').hide();
		$('.nav').removeAttr('style');
	});
		$('#navigationopenbutton').show();
});

//popup method jquery function .popup('init')/.popup('close')
(function( $ ) {
	$.fn.allergensPopup = function( action ) {
		if ( action === "close" ) {
			$("#modalAllergens").remove();
			$('.allergenspopup').remove();
		}
	};
	$.fn.popup = function( action, className = 'sidedishpopup' ) {
    if ( action === "init") {
			const popupClass = className === 'sidedishpopup' ? `${className}` : `${className}`
			$('body').append(`<div id="modalSideDish" data-template-class="${className}" class="modal"></div><div id="${className}" class="${popupClass} popup"></div>`)
    }
    if ( action === "close" ) {
			$("#modalSideDish").remove();
			$(`#${className}`).remove();
    }
  };
}( jQuery ));

$(document).on('click','#modalSideDish',function(){
  if ($(this).length > 0 ) {
	const templateClass = $(this).data('template-class')
    $(this).popup('close', templateClass);
  }
});

$(document).on('click','#modalAgeRestriction',function(){
	if ($(this).length > 0 ) {
		window.ageConsent('close');
	}
});

$(document).on('click','#modalAllergens',function(){
	if ($(this).length > 0 ) {
		$(this).allergensPopup('close');
	}
});

$(document).on('click','.closeaddtobasket',function(){
	$(this).popup('init');
	$('.popup').load('/proxy.php?restaurantclosed');
});

//dropdown categories goto
$(function() {
	$('select','.dropdown').change(function(){
		var target = $(this).val()
		$('html, body').animate({scrollTop: $(target).offset().top}, 400);
	})
});

$(document).on('click','.basket-product.add',function(e){
	e.preventDefault();
	$.post( "/proxy.php?basket",{
		action : $(this).data("action"),
		product : $(this).data("product"),
		rest : $(this).data("restaurant"),
		basketnumber : $(this).data("value") ,
	}, function( data ) {
	  $('#basket').load('/proxy.php?refresh');
	});
});

$(document).on('click','.basket-product.remove',function(e){
		e.preventDefault();
	$.post( "/proxy.php?basket",{
		action : $(this).data("action"),
		product : $(this).data("product"),
		rest : $(this).data("restaurant"),
	}, function( data ) {
		$('#basket').load('/proxy.php?refresh');
	});
});





//refresh basket
$(document).ready(function() {
	// handle posts asynchronous
	$('#basket form.async').submit(function(e) {
		e.preventDefault();

		// act different on checkout posts
		if ($(this).hasClass('checkout')) {
			$.ajax({
				type: "POST",
				url: $(this).attr('action'),
				data: $(this).serialize(),
				success: function(data) {
          event.preventDefault();
					try {
						var JSONData = $.parseJSON(data);
						if (JSONData.redirect) {
							window.location.href = JSONData.redirect;
						}
					} catch(e) {
						// not JSON; If data returned, show it in the popup
						if (data.length > 0) {
							$('#sidedishpopup').html(data);
							$('#sidedishpopup').popup('open');
							$('#sidedishpopup input[type="text"]').first().focus();
						}
					}
				}
			});
		} else {
			$.post($(this).attr('action'), $(this).serialize(), function(e) {
				// refresh the cart info
				$('#basket').load('/proxy.php?refresh');
				$('#basket-reminder').load('/proxy.php?refresh-reminder');
			});
		}
	});

	// force productnumber field as numeric
	$('#basket form input[name^="basketnumber_"]').bind('keyup', function(e) {
		$(this).val(parseInt($(this).val()));
		if ($(this).val() == 'NaN') {
			$(this).val('');
		} else if ($(this).val() < 1 || $(this).val() > 99) {
			$(this).val('1');
		}
	});
});

$(function() {
$(document).on('blur','#address', function(){
		var val =  this.value;
		if (val != '') {
			if (val.match(/\d+/g) == null) {
				$(this).addClass('error')
				$('#addressnotice').fadeIn()
			} else {
				$('#addressnotice').fadeOut()
				$(this).removeClass('error')
			}
		}
	});
})

$(function(){
  $("#morelegalinfo").click(function(e){
    e.preventDefault();
    var legal = $('.legal.extra');
    if(legal.css("display") == "block")
    {
      $(this).text($(this).data("show"));
    }
    else{
      $(this).text($(this).data("hide"));
    }
    $('.legal.extra').toggle();
  });
});

function ageConsent( action ) {
	if ( action === "init") {
		var modalAgeRestriction = document.createElement('div');
		modalAgeRestriction.id = 'modalAgeRestriction';
		modalAgeRestriction.className = 'modal';

		var ageRestriction = document.createElement('div');
		ageRestriction.id = 'ageRestriction';
		ageRestriction.className = 'popup sidedishpopup';

		document.querySelector('body').appendChild(modalAgeRestriction);
		document.querySelector('body').appendChild(ageRestriction);
	}
	if ( action === "close" ) {
		document.querySelector('#modalAgeRestriction').remove();
		document.querySelector('#ageRestriction').remove();
	}
}