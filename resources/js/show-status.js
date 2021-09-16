function updateStatusIcon(){
    let complete = `<i class="fas fa-check"></i>`;
    let pending = `<i class="fas fa-clock"></i>`;
    let cancelled = `<i class="fas fa-times-circle"></i>`;
    let unknown = `<i class="fas fa-question-circle"></i>`;

    $('.list-item').each(function(){
        let itemStatusContainer = $(this).find('.item-status');
        let itemStatus = itemStatusContainer.attr('data-status');

        switch(itemStatus){
            case 'complete':
                itemStatusContainer.html(complete);
                break;
            case 'pending':
                itemStatusContainer.html(pending);
                break;
            case 'cancelled':
                itemStatusContainer.html(cancelled);
                break;
            default:
                itemStatusContainer.html(unknown);
        }
    });
}

$(function(){
    updateStatusIcon();
})