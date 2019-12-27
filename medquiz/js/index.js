
function onClickAnswerButton() {
	$(".answer-button").click(function() {
		$(this).siblings(".question-page").toggle();
		$(this).siblings(".answer-page").toggle();
		$(this).siblings(".answer-page").find('.answer').each(function () {
			$(this).animate({backgroundColor: '#e2e3e5'}, 800);
		});
		$(this).siblings(".back-to-question-button").toggle();
		$(this).toggle();
	});
}

function onClickBackToQuestionButton() {
	$(".back-to-question-button").click(function() {
		$(this).siblings(".question-page").toggle();
		$(this).siblings(".answer-page").toggle();
		$(this).siblings(".answer-button").toggle();
		$(this).toggle();
	});
}

function showPage(pageNum, max_pages) {
	$(".content > div").each(function () {
		$(this).hide();
	});
	if (pageNum == 0) {
		$("#page-one").show();
	} else if (pageNum == 1) {
		$("#page-two").show();
	} else if (pageNum == 2) {
		$("#page-three").show();
	} else if (pageNum == 3) {
		$("#page-four").show();
	} else if (pageNum == 4) {
		$("#page-five").show();
	} else if (pageNum == 5) {
		$("#page-six").show();
	} else if (pageNum == 6) {
		$("#page-seven").show();
	} else if (pageNum == 7) {
		$("#page-eight").show();
	} else if (pageNum == 8) {
		$("#page-nine").show();
	} else if (pageNum == 9) {
		$("#page-ten").show();
	}

	if (pageNum == 0) {
		$("#prev-button").addClass('disabled');;
	}

	if (pageNum == max_pages) {
		$("#next-button").addClass('disabled');
}

function initNavButtons() {
	var max_pages = $(".content > div").length - 1;
	var current_page = 0;
	$("#next-button").click(function() {
		if (max_pages > current_page) {
			current_page = current_page + 1;
			document.cookie = "page=" + current_page;
			showPage(current_page, max_pages);
		}
	});

	$("#prev-button").click(function() {
		if (current_page > 0) {
			current_page = current_page - 1;
			document.cookie = "page=" + current_page;
			showPage(current_page, max_pages);
		}
	});
}

function initSessionPage() {
	var page = document.cookie;
	page = parseInt(page.substring(5, 6));
	var max_pages = $(".content > div").length - 1;
	showPage(page, max_pages);
}

function initCookie() {
	var cookie = document.cookie;
    var begin = cookie.indexOf("page=");
    console.log(cookie);
    if (begin == -1) {
    	document.cookie="page=0";
    }
}

$(document).ready(function(){
	initCookie();
	initNavButtons();
	initSessionPage();
	onClickAnswerButton();
	onClickBackToQuestionButton();

	$( "#unsorted-diagnosis, #sorted-diagnosis" ).sortable({
		connectWith: ".diagnosis-container"
	}).disableSelection();

	$(".section-link").click(function () {
		document.cookie ="page=0";
	});

	$(".next-section-link").click(function () {
		document.cookie ="page=0";
	});

});

