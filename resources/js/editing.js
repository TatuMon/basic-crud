$('#edit-list').on('click', startEdit);

function startEdit(){
    //changes input bla bla

    $(this).html('finish edit')
    $(this).off('click').on('click', finishEdit);
}

function finishEdit(){
    $(this).find('#edit-form').on('submit', function(e){
        e.preventDefault();

        //submit data
    });

    $(this).html('edit list')
    $(this).off('click').on('click', startEdit);
}