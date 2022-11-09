$(function(){
  $(document).on("click", ".aa-switch span.slider", function(e) {
    $('.meal-allergens').toggleClass('show')
  })

  $(document).on("click", ".meal-allergens", function(e) {

    $.post(document.location.origin + '/proxy.php?additivesinline',
      {
        name : $(this).data('name'),
        allergens: $(this).data('allergens'),
        additives: $(this).data('additives')
      },function (data)
      {
        var obj = $.parseJSON(data);
        if (obj.type == 'html') {
          $("#inlineadditives").empty();
          $("#sidedishpopup").scrollTop(0);
          $("#inlineadditives").append('<div class="inlineinfo">' + obj['value'] + '</div>');
          $("#inlineadditives").addClass('show');
          $("#sidedishpopup").addClass('additivesopen');
        }
      });
    return false;
  })

  $(document).on("click", ".js-meal-allergens-close", function(e) {
    $("#inlineadditives").removeClass('show');
    $("#sidedishpopup").removeClass('additivesopen');

  });
});

function changeSidedishDescription(pulldownselector)
{
  selectedValue = $(pulldownselector).find(':selected').val();
  // hide descriptors except the one belonging to the selected value
    $('.inline-desc > span', $(pulldownselector).parent()).each(function() {
    if ($(this).attr('id') != selectedValue) {
      $(this).addClass('hidden');
    } else {
      $(this).removeClass('hidden');
    }
  });
}
