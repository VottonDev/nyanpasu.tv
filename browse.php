<!DOCTYPE html>
<html style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require "global.php"; ?>

<title>Nyanpasu Anime Streaming</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="./source/fonts.css" rel="stylesheet" type="text/css">
    <link href="./source/style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

</head>

<body style="display: block;"><div id="_AF_HSS_extension_installed" style="display: none !important;"></div>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache" style="display: none;"></div>

<!-- HEADER -->

<div id="wrapper-header" style="width: 100%; opacity: 1;">
	<div id="main-header" class="object">
		<div class="logo"><h3>Nyanpasu.tv</h3></div>
        <div id="main_tip_search">
			<form method="post" action="search.php">
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete="off" required="">
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar" style="opacity: 1; height: 60px;">
		<div class="navbar object">
    		<div id="wrapper-sorting">
            <div id="wrapper-title-1">
            <a href="index.php"><div class="recent object">Home</div></a>
            	<div id="fleche-nav-1"></div>
    		</div>

            <div id="wrapper-title-2">
          <div class="top-rated object">Browse</div>
                <div id="fleche-nav-2"></div>
    		</div>

            <div id="wrapper-title-3">
            <a href="about.php"><div class="oldies object">Log In / Sign Up</div></a>
                <div id="fleche-nav-3"></div>
    		</div>

    		<div id="wrapper-title-4" style="float:right; color:black;">
            <div class="oldies object" style="color:black">Categories</div>
                <div id="fleche-nav-3"></div>
    		</div>
            </div>

    	</div>
    </div>


<!-- PORTFOLIO -->

	<div id="wrapper-container">

		<div class="container object">

			<div id="main-container-image" style="opacity: 1;">

					<section class="work">

						<figure class="white">
							<a href="shows.php?category=comedy">
								<img src="./source/images/comedy.jpg" alt="" width="225" height="143">
								<dl>
									<dt>Comedy</dt>
							</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/C.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">Comedy</div>
							</div>
                        </figure>

												<figure class="white">
													<a href="shows.php?category=action">
														<img src="./source/images/action.jpg" alt="" width="225" height="133">
														<dl>
															<dt>Action</dt>
														</dl>
													</a>
																				<div id="wrapper-part-info">
																					<div class="part-info-image"><img src="./source/letters/A.png" alt="" width="28" height="28"></div>
																					<div id="part-info">Action</div>
													</div>
												</figure>

												<figure class="white">
													<a href="shows.php?category=adventure">
														<img src="./source/images/adventure.jpg" alt="" width="225" height="166">
														<dl>
															<dt>Adventure</dt>
														</dl>
													</a>
																				<div id="wrapper-part-info">
																					<div class="part-info-image"><img src="<?php echo $letters[0]; ?>" alt="" width="28" height="28"></div>
																					<div id="part-info">Adventure</div>
													</div>
												</figure>

												<figure class="white">
													<a href="shows.php?category=harem">
														<img src="./source/images/harem.jpg" alt="" width="225" height="143">
														<dl>
															<dt>Harem/Ecchi</dt>
														</dl>
													</a>
																				<div id="wrapper-part-info">
																					<div class="part-info-image"><img src="./source/letters/H.png" alt="" width="28" height="28"></div>
																					<div id="part-info">Harem/Ecchi</div>
													</div>
												</figure>

												<figure class="white">
													<a href="shows.php?category=horror">
														<img src="./source/images/horror.jpg" alt="" width="225" height="166">
														<dl>
															<dt>Horror</dt>
														</dl>
													</a>
																				<div id="wrapper-part-info">
																					<div class="part-info-image"><img src="./source/letters/H.png" alt="" width="28" height="28"></div>
																					<div id="part-info">Horror</div>
													</div>
												</figure>

												<figure class="white">
													<a href="shows.php?category=mystery">
														<img src="./source/images/mystery.jpg" alt="" width="225" height="143">
														<dl>
															<dt>Mystery</dt>
														</dl>
													</a>
																				<div id="wrapper-part-info">
																					<div class="part-info-image"><img src="./source/letters/M.png" alt="" width="28" height="28"></div>
																					<div id="part-info">Mystery</div>
													</div>
												</figure>

																		<figure class="white">
																<a href="shows.php?category=seinen">
														<img src="./source/images/seinen.jpg" alt="" width="225" height="143">
														<dl>
															<dt>Seinen</dt>
														</dl>
													</a>
																				<div id="wrapper-part-info">
																					<div class="part-info-image"><img src="./source/letters/S.png" alt="" width="28" height="28"></div>
																					<div id="part-info">Seinen</div>
													</div>
												</figure>


						<figure class="white">
							<a href="shows.php?category=psychological">
								<img src="./source/images/psychological.jpg" alt="" width="225" height="143">
								<dl>
									<dt>Psychological</dt>
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/P.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">Psychological</div>
							</div>
						</figure>

						<figure class="white">
							<a href="shows.php?category=romance">
								<img src="./source/images/romance.jpg" alt="" width="225" height="143">
								<dl>
									<dt>Romance</dt>
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/R.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">Romance</div>
							</div>
						</figure>

						<figure class="white">
							<a href="shows.php?category=slice_of_life">
								<img src="./source/images/Slice of Life.jpg" alt="" width="225" height="168">
								<dl>
									<dt>Slice of Life</dt>
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/SL.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">Slice of Life</div>
							</div>
						</figure>

						<figure class="white">
							<a href="shows.php?category=military">
								<img src="./source/images/military.jpg" alt="" width="225" height="143">
								<dl>
									<dt>Military</dt>
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/M.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">Military</div>
							</div>
						</figure>

						<figure class="white">
							<a href="shows.php?category=school">
								<img src="./source/images/school.png" alt="" width="225" height="159">
								<dl>
									<dt>School</dt>
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/S.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">School</div>
							</div>
						</figure>

						<figure class="white">
							<a href="shows.php?category=supernatural">
								<img src="./source/images/supernatural.jpeg" alt="" width="225" height="153">
								<dl>
									<dt>Supernatural</dt>
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="./source/letters/S.png" alt="" width="28" height="28"></div>
                            	<div id="part-info">Supernatural</div>
							</div>




						</figure>



					</section>

				</div>

			</div>

    <div id="wrapper-oldnew">
    	<div class="oldnew">
        	<div class="wrapper-oldnew-prev">
            	<div id="oldnew-prev"></div>
        	</div>
            <div class="wrapper-oldnew-next">
            	<div id="oldnew-next"></div>
    		</div>
        </div>
	</div>



	<div id="main-container-footer">
		<div class="container-footer">

            <div id="row-1f">
            	<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Nyanpasu.tv?</span><br>Nyanpasu.tv is a free anime streaming website. Because, who wants to pay?</div>
            </div>

            <div id="row-2f">
            	<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work?</span><br>We upload a video to one of our storage servers and then link it to this main site.</div>
            </div>

            <div id="row-3f">
            	<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Upcoming features</span><br>Bookmarking, user accounts, last watched, a new theme, and many more! Beta updates will be silent, only full releases will be advertised.</div>

            </div>

		</div>
	</div>


    <div id="wrapper-copyright">
		<div class="copyright">
    		<div class="copy-text object">Copyright © 2016 Nyanpasu.tv</div>

			<div class="wrapper-navbouton">
    			<div class="google object"><a href="https://twitter.com/LoliHookDev" style="color:white; font-family:'Roboto', sans-serif; font-size:30px;"><i class="fa fa-twitter-square" aria-hidden="true" target="_blank"></i>
