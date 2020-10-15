function sortAsc() {
    var j = document.querySelectorAll('.card').length;
    element = [];
    for (let k = 0; k < j; k++) {
        
        var x = document.getElementsByClassName("list-group")[k].id;
        element.push(x);
    }
    console.log(element);

    for (i = 0; i < j; i++) {

        var $sortGroup = $(element[i]);
        console.log(element[i]);
        console.log($sortGroup);
    
        $sortGroup.find('.list-group-item').sort(function (a, b) {
            return +a.getAttribute('data-time') - +b.getAttribute('data-time');
        })
            .appendTo($sortGroup);
            // console.log(j);
    }
}

// function getID() {
//     var j = document.querySelectorAll('.card').length;
//     element = [];
//     for (let k = 0; k < j; k++) {
        
//         var x = document.getElementsByClassName("list-group")[k].id;
//         element.push(x);
//     }
//     console.log(element);
// }

// function sortDesc() {
//     var j = document.querySelectorAll('.card').length;
//     for (i = 0; i < j; i++) {

//         var $sortGroup = $('.sort-group-'.i);

//         $sortGroup.find('.list-group-item').sort(function (b, a) {
//             return +a.getAttribute('data-time') - +b.getAttribute('data-time');
//         })
//             .appendTo($sortGroup);
//             console.log(j);
//     }
// }