function sortAsc() {
    var j = document.querySelectorAll('.card').length;
    for (i = 0; i < j; i++) {

        var $sortGroup = $('.sort-group-0');
    
        $sortGroup.find('.list-group-item').sort(function (a, b) {
            return +a.getAttribute('data-time') - +b.getAttribute('data-time');
        })
            .appendTo($sortGroup);
            console.log($sortGroup);
    }
}