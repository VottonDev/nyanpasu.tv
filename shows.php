<!DOCTYPE html>
<html lang="en" style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
			<form>
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
          <a href="browse.php"><div class="recent object">Browse</div></a>
                <div id="fleche-nav-2"></div>
    		</div>

            <div id="wrapper-title-3">
            <a href="about.php"><div class="oldies object">Log In / Sign Up</div></a>
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

<?php
						require "connect.php";
					      $category3 = $_GET['category'];
                          $category2 = str_replace("%20", "", $category3);
                          $category = str_replace(" ", '', $category2);
					      $series = $_GET['series'];

					      $getvars = $conn->prepare("SELECT * FROM series WHERE category=:category");
					      $getvars->bindParam(":category", $category);
					      $getvars->execute();
						  if(!isset($_GET['series'])) {
					      while ($disp = $getvars->fetch(PDO::FETCH_ASSOC)){
					      $thumb = $disp['thumb'];
					      $name = $disp['name'];
					      $desc = $disp['description'];

?>

								<figure class="white">
									<a href="<?php echo 'shows.php?category=' . $category . '&series=' . $disp['name']; ?>">
										<img src="<?php echo $thumb; ?>" alt=""></img>
										<dl>
											<dt> <?php echo $name; ?> </dt>
											<dd> <?php echo $desc; ?> </dd>
										</dl>
									</a>
									<div id="wrapper-part-info">
										<div class="part-info-image"><img src="./source/letters/S.png" alt="" width="28" height="28"></img></div>
										<div id="part-info"><?php echo $name; ?></div>
									</div>
								</figure>
							<?php } } else {

					      $getvars2 = $conn->prepare("SELECT * FROM anime WHERE series=:series");
					      $getvars2->bindParam(":series", $series);
					      $getvars2->execute();

					      while ($disp2 = $getvars2->fetch(PDO::FETCH_ASSOC)) {
					      	$getseries = $_GET['series'];
					      	$getcategory = $_GET['category'];
?>
								<figure class="white">
									<a href="<?php echo 'play.php?category=' . $getcategory . '&series=' . $getseries . '&show=' . $disp2['title']; ?>">
										<img src="<?php echo $disp2['thumb_url']; ?>" alt=""></img>
										<dl>
											<dt> <?php echo $disp2['title']; ?> </dt>
											<dd> <?php echo $disp2['description']; ?> </dd>
										</dl>
									</a>
									<div id="wrapper-part-info">
										<div class="part-info-image"><img src="./source/letters/S.png" alt="" width="28" height="28"></img></div>
										<div id="part-info"><?php echo $disp2['title']; ?></div>
									</div>
								</figure>
<?php
} }
							?>


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
            	<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">This is in beta</span><br>We wanted to push our services out as fast as possible, so we have decided to open the beta to all of you guys!</div>
            </div>

            <div id="row-4f">
            	<div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Upcoming features</span><br>Bookmarking, user accounts, last watched, a new theme, and many more! Beta updates will be silent, only full releases will be advertised.</div>

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

const speed = 'slow';

$('html, body').hide();

$(document).ready(function() {
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            const url = $(this).attr('href');
            if (url.indexOf('#') === 0 || url.indexOf('javascript:') === 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

let body = document.body,
    timer;

window.addEventListener('scroll', function() {

	clearTimeout(timer);

	if(!body.classList.contains('disable-hover'))
		body.classList.add('disable-hover')

	timer = setTimeout(function(){
		body.classList.remove('disable-hover')
	}, 200);

}, false);

  /* BUTTON MENU */

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

const MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({left:'0'},300);
});

/* BUTTON CROSS */

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

const MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({'left':'-100%'},300);
});

/* BUTTON MENU ARROW-2 */

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

/* BUTTON MENU ARROW-3 */

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

/* BUTTON MENU */

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

/* BUTTON NEXT */

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

/* BUTTON PREV */

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


/*FORMULATE NEWSLETTER*/

$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("/burstfly/form-burstfly-modified.asp",$("form").serialize(), function(data) {//alert(data);
	});
});

/* PRELOADER */

function preloader() {
	if (document.images) {
		const img1 = new Image();
		const img2 = new Image();
		const img3 = new Image();
		const img4 = new Image();
		const img5 = new Image();
		const img6 = new Image();
		const img7 = new Image();
		const img8 = new Image();
		const img9 = new Image();
		const img10 = new Image();
		const img11 = new Image();
		const img12 = new Image();
		const img13 = new Image();
		const img14 = new Image();
		const img15 = new Image();
		const img16 = new Image();
		const img17 = new Image();
		const img18 = new Image();
		const img19 = new Image();
		const img20 = new Image();

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
	const oldonload = window.onload;
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
