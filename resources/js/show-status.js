$(function(){
    var complete = `<i class="fas fa-check"></i>`;
    var pending = `<i class="fas fa-clock"></i>`;
    var cancelled = `<i class="fas fa-times-circle"></i>`;

    $('.list-item').each(function(){
        console.log(':(')
        if(!$(this).find('.complete').length == 0){
            $(this).find('.complete').html(complete);
            return;
        } else if (!$(this).find('.pending').length == 0){
            $(this).find('.pending').html(pending);
            return;
        } else if (!$(this).find('.cancelled').length == 0){
            $(this).find('.cancelled').html(cancelled);
        }
    })
})