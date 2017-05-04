<?php
require "connect.php";
$video_name = $_GET['show'];

$getlink = $conn->prepare("SELECT * FROM anime WHERE title=:vidname");
$getlink->bindParam(":vidname", $video_name);
$getlink->execute();

while ($res1 = $getlink->fetch(PDO::FETCH_ASSOC)){
  $path = $res1['path'];
  $title = $res1['title'];
  $series = $_GET['series'];
  $category = $_GET['category'];
}
?>
<!DOCTYPE html>
<html style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require "global.php"; ?>

<title>Nyanpasu Anime Streaming</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="./source/fonts.css" rel="stylesheet" type="text/css">
    <link href="./source/style.css" rel="stylesheet" type="text/css">
    <link href="./source/player.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


</head>

<body>

<!-- CACHE -->
<div class="cache" style="display: none;"></div>

<!-- HEADER -->

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

    		<div id="wrapper-title-4" style="float:right; color:black;">
            <div class="oldies object" style="color:black">Now Playing: <?php echo $title; ?></div>
                <div id="fleche-nav-3"></div>
    		</div>

            </div>

    	</div>
    </div>

<div id="wrapper-navbar" style="opacity: 1; height: 60px; background-color:whitesmoke; border:none;">
		<div class="navbar object">
    		<div id="wrapper-sorting">

    		<div id="wrapper-title-1" style="text-align:center; color:black;">
            <?php echo '<a href="shows.php?category= '. $category . '&series=' . $series .'" style="color:grey;text-align:center;">'; ?> <div class="oldies object" style="color:black"><return style="margin-left:auto;margin-right:auto;text-align:center;">Return to the Series<a>
            </div>
                <div id="fleche-nav-3"></div>
    		</div>

            </div>

    	</div>
    </div>


<!-- PORTFOLIO -->

<article>

	<video width="400" time="00.0">
  		<source src="<?php echo $path; ?>"  />
	</video>

</article>



		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>








<!-- SCRIPT -->

	<script src="./source/jquery.min.js"></script>
    <script type="text/javascript" src="./source/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="./source/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="./source/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="./source/fastclick.min.js"></script>
	<script type="text/javascript" src="./source/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="./source/jquery.animate-shadow-min.js"></script>

<script>

// build volume screen
// style volume bar
// maybe don't need double click

