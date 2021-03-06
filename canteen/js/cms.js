$(function() {

	$('#confirm_password').on('change keyup', function(){
		var npass = $('#new_password').val();
		var cpass = $(this).val();
		var opass = $('#old_password').val();

		if(npass == cpass) {
			document.querySelector('#confirm_password').setCustomValidity('');
		}
		else {
			document.querySelector('#confirm_password').setCustomValidity('Password not confirmed.');
		}


		if(opass == '' || opass == null) {
			document.querySelector('#old_password').setCustomValidity('Please fill out this field');
		}
		else {
			document.querySelector('#old_password').setCustomValidity('');
		}

	});

	$('#old_password').on('change keyup', function(){
		var opass = $(this).val();

		if(opass == '' || opass == null) {
			document.querySelector('#old_password').setCustomValidity('Please fill out this field');
		}
		else {
			document.querySelector('#old_password').setCustomValidity('');
		}

	});

$(function() {

	$('.delete').click(function(e) {
		e.preventDefault();

		if(confirm('Are you sure you want to delete this items')) {
			var url = $(this).attr('href');

			location.href = url;

		}

	});

	$('.alert').delay(10000).slideUp(500); 

	$('#image').change(function() {
		readURL(this);
	});
 
});

});

function readURL(input) {

	if(input.files && input.files[0]) {

		var reader = new FileReader();

		reader.onload = function (e) {
			var html = "<img class='img-fluid mt-3' src='"+e.target.result+"'>";

			$('.img-preview').html(html);
		}

		reader.readAsDataURL(input.files[0]);

	}
}

// plus and minus
$(document).ready(function(){
    $('.count').prop('disabled', true);
		$(document).on('click','.plus',function(){
		$('.count').val(parseInt($('.count').val()) + 1 );
	});
	$(document).on('click','.minus',function(){
		$('.count').val(parseInt($('.count').val()) - 1 );
			if ($('.count').val() == 0) {
				$('.count').val(1);
			}
    	});
	});


