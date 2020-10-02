function sortAsc() {
    var items = $('.list-group-item');
    // console.log('g');
    items.sort(function (a, b) {
        return +$(a).data('time') - +$(b).data('time');
    });
    items.appendTo('.list-group');
}