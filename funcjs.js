$(function(){
	$("header .btn").click(function () {
		$('html,body').animate({scrollTop:$("#services").offset().top},'slow');
		return false;
	})
	$('.n1').click(function () {
		$('html,body').animate({scrollTop:$('#services').offset().top},'slow');
		return false;
	})
	$('.n2').click(function () {
		$('html,body').animate({scrollTop:$('#clients').offset().top},'slow');
		return false;
	})
	$('.n3').click(function () {
		$('html,body').animate({scrollTop:$('#ourteam').offset().top},'slow');
		return false;
	})
	$('.n4').click(function () {
		$('html,body').animate({scrollTop:$('footer').offset().top},'slow');
		return false;
	})

})
 