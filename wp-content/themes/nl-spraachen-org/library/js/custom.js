jQuery(document).ready(function($) {
    //alert('hallo');
    //switch justified nav
    $('.row.navigation ul.nav.navbar-nav').addClass('nav-tabs').addClass('nav-justified').removeClass('navbar-nav');


    //change language choose text
    $('.lang-item-de a').text('DE');
    $('.lang-item-en a').text('EN');
    $('.lang-item-zh a').text('文');
    $('#languages-menu').addClass('fixed');

    //give active-class to first carousel item
    $('.carousel-inner').each(function() {
	$(this).children('.item:first-child').addClass('active');
    });
    $('.carousel-indicators').each(function() {
	$(this).children('li:first-child').addClass('active');
    });

    //disable carousel controls if there is only one item
    $('.carousel').each(function() {
	//
	if ($(this).children('.carousel-inner').children('.item').length === 1) {
	    $(this).children('.carousel-indicators').remove();
	    $(this).children('.carousel-control').remove();
	}
    });


    //collapse event-tables
    //collapse items
    $('.panel-collapse').collapse();

    // $('.events-table').addClass('collapse');
    //responsive table
    $('table').wrap('<div class="table-responsive"></div>');

    //events
    $('.events .thinline').each(function() {
	$(this).children('h2').wrapInner('<a data-toggle="collapse" class="showToggle"></a>').addClass('collapseHeadline');
	var tableId = $(this).children('.table-responsive').children('table').attr('id');
	$(this).children('h2').children('a')
		.attr('href', '#' + tableId)
		.click(function() {
	    $(this).parent('h2').parent('div').siblings('a.close').css('display', 'block');
	});

    });
    $('a.close').click(function() {
	$(this).siblings('div').children('div').children('table').toggle();
	$(this).css('display', 'none');
    });
    
    
    //Referenzrahmen
    $('#infographic .right-col').each(function() {
	$(this).children('.collapseHeadline:first-child').children('a').addClass('show');
    });
    //Organigramm
    $('#infographic .sub-level ul').each(function(){
	$(this).addClass('icons');
    });
    




    //collapsed Texts Editors

    $(".accordion .editor").each(function(){
	if ($(this).children('h3').length > 0) {
	    var ID = $(this).attr('id');
	    var Headline = $(this).children('h3').text();
	    $(this).before('<h3 class="collapseHeadline"><a aria-expanded="false" data-toggle="collapse" href="#' + ID + '">' + Headline + '</a></h3>');
	    $(this).children('h3').remove();
	    $(this).addClass('collapse');
	}
    });
    $(".site-content article[class*='teams'], .site-content article[class*='standorte']").each(function(){
	var ID = $(this).attr('id');
	$(this).children('h2.page-title').addClass('collapseHeadline').wrapInner('<a data-toggle="collapse" href="#container-' + ID + '"></a>');
	$(this).children('div.collapse').attr('id','container-'+ID);
    });

    $('.collapseHeadline > a').each(function() {
	$(this).click(function() {
	    $(this).toggleClass('show');
	});
    });
    //tablepress options

    $('.events table.tablepress').addClass('events-table collapse');

    $('.events-table td').each(function() {

	if ($(this).attr('colspan')) {
	    $(this).addClass('table-headline');
	}
    });
    
    $('.events table.tablepress').each(function(){
	if($(this).children('tbody').children('tr').length < 5) {
	    //alert('treffer');
	    $(this).removeClass('collapse');
	    $(this).parent('div').siblings('h2').removeClass('collapseHeadline');
		} 
	});

    $('td.table-headline').each(function() {
	$(this).parent('tr').next('tr').addClass('transparent');
    });

    $('.sidebar article ul li').each(function() {
	$(this)
		.addClass('clearfix')
		.css('list-style', 'none')
		.wrapInner("<span></span>")
		.prepend('<i class="fa fa-caret-right fa-large"></i>');
	;
    });


    //$('.footer-sitemap ul.footer-main-menu > li').addClass('col-md-2');
    $('ul.sub-menu > li').addClass('clearfix');

    $('.sidebar .widget-news .entry p a').append(' <i class="fa-caret-right"></i>');

    //individual formats and css-classes
    $('.cat-post-item p').removeClass('lead');

    // galleries
//    $('.gallery-item').addClass('clearfix');
//    var galleryIconHeight = $('.gallery-item').width();
//    $('.gallery-item').css('height', galleryIconHeight);
    //overlay caption effect
    $('.gallery-caption').wrapInner('<span></span>');

// show info Box 
    $('.edit-post > h4').each(function() {
	$(this).click(function() {
	    $(this).siblings('.meta').toggleClass('show');
	    $(this).parent('div').toggleClass('show');
	});
    });

//show headlines in panels
    $('.panel h3 a').each(function() {
	$(this).hover(function() {
	    $(this).parent('h3').siblings('a.more-link-corner').toggle();
	    $(this).parent('h3').toggleClass('show');
	});
    });
 
    //add some bootstrap styles to contact form

    $('span[role="alert"]').addClass('alert');
    $('.wpcf7-validation-errors').addClass('alert-block').addClass('alert-error');

    //show send Box
    if ($(".wpcf7-response-output.wpcf7-mail-sent-ok").length > 0) {

	$(".wpcf7-response-output.wpcf7-mail-sent-ok").siblings().css('display', 'none');

	$(".wpcf7-response-output.wpcf7-mail-sent-ok").siblings('legend')
		.text('Anmeldung versendet')
		.css('display', 'block');

    }

//request Boxes
    function requestBoxes(requestSelect, hiddenSelect) {
	var hiddenContainer = $(hiddenSelect).parent().parent().parent();
	$(hiddenContainer).addClass('hide');
	var requestContainer = $(requestSelect);

	$(requestContainer).change(function() {
	    var antwort = $(this).val();
	    if (antwort == 'nein' || antwort == 'no') {
		$(hiddenContainer).removeClass('hide');
	    }
	});
    }
// request Visa
    requestBoxes('#abidance', '#visa')

    //external icons
    $('a').filter(function() {
	return this.hostname && this.hostname !== location.hostname;
    })
	    .append(' <i class="fa fa-external-link"></i>')
	    .attr('target', '_blank');
//PDFs LInks
$("a[href$='pdf']")
	.prepend('<i class="fa fa-file-pdf-o"></i> ')
	.addClass('file')
	.attr('target', '_blank');


    //Galleries 
//    $('[class*="-12"]').each(function() {
//	$(this).addClass('full');
//    });

    $('.sidebar .format-gallery li').each(function() {
	$(this).children('.fa-caret-right').remove();
    });

//Variable number of visible items with variable sizes
    var Id = $('.full .format-gallery').children('.hidden.id').text();
    //var slideID = '#slide-' + Id;


    $('.full #slide-' + Id + ' ul').carouFredSel({
	responsive: true,
	auto: {
	    pauseDuration: 5000},
	prev: '#prev',
	next: '#next',
	pagination: "#pager",
	width: '100%',
	mousewheel: true,
	swipe: {
	    onMouse: true,
	    onTouch: true
	},
	scroll: 2,
	items: {
	    width: 150,
	    //	height: '30%',	//optionally resize item-height
	    visible: {
		min: 2,
		max: 6
	    },
	    effect: 'swing',
	    speed: 500,
	    pauseOnHover: false,
	    onBefore: null,
	    onAfter: null
	}
    });

    $('.partner-logos').each(function() {
	//$(this).css('background','red');
	var $articleID = $(this).parent('.post').siblings('.hidden.id').text();
	var $cntID = '#cnt-' + $articleID;
	//alert($cntID);

	var $container = $($cntID);

	$container.imagesLoaded(function() {
	    $container.masonry({
		itemSelector: '.tiles li'
	    });
	});
    });


    //infographic
    //$('#infographic .collapseHeadline').wrapInner('<a></a>');
    $('#infographic h3 br').remove();

    $('infographic .left-col').after('<div class="col-md-2 middle-col"> </div>');


    //elastic iframes
    $('iframe').wrap('<div class="iframe-elastic"></div>');
    $('.page-template-page-standorte-php iframe').attr('id','map');

//Google Maps
/*

    var el = $('#map');
var map;

function enableScrollingWithMouseWheel() {
    map.setOptions({ scrollwheel: true });
}

function disableScrollingWithMouseWheel() {
    map.setOptions({ scrollwheel: false });
}

function init() {
    map = new google.maps.Map(el[0], {
        zoom: 10,
        center: new google.maps.LatLng(47.49840560, 19.04075779),
        scrollwheel: false // disableScrollingWithMouseWheel as default
    });

    google.maps.event.addListener(map, 'mousedown', function(){
        enableScrollingWithMouseWheel()
    });
}

//google.maps.event.addDomListener(window, 'load', init);

$('body').on('mousedown', function(event) {
    var clickedInsideMap = $(event.target).parents('#map').length > 0;

    if(!clickedInsideMap) {
        disableScrollingWithMouseWheel();
    }
});

$(window).scroll(function() {
    disableScrollingWithMouseWheel();
});
   

    //scroll to top -> ToDo Proof: tuts nicht mehr
    //Check to see if the window is top if not then display button
//    jQuery(window).scroll(function() {
//	if (jQuery(this).scrollTop() > 100) {
//	    jQuery('.scroll-to-top').fadeIn();
//	    jQuery('#languages-menu').addClass('fixed');
//	} else {
//	    jQuery('.scroll-to-top').fadeOut();
//	    jQuery('#languages-menu').removeClass('fixed');
//	}
//    });
//
//    //Click event to scroll to top
//    jQuery('.scroll-to-top').click(function() {
//	jQuery('html, body').animate({scrollTop: 0}, 800);
//	return false;
//    });

*/
//Organigram

	$('.nav a').bind('click',function(event){
		var anchor = $(this).attr('href');
                var currentlevel = $(this).parent().parent().siblings();
                //alert(currentlevel);
		goto(anchor, this, currentlevel);
		event.preventDefault();
               
		
	});
	
   function goto(id, t, level){
       
         $(level).animate({"left": -($(id).position().left)}, 500);      
         
         // remove "active" class from all links inside #nav
         $('.nav a').removeClass('active');
         
         // add active class to the current link
         $(t).addClass('active');
         
      }
      
    //using Tooltip or PopOvers in Bootstrap Styles
    //$('.help').popover();
    //remove brs in help
    $('a.help').each(function(){
	$(this).children('br').remove();
    });
      
    // Qtip Tooltip
    $('.hasTooltip').each(function() { // Notice the .each() loop, discussed below
	$(this).qtip({
	    content: {
		text: $(this).next('span') // Use the "div" element next to this for the content
	    },
	    show: {
		event: 'click'
	    },
	    hide: {
		event: 'click'
	    },
	    style: {
		classes: 'qtip-light qtip-shadow'
	    },
	    position: {
		my: 'top left', // Position my top left...
		at: 'bottom left', // at the bottom right of...
	    }
	});
    });

});// end document ready


//uncrypt email
function UnCryptMailto(s) {
    var n = 0;
    var r = "";
    for (var i = 0; i < s.length; i++)
    {
	n = s.charCodeAt(i);
	if (n >= 8364)
	{
	    n = 128;
	}
	r += String.fromCharCode(n - 1);
    }
    return r;
}
function linkTo_UnCryptMailto(s) {
    location.href = UnCryptMailto(s);
}
