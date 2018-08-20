	$(function(){
	  $('#topnav ul li a').on('click', function(e){
		e.preventDefault();
		var scrolldiv = $(this).attr('href');
		
		$(scrolldiv).animatescroll({padding:44});
	  });
	});