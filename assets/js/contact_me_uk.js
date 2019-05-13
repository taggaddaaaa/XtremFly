$(function () {

    $("input, textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            let name = $("input#name").val();
            let email = $("input#email").val();
            let phone = $("input#phone").val();
            let message = $("textarea#message").val();
            let firstName = name; // For Success/Failure Message

            $.ajax({
                url: "../../php/contact_me_uk.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function () {
                    // Success message
                    $('#success-mail-uk').html("<div class='alert alert-success'>");
                    $('#success-mail-uk > .alert-success')
                        .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>")
                        .append("<strong>Your message has been sent.</strong>")
                        .append('</div>');

                    //clear all fields
                    $('#contactFormUK').trigger("reset");
                },
                error: function () {
                    // Fail message
                    $('#success-mail-uk').html("<div class='alert alert-danger'>");
                    $('#success-mail-uk > .alert-danger')
                        .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>")
                        .append("<strong>Sorry " + firstName + ", \n" + "it seems that the mail server is not available. Try again later!")
                        .append('</div>');

                    //clear all fields
                    $('#contactFormUK').trigger("reset");
                },
            })
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function () {
    $('#success-mail-uk').html('');
});
