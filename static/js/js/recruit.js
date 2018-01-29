$(function () {
    var as = $("td a");
    as.each(function () {
        $(this).attr("href",  $(this).attr("href") + "?" + $(this).html());
    });
});