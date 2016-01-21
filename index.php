<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9" />
	<title>Grand angle - La grande Bataille de Waterloo racontée en miniatures</title>
	<meta name="description" content="Grand angle sur le déroulement de la Bataille de Waterloo le 18 juin 1815 réalisé grâce au diorama de Willy Smout." />
	<meta name="keywords" content="grand angle, histoire, Waterloo, insolite" />
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://www.bxlbondyblog.be/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
				<script type="text/javascript" src="../js/jquery.min.js"></script>
				<script type="text/javascript" src="../js/js.js"></script>
				<script type="text/javascript" src="../js/jquery.stellar.min.js"></script>
				<script type="text/javascript" src="../js/waypoints.min.js"></script>
				<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
				<script type="text/javascript" src="../js/script.js"></script>
				<script src="../audiojs/audio.min.js"></script>
				<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>
				
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$('.scrollTo').click( function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
		
		$('#menu1').click( function() { // Au clic sur un élément
			$('#menu1').css('font-weight', 'bold');
			$('#menu2').css('font-weight', 'normal');
			$('#menu3').css('font-weight', 'normal');
			$('#menu4').css('font-weight', 'normal');
		});
		$('#menu2').click( function() { // Au clic sur un élément
			$('#menu2').css('font-weight', 'bold');
			$('#menu1').css('font-weight', 'normal');
			$('#menu3').css('font-weight', 'normal');
			$('#menu4').css('font-weight', 'normal');
		});
		$('#menu3').click( function() { // Au clic sur un élément
			$('#menu3').css('font-weight', 'bold');
			$('#menu2').css('font-weight', 'normal');
			$('#menu1').css('font-weight', 'normal');
			$('#menu4').css('font-weight', 'normal');
		});
		$('#menu4').click( function() { // Au clic sur un élément
			$('#menu4').css('font-weight', 'bold');
			$('#menu2').css('font-weight', 'normal');
			$('#menu3').css('font-weight', 'normal');
			$('#menu1').css('font-weight', 'normal');
		});
		$('.scroll-back-to-top-wrapper').click( function() { // Au clic sur un élément
			$('#menu1').css('font-weight', 'bold');
			$('#menu2').css('font-weight', 'normal');
			$('#menu3').css('font-weight', 'normal');
			$('#menu4').css('font-weight', 'normal');
		});
		
		$('.trigger').click( function() { // Au clic sur un élément
			$('#menu1').css('font-weight', 'bold');
			$('#menu2').css('font-weight', 'normal');
			$('#menu3').css('font-weight', 'normal');
			$('#menu4').css('font-weight', 'normal');
		});
		
		
	});
</script>

<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>

	
<style>
.scroll-back-to-top-wrapper {
    position: fixed;
	opacity: 0;
	visibility: hidden;
	overflow: hidden;
	text-align: center;
	z-index: 99999999;
    background-color: #F4CC1F;
	color: #ffffff;
	width: 40px;
	height: 38px;
	line-height: 38px;
	right: 10px;
	bottom: 10px;
	padding-top: 2px;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}
.scroll-back-to-top-wrapper:hover {
	background-color: #D9B61C;
  color: #fdfdfd;
}
.scroll-back-to-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
	opacity: 1.0;
}
.scroll-back-to-top-wrapper i.fa {
	line-height: inherit;
}
.scroll-back-to-top-wrapper .fa-lg {
	vertical-align: 0;
}
</style>
</head>

<body>
<div class="loader"></div>
<?php $titre = "La grande Bataille de Waterloo racontée en miniatures"; ?>

	<div class="topage" class="scrollTo" id="top">
			<a class="scrollTo" href="#top"><i class="fa fa-angle-right scrollTo"></i> 
			<span><?php echo $titre; ?></span></a>
			<span class="right"><a href="http://www.bxlbondyblog.be/">Retour au bruxelles bondy blog <i class="fa fa-angle-right"></i></a></span>			
	</div>
			
	<div id="container" class="container intro-effect-push">
		<div id="page" >
				<div class="header slide"> 
					<div class="bg-img" >
						<img src="images/0.jpg" alt="Champ de bataille de Waterloo"/>
					</div>
				
					<img style="position:absolute;top:-10px;left:20px;z-index:300;" src="http://www.bxlbondyblog.be/images/logo_jaune.png" alt="Bruxelles Bondy Blog"/>
					
					<div class="title" data-slide="1" data-stellar-background-ratio="0.5">
					<?php include ("header.php"); ?>
					</div>
				
				</div>
			<button class="trigger" data-slide="3">
			<div>+</div>
			</button>
		</div>
	
			<ul class="navigation">
			<?php include ("menu.php"); ?>		
			</ul>
				
					<div style="clear:both;"></div>
			
	<div class="content_deux slide" data-slide="3" data-stellar-background-ratio="0.5">
		<section>
			<?php include("section1.php"); ?>
		</section>
	</div>
		
		<div class="content_deux slide" data-slide="4" data-stellar-background-ratio="0.5">
