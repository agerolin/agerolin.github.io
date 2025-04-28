// Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var givname = $("input#name").val();
			 var famname = $("input#name").val();
			 var uni = $("input#uni").val();
            var email = $("input#email").val();
			 var phone = $("input#diet").val();
			 var docnum = $("input#dep").val();
			 var docexpdate = $("input#dep").val();
			 var flightinfo = $("input#dep").val();
			 var adate = $("input#adate").val();
			 var ddate = $("input#ddate").val();
			 var semdate = $("input#ddate").val();
            var title = $("input#title").val();
            var abstract = $("textarea#message").val();
			 var hotelinfo = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    givname: givname,
					  famname: famname,
                    uni: uni,
                    email: email,
					  phone: phone,
					  docexpdate: docexpdate,
					  docnum: docnum,
					  adate: adate,
					  ddate: ddate,
					  semdate: semdate,
					  flightinfo: flightinfo,
					  hotelinfo: hotelinfo,
					  title: title,
                    abstract: abstract
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your registration has been sent to the organizers. You must receive a copy of your registration at your e-mail address. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
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
    $('#success').html('');
});
