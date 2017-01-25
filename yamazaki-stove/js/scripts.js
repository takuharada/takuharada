/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2013 Alexander "Alx" Agnarson, http://alxmedia.se
	alx-tabs,alx-posts,alx-video widgets include
*/
/* loading
/* ------------------------------------ */
jQuery(window).load(function() {
	

	
/*  loading
/* ------------------------------------ */		
jQuery('#loading').fadeOut(500);
});


jQuery(document).ready(function($) {

/*  iframe-content
/* ------------------------------------ */
    $(".entry-inner iframe").wrap("<div class=\"iframe-content\" />");
   		
/*  Scroll to top
/* ------------------------------------ */
 var showFlag = false;
    var topBtn = $('#page-top');    
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '20px'}, 200); 
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });


	
/* addClass
/* ------------------------------------ */
		jQuery(".item img").addClass("transform01");
		jQuery(".post-item-category a,.post-item-tags a").addClass("hvr-bounce-to-right");
		jQuery(".tagcloud a").addClass("hvr-icon-wobble-vertical");
 		jQuery("article").addClass("wow fadeInDown");

 

		
		
/*  Toggle header search
/* ------------------------------------ */
	$('.toggle-search').click(function(){
		$('.toggle-search').toggleClass('active');
		$('.search-expand').fadeToggle(250);
            setTimeout(function(){
                $('.search-expand input').focus();
            }, 300);
	});
	

	
	
/*  Tabs widget
/* ------------------------------------ */	
	(function() {
		var $tabsNav       = $('.alx-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.alx-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href=' + window.location.hash + ']' : 'a:first' ).trigger('click');

	})();
	
/*  Comments / pingbacks tabs
/* ------------------------------------ */	
    $(".comment-tabs li").click(function() {
        $(".comment-tabs li").removeClass('active');
        $(this).addClass("active");
        $(".comment-tab").hide();
        var selected_tab = $(this).find("a").attr("href");
        $(selected_tab).fadeIn();
        return false;
    });

/*  Table odd row class
/* ------------------------------------ */
	$('table tr:odd').addClass('alt');

/*  Sidebar collapse
/* ------------------------------------ */
	$('body').addClass('s1-collapse');
	$('body').addClass('s2-collapse');
	
	$('.s1 .sidebar-toggle').click(function(){
		$('body').toggleClass('s1-collapse').toggleClass('s1-expand');
		if ($('body').is('.s2-expand')) { 
			$('body').toggleClass('s2-expand').toggleClass('s2-collapse');
		}
	});
	$('.s2 .sidebar-toggle').click(function(){
		$('body').toggleClass('s2-collapse').toggleClass('s2-expand');
		if ($('body').is('.s1-expand')) { 
			$('body').toggleClass('s1-expand').toggleClass('s1-collapse');
		}
	});

/*  Dropdown menu animation
/* ------------------------------------ */
	$('.nav ul.sub-menu').css('opacity', '0');
	$('#nav-header .nav > li').hover( 
	
		function() {
			$(this).children('ul.sub-menu').css({"opacity":"0.95","top":"63px"})
		}, 
		function() {
			$(this).children('ul.sub-menu').css({"opacity":"0","top":"43px"})
		}
	);
		$('#nav-header .nav ul > li').hover( 
	
		function() {
			$(this).children('ul.sub-menu').css({"opacity":"0.95","top":"0px"})
		}, 
		function() {
			$(this).children('ul.sub-menu').css({"opacity":"0","top":"20px"})
		}
	);
	

   
   
	
/*  Mobile menu smooth toggle height
/* ------------------------------------ */	
	$('.nav-toggle').on('click', function() {
		slide($('.nav-wrap .nav', $(this).parent()));
	});
	 
	function slide(content) {
		var wrapper = content.parent();
		var contentHeight = content.outerHeight(true);
		var wrapperHeight = wrapper.height();
	 
		wrapper.toggleClass('expand');
		if (wrapper.hasClass('expand')) {
		setTimeout(function() {
			wrapper.addClass('transition').css('height', contentHeight);
		}, 100);
	}
	else {
		setTimeout(function() {
			wrapper.css('height', wrapperHeight);
			setTimeout(function() {
			wrapper.addClass('transition').css('height', 0);
			}, 100);
		}, 100);
	}
	 
	wrapper.one('transitionEnd webkitTransitionEnd transitionend oTransitionEnd msTransitionEnd', function() {
		if(wrapper.hasClass('open')) {
			wrapper.removeClass('transition').css('height', 'auto');
		}
	});
	}
	

/*  owl slider  -Advanced Slider Widget-
/* ------------------------------------ */		
	 var owl = jQuery("#owl");
      owl.owlCarousel({        
        itemsCustom : [
          [0, 2],
          [480, 2],
          [1000, 3]
        ],
		autoPlay : 10000,
		pagination : false,
	 autoHeight : true,
    navigation : false
      });
    });
	
jQuery(function(){
     jQuery('#owl-prev').hover(function(){　
            target = document.getElementById("owl-prev");
            target.innerHTML = "prev　";
     }, function(){
          target = document.getElementById("owl-prev");
            target.innerHTML = "";  
   });
   
   
    jQuery('#owl-next').hover(function(){　
            target = document.getElementById("owl-next");
            target.innerHTML = "next　";
     }, function(){
          target = document.getElementById("owl-next");
            target.innerHTML = "";  
   });
	
	
	
	


/* ------------------------------------ */	
});


	
/*  FLAutoKerning
/* ------------------------------------ */	
function init()
{
	
}
$(function(){
	FLAutoKerning.process($('h1.post-title'));
});


  
  