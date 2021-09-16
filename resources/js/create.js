$('#create-form').on('submit', function(e){
    e.preventDefault();
    let form = $(this); 

    $.ajax({
        url : '/create',
        method: 'POST',
        data : form.serialize(),
        success : function(response){
            response = JSON.parse(response);

            $('#list').prepend(`
                <tr class="list-item" data-item="${response.id}">
                    <td class="item-status ${response.status}"><i class="fas fa-clock"></i></td>
                    <td class="item-name">${response.name}</td>
                    <td class="item-price">$${response.price}</td>
                    <td class="item-delete"><i class="far fa-trash-alt delete-item"></i></td>
                </tr>
            `);
        }
    });
});