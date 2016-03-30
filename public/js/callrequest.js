$(function() {
    $('#_call_request_link').on('click', function (e) {
        e.preventDefault();
        window.open($(this).attr('href'), "Заказать обратный звонок", "menubar=no,location=no,resizable=no,scrollbars=yes,status=yes,width=600,height=600")

    })
});