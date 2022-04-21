$(document).ready(function() {
  "use strict";
   var myCenter;
 var header_height =  $('.header-style').height()
  $(window).on("scroll",function(){
	  
	 if($(window).scrollTop() > header_height){
		
		 $('.header-style').css('top',-header_height);
		 setTimeout(function(){
			 $('body').addClass('header_down');
			 },100)
	 }
	 else{
		  $('.header-style').css('top',0);
		 
		  setTimeout(function(){
		 $('body').removeClass('header_down');
		  },100)
		 }
	  });
 $('#menu').on('click', function() {
        if ($(window).width() <= 767) {
            $('.navigation').slideToggle('normal');
        }
		return false;
    })
  $('.navigation>ul> li >a').on('click', function() { 
        if ($(window).width() <= 767) {
            $('.navigation>ul> li').removeClass('on');
            $('.navigation>ul> li> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') == true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });	
//==============Header 2=================
if ($('.header-style2').length) {
 var topH = $('.header-style2 .navigation ').offset().top;
	$(window).on("scroll",function(){
		var topScroll = $(this).scrollTop();
		if(topScroll > topH){
			$('.header-content').addClass('fixed-header2');
			}
	else{
		$('.header-content').removeClass('fixed-header2');
		}		
	});
}
//==============Gallery=================		
if ($('#gallery').length) {
		$(".fancylight").fancybox({
			openEffect : 'elastic',
			closeEffect : 'elastic',
			helpers : {
				media : {}
			}
		});
}
if ($('#testimonial').length) {	
 $('#testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    center:true,
     responsive:{
        0:{
            items:1
        },
        767:{
            items:3
        },
         992:{
            items:3
        },
         1200:{
            items:3
        }
    }
}) 
}

if ($('.team-slider').length) {	
 $('.team-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    center:true,
	 navText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"],	
     responsive:{
        0:{
            items:1
        },
        767:{
            items:3
        },
         992:{
            items:5
        },
         1200:{
            items:5
        }
    }
}) 
}
if ($('#offer').length) {
$("#offer").owlCarousel({
	loop:true,
    nav:true,
    dots:false,
	navText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
         992:{
            items:2
        },
         1200:{
            items:4
        }
    }
   

	})
}
//=============Accordion Function=============
 $('.mobile-heading').on('click', function() { 
 			 $('.tab-content .tab-block').slideUp('normal');
            if ($(this).next().is(':hidden') == true) {
                $(this).next().slideDown('normal');
            }
       
    });  
  //=============Tab Function=============
  $('.tab-title li').on('click',function(){
  	$('.tab-title li').removeClass('active');
  	$(this).addClass('active');
  	var tabShow = $(this).data('tab');
  	$('.tab-content .tab-block').css('display','none');
  	$('.'+tabShow).css('display','block');
  })  	  
 //======================= Map Function================
 /* Map address pin function*/
if ($('#map').length) {
	google.maps.event.addDomListener(window, 'load', initialize);
   
}
$(window).on("load",function() {
	$('#loader-wrapper').delay(500).fadeOut();
});
});
if ($('#map').length) {
 var myCenter = new google.maps.LatLng(51.538308, -0.3817765);
	function initialize() {
           var mapProp = {
            center:myCenter,
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            scrollwheel : false,
			styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapProp); 

        var marker = new google.maps.Marker({
            position: myCenter,
            icon: {
                url: 'assets/images/map-pin.png',
                size: new google.maps.Size(90, 111), //marker image size
                origin: new google.maps.Point(0, 0), // marker origin
                anchor: new google.maps.Point(35, 86) // X-axis value (35, half of marker width) and 86 is Y-axis value (height of the marker).
            }
        });

        marker.setMap(map);

        }
function reloadStylesheets() {
  var queryString = 'reload=' + new Date().getTime();
  $('link[rel="stylesheet"]').each(function () {
    if(this.href.indexOf('?') !== -1){
       this.href = this.href + '&' + queryString;
    }
    else{
       this.href = this.href + '?' + queryString;
    }
  });
}
}