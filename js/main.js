$("#registration-form").on("submit", function (e) {
    e.preventDefault()

    var formData = {
        name: $("#form-name").val(),
        secondName: $("#form-second-name").val(),
        email: $("#form-email").val(),
        password: $("#form-password").val(),
        passwordConfirm: $("#form-password-confirm").val(),
    };


    $.ajax({
        method: "POST",
        url: '/ajax/add_form_result.php',
        dataType: "json",
        data: {formData},
        success: function (response) {
            response = JSON.parse(response);
            console.log(response);

            if (response.success === true) {
                var registrationModal = new bootstrap.Modal(document.getElementById('registration-modal-success'))
                registrationModal.show();
            } else {
                openFailurePopup(response.message);
            }

        },
        error: function (e) {
            openFailurePopup("500 error");
        }
    });
});

function openFailurePopup(errorMessage) {
    var registrationModalFailure = new bootstrap.Modal(document.getElementById('registration-modal-failure'))
    registrationModalFailure.show();

    $("#registration-modal-failure .modal-body").html(errorMessage);
}