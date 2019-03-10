$(function() {

    $("input, textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour

            // get values from FORM
            let firstName = $("input#firstName").val();
            let lastName = $("input#lastName").val();
            let email = $("input#email").val();
            let phone = $("input#phone").val();
            let datePicker = $("input#datePicker").val();

            let hours = document.getElementById("hours").value;
            // let hours = $("select#selectedHours").val();
            let societyName = $("input#societyName").val();
            let participants = $("input#participants").val();
            let message = $("textarea#message").val();

            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }

            $.ajax({
                url: "../../php/contact_me_pro.php",
                type: "POST",
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    phone: phone,
                    datePicker: datePicker,
                    hours: hours,
                    societyName: societyName,
                    participants: participants,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success-mail-pros').html("<div class='alert alert-success'>");
                    $('#success-mail-pros > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>")
                        .append("<strong>Votre message a bien été envoyé.</strong>")
                        .append('</div>');

                    //clear all fields
                    $('#contactFormPro').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success-mail-pros').html("<div class='alert alert-danger'>")
                        .find('> .alert-danger')
                        .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>")
                        .append("<strong>Désolé " + firstName + ", il semble que le serveur mail ne soit pas disponible. Réessayez plus tard !")
                        .append('</div>');

                    //clear all fields
                    $('#contactFormPro').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success-mail-pros').html('');
});
