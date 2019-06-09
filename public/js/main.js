$(document).ready(function () {
    $(".checks #home").onchange(homeClicked());
    $(".checks #street").onchange(streetClicked());
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

    var form = $("#claim_form");
    var formData = new FormData(form[0]);
    $.ajax({
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type: 'POST',
        url: form.attr('action')
    }).done(function (response) {
        alert(response);
        location.reload();
        e.preventDefault();
    }).fail(function (response) {
        console.log(response);
    });
        // var url = form.attr('action');
    // var s = form.serialize();
    //
    // $.ajax({
    //     type: "POST",
    //     url: url,
    //     data: form.serialize(), // serializes the form's elements.
    //
    //     success: function (data) {
    //         alert(data); // show response from the php script.
    //     }
    // });


}
