$(function() {
  	
  	//highlight the current nav li item
  	$("#home a:contains('Home')").parent().addClass('active');
  	$("#schedule a:contains('Schedule')").parent().addClass('active');
  	$("#artists a:contains('Artists')").parent().addClass('active');
  	$("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
  	$("#register a:contains('Register')").parent().addClass('active');


	//make menus drop automatically
	$("ul.nav li.dropdown").hover(function() {
		$(".dropdown-menu", this).fadeIn();
	}, function() {
		$(".dropdown-menu", this).fadeOut("fast");
	});//hover

  //initialize all tooltips on a page
  $(function () {
  $('[data-toggle="tooltip"]').tooltip({animation: true});
  });

}); //jQuery is loaded