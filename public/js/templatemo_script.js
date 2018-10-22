var top_menu_height = 0;
jQuery(function($) {
		$(window).load( function() {
			$('.external-link').unbind('click');	
		});
		
        $(document).ready( function() {

            // load google map
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);
        

        top_menu_height = $('.templatemo-top-menu').height();
        // scroll spy to auto active the nav item
        $('body').scrollspy({ target: '#templatemo-nav-bar', offset: top_menu_height + 10 });
		$('.external-link').unbind('click');

        // scroll to top
        $('#btn-back-to-top').click(function(e){
            e.preventDefault();
            scrollTo('#templatemo-top');
        });

        // scroll to specific id when click on menu
        $('.templatemo-top-menu .navbar-nav a').click(function(e){
            e.preventDefault(); 
            var linkId = $(this).attr('href');
            scrollTo(linkId);
            if($('.navbar-toggle').is(":visible") == true){
                $('.navbar-collapse').collapse('toggle');
            }
            $(this).blur();
            return false;
        });
		/*
		var dt = window.atob('IHwgRGVzaWduOiA8YSByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vd3d3LnRlbXBsYXRlbW8uY29tL3RtLTM5NS11cmJhbmljIiB0YXJnZXQ9Il9wYXJlbnQiPlVyYmFuaWM8L2E+'); // decode the string
		var div = document.getElementById('footer-line');
		div.innerHTML = div.innerHTML + dt;
		*/
        // to stick navbar on top
        $('.templatemo-top-menu ').stickUp();

        // gallery category
        $('.templatemo-gallery-category a').click(function(e){
            e.preventDefault(); 
            $(this).parent().children('a').removeClass('active');
            $(this).addClass('active');
            var linkClass = $(this).attr('href');
            $('.gallery').each(function(){
                if($(this).is(":visible") == true){
                   $(this).hide();
                };
            });
            $(linkClass).fadeIn();  
        });

        //gallery light box setup
        $('a.colorbox').colorbox({
                                    rel: function(){
                                        return $(this).data('group');

                                    }
        });
    });
});

function initialize() {
    var mapOptions = {
      zoom: 12,
      center: new google.maps.LatLng(16.8451789,96.1439764)
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);
}

// scroll animation 
function scrollTo(selectors)
{

    if(!$(selectors).size()) return;
    var selector_top = $(selectors).offset().top - top_menu_height;
    $('html,body').animate({ scrollTop: selector_top }, 'slow');

}



// <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.9562171943755!2d-75.22291314203576!3d-12.049545697866352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e9622d67cc22d%3A0xa25a76c63481e2ac!2sJulio+Sumar+116%2C+Huancayo!5e0!3m2!1ses-419!2spe!4v1531504506408" 
// width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>



//   https://goo.gl/maps/GQRiabtaqYu