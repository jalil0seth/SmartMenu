var allergens = function (clickEvent) {
    const dataset = clickEvent.target.dataset
    const template = dataset.template

    let popupClass = ''
    if(template !== undefined && template !== 'template1') {
        popupClass = `${template}-allergenspopup`
    }

    $.ajax({
        type: 'POST',
        url: 'basket/api/allergens',
        data: dataset,
        success: function (data) {
            const obj = $.parseJSON(data)
            if (obj.type == 'html') {
                $('body').append(`<div id="modalAllergens" class="modal"></div><div class="popup allergenspopup ${popupClass}">${obj['value']}</div>`)
            }
        }
    })
    event.stopPropagation()
}

var menucard_CloseSideDishes = function () {
    const modal = $('#modalAllergens')
    if (modal) {
        modal.allergensPopup('close')
    }

}
$(document).on('click', '.closepopup', function () {
    menucard_CloseSideDishes()
})
