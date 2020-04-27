$(function() {

	$('.delete').click(function(e) {
		e.preventDefault();

		if(confirm('Are you sure you want to delete this items')) {
			var url = $(this).attr('href');

			location.href = url;

		}

	});

	$('.alert').delay(5000).slideUp(500); 

	$('#image').change(function() {
		readURL(this);
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