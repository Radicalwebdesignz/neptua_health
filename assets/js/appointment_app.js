$(document).ready(function(){

// AJAX Contact form

    // Get the form.
    var form1 = $('#ajax-contact1');

    // Get the messages div.
    var formMessages1 = $('#form-message1');

    // Set up an event listener for the contact form.
	$(form1).submit(function(event) {
	    // Stop the browser from submitting the form.
	    event.preventDefault();

	    // Serialize the form data.
		var formData = $(form1).serialize();
		
		// Submit the form using AJAX.
		$.ajax({
		    type: 'POST',
		    url: $(form1).attr('action'),
		    data: formData
		}).done(function(response) {
		    // Make sure that the formMessages div has the 'success' class.
		    $(formMessages1).removeClass('error');
		    $(formMessages1).addClass('success');

		    // Set the message text.
		    $(formMessages1).text(response);

		    // Clear the form.
		    $('#name1').val('');
		    $('#email1').val('');
		    $('#phone1').val('');
		    $('#department').val('');
		    $('#message1').val('');
		}).fail(function(data) {
		    // Make sure that the formMessages div has the 'error' class.
		    $(formMessages1).removeClass('success');
		    $(formMessages1).addClass('error');

		    // Set the message text.
		    if (data.responseText !== '') {
		        $(formMessages1).text(data.responseText);
		    } else {
		        $(formMessages1).text('Oops! An error occured and your message could not be sent.');
		    }
		});
	});
})	