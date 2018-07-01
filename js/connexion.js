function showvis(checked) {
    if (checked === true)
        $('#exp').fadeOut(200);
    $('#adm').fadeOut(200);
    $('#vis').fadeIn(2000);
}

function showexp(checked) {
    if (checked === true)
        $('#vis').fadeOut(200);
    $('#adm').fadeOut(200);
    $('#exp').fadeIn(2000);
}

function showadm(checked) {
    if (checked === true)
        $('#vis').fadeOut(200);
    $('#exp').fadeOut(200);
    $('#adm').fadeIn(2000);
}