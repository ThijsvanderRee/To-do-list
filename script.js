function sortAsc() {
    var j = document.querySelectorAll('.card').length;
    for (i = 0; i < j; i++) {

        var $sortGroup = document.getElementById('sort-group-0');
        console.log($sortGroup)
    
        $sortGroup.find('.list-group-item').sort(function (a, b) {
            return +a.getAttribute('data-time') - +b.getAttribute('data-time');
        })
            .appendTo($sortGroup);
            console.log(j);
    }
}

function sortDesc() {
    var j = document.querySelectorAll('.card').length;
    for (i = 0; i < j; i++) {

        var $sortGroup = $('.sort-group-'.i);

        $sortGroup.find('.list-group-item').sort(function (b, a) {
            return +a.getAttribute('data-time') - +b.getAttribute('data-time');
        })
            .appendTo($sortGroup);
            console.log(j);
    }
}

// Array.from(document.querySelectorAll("ul > li[data-time]"))
//     .sort(({ dataset: { time: a } }, { dataset: { time: b } }) => a.localeCompare(b)) // To reverse it, use `b.localeCompare(a)`.
//     .forEach((item) => item.parentNode.appendChild(item));