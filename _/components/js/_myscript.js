$(function() {
  	
  //activate schedule tabs
    var hash = window.location.hash
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');


  //Add Bootstrap classes to photos
  $('.abouttheartists img').addClass('img-circle');
  $('aside.photosfromlastyear img').addClass('img-thumbnail');
  $('.artistinfo .photogrid img').addClass('img-thumbnail');


    
  //controlling oppening of accordions(collapse - згортання)
      //Bootstrap's way
      //$('#monday.accordion-body').collapse();

      //Athor's vay
      $('#monday.accordion-body').addClass('in');

      $('#artists #tuesday.accordion-body').addClass('in');
      $('#artists #wednesday.accordion-body').addClass('in');
      $('#artists #thursday.accordion-body').addClass('in');
      $('#artists #friday.accordion-body').addClass('in');

      $('#register #monday.accordion-body').removeClass('in');

  	

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

  
  //Activate Modal Window
  $(".modalphotos img").on('click', function() {
    //активація модального вікна
    $("#modal").modal({
      show: true
    });
    //із міняатюри по якій клацнули вертаємо src значення
    //великої картинки
    var mysrc = this.src.substr(0, this.src.length-7) + ".jpg";
    //присвоювання значення атрибуту img src в модальному вікні 
    $('#modalimage').attr('src', mysrc);
    //закриття картинки яка спливла в модальному вікні
    $('#modalimage').on('click', function() {
      $('#modal').modal('hide');
    });
  });

}); //jQuery is loaded