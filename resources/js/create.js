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
                <tr class="list-item">
                    <td class="item-status"><i class="fas fa-check"></i></td>
                    <td class="item-name">${response.name}</td>
                    <td class="item-price">$${response.price}</td>
                </tr>
            `);
        }
    });
});