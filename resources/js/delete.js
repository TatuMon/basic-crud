$('.delete-item').on('click', function(){
    let itemContainer = $(this).parents('tr.list-item');
    let itemID = itemContainer.attr('data-item');

    $.ajax({
        url : '/delete',
        method : 'POST',
        headers : { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
        data : { id : itemID },
        success : function(){
            itemContainer.remove();
        }
    })
});