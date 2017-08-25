(function($){

	$(document).ready(function() {

		/* ---------------------------------------------- /*
		 * Contact form ajax
		/* ---------------------------------------------- */

		$('#contact-form').find('input,textarea').jqBootstrapValidation({
			preventSubmit: true,
			submitError: function($form, event, errors) {
				// additional error messages or events
			},
			submitSuccess: function($form, event) {
				event.preventDefault();

				var submit          = $('#contact-form submit');
				var ajaxResponse    = $('#contact-response');

				var name            = $("input#cname").val();
				var email           = $("input#cemail").val();
				var message         = $("textarea#cmessage").val();

				var sendData = $('#contact-form').serialize();

				$.ajax({
					type: 'POST',
					url: 'assets/js/contact_mailer.php',
					//dataType: 'json',
					data: sendData,
					//cache: false,
					beforeSend: function(result) {
						submit.empty();
						submit.append('<i class="fa fa-cog fa-spin"></i> Wait...');
					},
					success: function(result) {

						if(result === 'success') {
							ajaxResponse.html("Thank you for your email! I'll be in touch shortly.");
							$form.fadeOut(500);
							console.log(result);
						} else {
							ajaxResponse.html(result);
						}
					}
				});
			}
		});

	});

})(jQuery);
