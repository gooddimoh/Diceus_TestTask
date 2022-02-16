$('#playall').onclick(function () {

    $.ajax({
        url: "/play-button",
        context: document.body
    }).done(function (result) {
        console.log(result);
    });

});
$('#nextweek').onclick(function () {
    $.ajax({
        url: "/play-next",
        context: document.body
    }).done(function (result) {
        console.log(result);
    });
});
