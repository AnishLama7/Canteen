// var ratedIndex = -1;

// function resetColors() {
// 	$(".rps i").css("color", "#e2e2e2");
// }

// function setStars(max) {
// 	for(var i = 0; i <= max; i++) {
// 		$(".rps i:eq(" + i + ")").css("color", "#f7bf17");
// 	}
// }

// $(document).ready(function () {

// 	$(".rpc i, .review-bg").click(function () { 
// 		$(".review-modal").fadeOut();
// 	})
// 	$(".opmd").click(function() {
// 		$(".review-modal").fadeIn();
// 	})


// 	resetColors();

// 	$(".rps i").mouseover(function () {
// 		resetColors();
// 		var currentIndex = parseInt($(this).data("index"));
// 		setStars(currentIndex);
// 	})

// 	 $(".rps i").on("click", function () {
// 	 	ratedIndex = parseInt($(this).data("index"));
// 	 	localStorage.setItems("rating", ratedIndex);
// 	 	$(".starRateV").val(parseInt(localStorage.getItem("rating")));
// 	 })

// 	$(".rps i").mouseleave(function () {
// 		resetColors();
// 		if(ratedIndex != -1) {
// 			setStars(ratedIndex);
// 		}
// 	})

// 	 if(localStorage.getItem("rating") != null) {
// 	 	setStars(parseInt(localStorage.getItem("rating")));
// 	 	$(".starRateV").val(parseInt(localstorage.getItem("rating")));
// 	 }


// })