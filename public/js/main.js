$(document).ready(function () {
    $(".checks #home").change(streetClicked());
    $(".checks #street").change(homeClicked());
});


function homeClicked() {
    let home = $(".checks #home");
    $(".map_text h6").hide();
    $(".map_text .home_info").hide();
    $(".map_text p").show();
    $(".map_text .more").show();

}


function streetClicked() {
    let street = $(".checks #street");
    $(".map_text h6").show();
    $(".map_text .home_info").show();
    $(".map_text p").hide();
    $(".map_text .more").hide();
}

function sendClaim(e) {

    var form = $('#claim_form');
    var formData = new FormData(form[0]);
    $.ajax({
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': form.attr('token')
        },
        type: 'POST',
        url: form.attr('action')
    }).done(function (response) {
        var result = JSON.parse(response);
        console.log(result);
        console.log(response);
        $('result_popup').show();
        $('result_id').text(result["claim_id"])
        e.preventDefault();
    }).fail(function (response) {
        console.log(response);
    });
}

function sendConfirmCallback() {

    var form = $('#confirm_feedback');
    var formData = new FormData(form[0]);
    $.ajax({
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': form.attr('token')
        },
        type: 'POST',
        url: form.attr('action')
    }).done(function (response) {
        window.location.href = "/";
        location.reload();
        e.preventDefault();
    }).fail(function (response) {
        console.log(response);
        window.location.href = "/";
        location.reload();
    });
}
