$('#create-form').on('submit', function(e){
    e.preventDefault();
    let form = $(this); 

    $.ajax({
        url : '/create',
        method: 'POST',
        data : form.serialize(),
        success : function(response){
            $("input[name='price']").val('');
            response = JSON.parse(response);
            console.log(typeof response.price);

            //Add created item to items list
            $('#list').prepend(`
                <tr class="list-item" data-item="${response.id}">
                    <td class="item-status" data-status="${response.status}"><i class="fas fa-clock"></i></td>
                    <td class="item-name">${response.name}</td>
                    <td class="item-price">${response.price ? '$'+parseFloat(response.price).toFixed(2) : ''}</td>
                    <td class="item-delete"><i class="far fa-trash-alt delete-item"></i></td>
                    <td class="item-edit"><i class="fas fa-pen"></i></td>
                </tr>
            `);

            //Add event handler on the delete button of the created item
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
        }
    });
});