<span id="modeemploi"></span>
			<section>	
			
					<?php include("section2.php"); ?>
					
					</section>
		</div>


		<div  class="slide" data-slide="5" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section3.php"); ?>
					
		</section>
		
		</div>
        
		
		<div  class="slide" data-slide="6" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section4.php"); ?>			
		</section>
	
    
    	<div  class="slide" data-slide="7" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section5.php"); ?>			
		</section>
        
        
		<div  class="slide" data-slide="8" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section6.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="9" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section7.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="10" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section8.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="11" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section9.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="12" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section10.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="13" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section11.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="14" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section12.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="15" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section13.php"); ?>			
		</section>
        
        
        <div  class="slide" data-slide="16" data-stellar-background-ratio="0.5">
		<section id="face_cachee">
		
					<?php include("section14.php"); ?>			
		</section>
        
        
		<div  class="slide" data-slide="17" data-stellar-background-ratio="0.5">

					<article class="content" style="background-color:#e4e4e4; color:white; ">
					<div>
					<?php include("section15.php"); ?>
					</div>
                    </article>
		</div>
</section>        
			
<footer id="footer">
		<div id="footer_content">
					<div id="footer_logo">
					<img src="images/bbb_logo_grey.png" alt="Bondy Blog Bruxelles" />
					</div>		
							<div id="footer_ink">
							
							Copyright &copy; 2015 - www.bxlbondyblog.be
							</div>
							<div id="footer_ihecs">
							<a href="http://www.ihecs.be" target="_blank" title="Ihecs">
							<img src="images/logo_ihecs.png" alt="Ihecs" />
							</a>
							</div>
		</div>	
			
</footer>

<div class="scroll-back-to-top-wrapper">
	<span class="scroll-back-to-top-inner">
	<i class="fa fa-lg fa-angle-up"></i>
	</span>
</div>	
		
</div><!-- /container -->
		

		<script type="text/javascript" src="../js/classie.js"></script>
		<script type="text/javascript">
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;    

					
					if( reveal ) {
						classie.add( container, 'modify' );
						$('.topage').css('display', 'block');  
						$('.navigation').css('display', 'block'); 
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
						$('.topage').css('display', 'none');  
						$('.navigation').css('display', 'none'); 
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 1200 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>
		<script type="text/javascript" src="../js/dragslideshow.js"></script>
		<script type="text/javascript">
		
		$(document).ready(function() {
			$('a[href=#top]').click(function(){
			$('html, body').animate({scrollTop:0}, 'slow');
			return false;
			});
		

				var overlay = document.getElementById( 'overlay' ),
					overlayClose = overlay.querySelector( 'button' ),
					header = document.getElementById( 'header' )
					switchBtnn = header.querySelector( 'button.slider-switch' ),
					toggleBtnn = function() {
						if( slideshow.isFullscreen ) {
							classie.add( switchBtnn, 'view-maxi' );
						}
						else {
							classie.remove( switchBtnn, 'view-maxi' );
						}
					},
					toggleCtrls = function() {
						if( !slideshow.isContent ) {
							classie.add( header, 'hide' );
						}
					},
					toggleCompleteCtrls = function() {
						if( !slideshow.isContent ) {
							classie.remove( header, 'hide' );
 
						}
					},
					slideshow = new DragSlideshow( document.getElementById( 'slideshow' ), { 
						// toggle between fullscreen and minimized slideshow
						onToggle : toggleBtnn,
						// toggle the main image and the content view
						onToggleContent : toggleCtrls,
						// toggle the main image and the content view (triggered after the animation ends)
						onToggleContentComplete : toggleCompleteCtrls
					}),
					toggleSlideshow = function() {
						slideshow.toggle();
						toggleBtnn();
					},
					closeOverlay = function() {
						classie.add( overlay, 'hide' );
					};

				// toggle between fullscreen and small slideshow
				switchBtnn.addEventListener( 'click', toggleSlideshow );
				// close overlay
				overlayClose.addEventListener( 'click', closeOverlay );

			}()); 
		</script>
		
<script type="text/javascript">
// The plugin code
(function($){
    $.fn.parallax = function(options){
        var $$ = $(this);
        offset = $$.offset();
        var defaults = {
            "start": 0,
            "stop": offset.top + $$.height(),
            "coeff": 1.95
        };
        var opts = $.extend(defaults, options);
        return this.each(function(){
            $(window).bind('scroll', function() {
                windowTop = $(window).scrollTop();
                if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                    newCoord = windowTop * opts.coeff;
                    $$.css({
                        "background-position": "0 "+ newCoord + "px"
                    });
                }
            });
        });
    };
})(jQuery);

</script>
<script type='text/javascript'>
/* <![CDATA[ */
var scrollBackToTop = {"scrollDuration":"500","fadeDuration":"0.5"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.bxlbondyblog.be/bxl-bbb-news/plugins/scroll-back-to-top/assets/js/scroll-back-to-top.js'></script>

</body>
</html>