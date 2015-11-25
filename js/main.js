$(function(){
	current_page = document.location.href 
	if (current_page.match(/index/)) {
	$(".Home").addClass('active');
	}else if (current_page.match(/AboutUs/)) {
		$(".AboutUs").addClass('active');
	} else if (current_page.match(/Services/)) {
		$(".Services").addClass('active');
	}else if (current_page.match(/Gallery/)) {
		$(".Gallery").addClass('active');
	} else if (current_page.match(/Events/)) {
		$(".Events").addClass('active');
	} else if (current_page.match(/ContactUs/)) {
		$(".Contact").addClass('active');
	} else { // don't mark any nav links as selected
		$(".Home").addClass('active');
	};	

/*	 $.ajax( {
       url: '../json/HomePage/Events_Carousel.json',
       dataType: 'json',
       success: function(Events_Data) {
       	
        var response = '';
            //indicator = '';
      	for(var i=0; i < Events_Data.length; i++){
      		response += '<div class="item"><div class="col-md-3 col-sm-6 col-xs-12 Offers_well"><a href="#"><div class="date"><img src="'+Events_Data[i].SourceUrl+'" class="img-responsive"><figure><span>'+Events_Data[i].Date+'</span>'+Events_Data[i].Month+'</figure></div></a></div></div>';
      		//indicator += '<li data-target="#myCarousel" data-slide-to="'+i+'"></li>';
      	}
      	console.log(response);
      	$('#Events_Carousel').append(response);
        //$('#indicators').append(indicator);
        $('.item').first().addClass('active');
        //$('.carousel-indicators > li').first().addClass('active');
        $("#myCarousel").carousel();
       }
   });

	$('.carousel[data-type="multi"] .item').each(function(){
		var next = $(this).next();
		if (!next.length) {
		    next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
		  
		for (var i=0;i<2;i++) {
		    next=next.next();
		    if (!next.length) {
		    	next = $(this).siblings(':first');
		  	}
		    
		    next.children(':first-child').clone().appendTo($(this));
		}
	});


*/
	$("[data-toggle=popover]").popover({
    html: true, 
	content: function() {
          return $('#popover-content').html();
        }
	});


	
	// Custom Navigation Events
	$(".next").click(function(){
		owl.trigger('owl.next');
	});
	$(".prev").click(function(){
		owl.trigger('owl.prev');
	});
	$(".stop").click(function(){
		owl.trigger('owl.stop');
	});
	//$('.owl-item').css("width","200px");
	//$('.owl-item').addClass('well');
	
	$('#UserReg_Button').on("click", function(){
  		$('#Overlay').fadeIn("slow");
  		$('#UserReg_Container').fadeIn("slow");
  	});

  	$('#Overlay').on("click", function(){
		$('#Overlay').fadeOut("slow");
		$('#Services_over_container').fadeOut("slow");
		$('.Operations_Logistics_Div').fadeOut("slow");
		$('.Crisis_Management').fadeOut("slow");
		$('.Permits_City').fadeOut("slow");
		$('.Transportation').fadeOut("slow");
		$('.Budget_Management').fadeOut("slow");
		$('.Signage_Planning').fadeOut("slow");
		$('.Vendor_Negotiations').fadeOut("slow");
		$('.Volunteer_Management').fadeOut("slow");
		$('.MARKETING').fadeOut("slow");
		$('#UserReg_Container').fadeOut("slow");
	});
       $("#TEST_TRACK").on("click", function(){
               $('.track_container').load("http://www.myorders.com/templates/OrderDetails.html");
       });
});