(function(win, doc) {

	var videos = [].slice.apply( doc.querySelectorAll("video") ),
		toggleFullScreen = function(el) {
			if (!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement ) {
    			if (el.requestFullscreen) {
					el.requestFullscreen();
				} else if (el.msRequestFullscreen) {
					el.msRequestFullscreen();
				} else if (el.mozRequestFullScreen) {
					el.mozRequestFullScreen();
				} else if (el.webkitRequestFullscreen) {
					el.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
				}
			} else {
				if (doc.exitFullscreen) {
					doc.exitFullscreen();
				} else if (doc.msExitFullscreen) {
					doc.msExitFullscreen();
				} else if (doc.mozCancelFullScreen) {
					doc.mozCancelFullScreen();
				} else if (doc.webkitExitFullscreen) {
					doc.webkitExitFullscreen();
				}
			}
		},
		timeCalc = function(seconds) {
			seconds = Math.floor(seconds);
			return (seconds < 10) ? ("0:0" + seconds) : (seconds < 60) ? ('0:' + seconds) : (seconds == 60) ? "1:00" : (( Math.floor(seconds/60)) + ":" + (seconds%60 < 10 ? ("0" + seconds%60) : seconds ));
		},
		timerWatch = function(video) {
			if ( !video.paused ) {
				var percentage = (video.currentTime / video.duration) * 100;

				video.parentNode.querySelector(".track-bar").style.width = percentage + "%";
				video.parentNode.querySelector(".counter").innerHTML =
					timeCalc(video.currentTime) + "/" + timeCalc(video.duration);

				window.requestAnimationFrame(function() {
					timerWatch(video);
				});
			}
		},
		playToggle = function(video) {
			if ( video.paused ) {
				video.classList.add("playing");
				video.play();
				window.requestAnimationFrame(function() {
					timerWatch(video);
				});

				if ( video.preload !== "auto" ) {
					video.preload = "auto";
				}

				video.focus();

			} else {
				video.classList.remove("playing");
				video.pause();

				//video.blur();
			}
		};

	videos.forEach(function(video) {

		if ( video.preload === "none" || video.getAttribute("preload") === null ) {
			video.preload = "metadata";
		}

		var wrapper = document.createElement("div"),
			video_old = video,
			video = video_old.cloneNode(true),

			// create controls
			controlsWrapper = document.createElement("div"),
			playButton = document.createElement("div"),
			track = document.createElement("div"),
			trackBar = document.createElement("div"),
			trackLoadedBar = document.createElement("div"),
			timerFlag = document.createElement("div"),
			counter = document.createElement("span"),
			muteButton = document.createElement("span"),
			volumeContainer = document.createElement("span"),
			volumeButton = document.createElement("input"),
			fullscreenButton = document.createElement("span"),
			controlsBottomTray = document.createElement("div"),
			skipToTime = ( video.getAttribute('time') || video.getAttribute('date-time') );

		wrapper.classList.add("responsive-video");
		wrapper.appendChild(video);
		video_old.parentNode.replaceChild(wrapper, video_old);
		delete video_old;

		if ( video.autoplay ) {
			playToggle(video);
		}

		document.addEventListener("keydown", function(evt) {console.log( evt );
			if ( document.activeElement === video && evt.which === 32 ) {
				evt.preventDefault();
				playToggle(video);
			}
		})

		video.setAttribute("tabindex", 0);

		video.addEventListener("loadeddata", function(evt) {
			var ratio = (this.clientHeight / this.clientWidth);
			wrapper.classList.add("loaded");
			wrapper.style.paddingTop = (ratio * 100) + "%";

			counter.innerHTML = timeCalc(0) + "/" + timeCalc(video.duration);

			if ( skipToTime ) {
				video.currentTime = skipToTime;
				trackBar.style.width = (skipToTime/video.duration)*100 + "%";
			}
		});

		video.addEventListener("progress", function(evt) {

			if (evt.target.duration) {
				var loadedProgress;
					duration = evt.target.duration,
					buffered = evt.target.buffered;

				if ( duration.length === 0 ) {
					loadedProgress = 0;
				} else if ( buffered.length > 0 ) {
					loadedProgress = ((buffered.end(buffered.length - 1) > 0 ? buffered.end(buffered.length - 1) : 0) / duration) * 100;
				}

				trackLoadedBar.style.width = loadedProgress + "%";
			}
		});

		// add classes to controls
		controlsWrapper.classList.add("controls-wrapper");
		playButton.classList.add("play-button");
		track.classList.add("track");
		trackBar.classList.add("track-bar");
		trackLoadedBar.classList.add("track-loader-bar");
		timerFlag.classList.add("timer-flag");
		counter.classList.add("counter");
		volumeContainer.classList.add("volume-button");
		muteButton.classList.add("mute-button");
		fullscreenButton.classList.add("fullscreen-button");
		controlsBottomTray.classList.add("controls-bottom-tray");

		volumeButton.type = "range";

		track.appendChild( trackLoadedBar );
		track.appendChild( trackBar );

		timerFlag.innerHTML = "Loading...";
		track.appendChild( timerFlag );
		volumeContainer.appendChild(volumeButton);

		//playButton.addEventListener("click", function() { playToggle(video); });

		video.addEventListener("ended", function(evt) {
			trackBar.style.width = "100%";
			counter.innerHTML = parseFloat(video.duration);
		});

		track.addEventListener("click", function(evt) {
			var percentage = (evt.offsetX / track.clientWidth),
				seek = percentage * video.duration;

			trackBar.style.width = 100 * percentage + "%";
			counter.innerHTML = Math.floor(seek);
			video.currentTime = seek;
		});

		track.addEventListener("mousemove", function(evt) {
			var percentage = (evt.offsetX / track.clientWidth),
				seek = percentage * video.duration;
			timerFlag.innerHTML = parseFloat(seek).toFixed(2) + "s";
			timerFlag.style.left = evt.offsetX + "px";
		});

		fullscreenButton.addEventListener("click", function(evt) {
			evt.stopPropagation();
			toggleFullScreen(video);
		});

		muteButton.addEventListener("click", function() {
			console.log( "toggle volume screen");
		});

		muteButton.addEventListener("dblclick", function() {
			video.muted = video.muted ? false : true
		});

		muteButton.addEventListener("mouseover", function() {
			volumeContainer.classList.add("active");
		});

		volumeContainer.addEventListener("mouseout", function() {
			volumeContainer.classList.remove("active");
		});

		volumeButton.addEventListener("input", function() {
			video.volume = this.value / 100;
		});

		controlsWrapper.addEventListener("click", function(evt) {
			playToggle(video);
		});

		controlsBottomTray.addEventListener("click", function(evt) { evt.stopPropagation(); });

		// add controls
		fullscreenButton.appendChild( document.createElement('span') );

		controlsBottomTray.appendChild(track);
		controlsBottomTray.appendChild(counter);
		controlsBottomTray.appendChild(muteButton);
		controlsBottomTray.appendChild(volumeContainer);

		controlsWrapper.appendChild(playButton);
		controlsWrapper.appendChild(controlsBottomTray);
		controlsWrapper.appendChild(fullscreenButton);

		wrapper.appendChild( controlsWrapper );
	});
})(this, this.document);














$(document).on("ready", mainFunction.init);

(function ($) {
    var timeout;
    $(document).on('mousemove', function (event) {
        if (timeout !== undefined) {
            window.clearTimeout(timeout);
        }
        timeout = window.setTimeout(function () {
            $(event.target).trigger('mousemoveend');
        }, 100);
    });
}(jQuery));



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