</a></div>
    		</div>
    	</div>
    </div>

</div>



<!-- SCRIPT -->

	<script src="./source/jquery.min.js"></script>
    <script type="text/javascript" src="./source/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="./source/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="./source/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="./source/fastclick.min.js"></script>
	<script type="text/javascript" src="./source/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="./source/jquery.animate-shadow-min.js"></script>

	<script>



$(document).ready(function() {
		$.localScroll();
		$(".cache").delay(1000).fadeOut(500);
		$("#wrapper-header").delay(1500).animate({opacity:'1',width:'100%'},500);
		$("#wrapper-navbar").delay(2000).animate({opacity:'1',height:'60px'},500);
		$("#main-container-image").delay(2500).animate({opacity:'1'},500);

	});

/*TRANSITION PAGE*/

var speed = 'slow';

$('html, body').hide();

$(document).ready(function() {
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

var body = document.body,
	timer;

window.addEventListener('scroll', function() {

	clearTimeout(timer);

	if(!body.classList.contains('disable-hover'))
		body.classList.add('disable-hover')

	timer = setTimeout(function(){
		body.classList.remove('disable-hover')
	}, 200);

}, false);

  /* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE OPEN */

var MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({left:'0'},300);
});

/* BOUTON CROSS */

$(document).on('touchstart mouseover', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#cross-menu").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#cross-menu").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE CLOSE */

var MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({'left':'-100%'},300);
});

/* BOUTON MENU ARROW-2 */

$(document).on('touchstart mouseover', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-2").stop().animate({rotate: '90deg',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-2").stop().animate({rotate: '0deg',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU ARROW-3 */

$(document).on('touchstart mouseover', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-3").stop().animate({rotate: '90deg',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-3").stop().animate({rotate: '0deg',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON NEXT */

$(document).on('touchstart mouseover', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-next").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-next").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON PREV */

$(document).on('touchstart mouseover', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-prev").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-prev").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});


/*FORMULAIRE NEWSLETTER*/

$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("/burstfly/form-burstfly-modified.asp",$("form").serialize(), function(data) {//alert(data);
	});
});

/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();
		var img13 = new Image();
		var img14 = new Image();
		var img15 = new Image();
		var img16 = new Image();
		var img17 = new Image();
		var img18 = new Image();
		var img19 = new Image();
		var img20 = new Image();

		img1.src = "img/psd-4.jpg";
		img2.src = "img/font-1.jpg";
		img3.src = "img/psd-1.jpg";
		img4.src = "img/psd-2.jpg";
		img5.src = "img/ai-1.jpg";
		img6.src = "img/theme-2.jpg";
		img7.src = "img/psd-3.jpg";
		img8.src = "img/font-2.jpg";
		img9.src = "img/font-3.jpg";
		img10.src = "img/ai-2.jpg";
		img11.src = "img/icons-1.jpg";
		img12.src = "img/ui-1.jpg";
		img13.src = "img/font-5.jpg";
		img14.src = "img/theme-2.jpg";
		img15.src = "img/psd-5.jpg";
		img16.src = "img/icons-3.jpg";
		img17.src = "img/font-4.jpg";
		img18.src = "img/theme-3.jpg";
		img19.src = "img/font-6.jpg";
		img20.src = "img/theme-4.jpg";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>






</body></html>
