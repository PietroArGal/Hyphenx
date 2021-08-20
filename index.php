<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Hyphenx</title>

	<style id="rocket-critical-css">
		body {
			cursor: url(animate_cursor2.cur);
		}

		#cookie-notice {
			display: block;
			visibility: hidden;
			position: fixed;
			min-width: 100%;
			height: auto;
			z-index: 100000;
			font-size: 13px;
			line-height: 20px;
			left: 0;
			text-align: center
		}

		.cn-bottom {
			bottom: 0
		}

		.cookie-notice-container {
			padding: 10px;
			text-align: center;
			width: 100%
		}

		.cn-button.wp-default {
			box-shadow: none;
			text-decoration: none
		}

		#cookie-notice .cn-button {
			margin-left: 10px
		}

		.cn-button.wp-default {
			font-family: sans-serif;
			line-height: 18px;
			padding: 2px 12px;
			background: linear-gradient(to bottom, #FEFEFE, #F4F4F4) repeat scroll 0 0 #F3F3F3;
			border-color: #BBB;
			color: #333;
			text-shadow: 0 1px 0 #FFF;
			box-sizing: border-box;
			border-radius: 3px 3px 3px 3px;
			border-style: solid;
			border-width: 1px;
			display: inline-block;
			font-size: 12px;
			font-style: normal;
			text-decoration: none;
			white-space: nowrap;
			outline: none
		}

		* {
			padding: 0;
			margin: 0 auto;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		html {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		body {
			font-family: proxima-nova, sans-serif;
			font-size: 14px;
			color: #212121;
			background-color: #F0F0F0;
			animation: bugfix infinite 1s;
			position: relative;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
		}

		a {
			outline: none;
			text-decoration: none;
			color: #212121
		}

		#wrapper {
			width: 100%;
			height: auto;
			overflow: hidden;
			position: relative
		}

		.btn a {
			font-size: 14px;
			line-height: 28px;
			font-weight: 700;
			display: inline-block;
			background-color: #06F7E4;
			border-radius: 30px;
			padding: 9px 28px 8px 28px;
			border-bottom: 3px solid #0BC6B7;
			-webkit-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13);
			-moz-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13);
			box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13)
		}

		.contact-btn a {
			width: 45px;
			height: 45px;
			border-radius: 50%;
			display: block;
			position: relative;
			background-color: #06F7E4;
			border-bottom: 3px solid #0BC6B7;
			-webkit-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13);
			-moz-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13);
			box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13)
		}

		.contact-btn a::before {
			content: '';
			display: block;
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			margin: 0 auto;
			position: relative;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			transform: translateY(-50%)
		}

		.contact-btn.phone a::before {
			width: 13px;
			height: 20px;
			background-image: url(wp-content/themes/Basecamp/images/contact-icon-phone-black.png)
		}

		.contact-btn.location a::before {
			width: 16px;
			height: 24px;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/contact-icon-location-black.png)
		}

		#parallax-area {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0
		}

		.site-header {
			width: 100%;
			height: auto;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 10000;
			padding: 52px 60px 0
		}

		.site-logo {
			width: 20px;
			height: 31px;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/site-logo-black.png);
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			float: left
		}

		.site-logo a {
			width: 100%;
			height: 100%;
			display: block
		}

		.mobile-nav-btn {
			width: 22px;
			height: 15px;
			position: relative;
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			-o-transform: rotate(0deg);
			transform: rotate(0deg);
			float: right
		}

		.mobile-nav-btn span {
			display: block;
			position: absolute;
			height: 2px;
			width: 100%;
			background: #000;
			border-radius: 0;
			opacity: 1;
			left: 0;
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			-o-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		.mobile-nav-btn span:nth-child(1) {
			top: 0;
			-webkit-transform-origin: left center;
			-moz-transform-origin: left center;
			-o-transform-origin: left center;
			transform-origin: left center
		}

		.mobile-nav-btn span:nth-child(2) {
			top: 6px;
			-webkit-transform-origin: left center;
			-moz-transform-origin: left center;
			-o-transform-origin: left center;
			transform-origin: left center
		}

		.mobile-nav-btn span:nth-child(3) {
			top: 12px;
			-webkit-transform-origin: left center;
			-moz-transform-origin: left center;
			-o-transform-origin: left center;
			transform-origin: left center
		}

		.navigation-wrap {
			position: fixed;
			top: 0;
			height: 100%;
			z-index: 9999;
			right: -100%
		}

		.navigation-wrap::before {
			content: '';
			position: absolute;
			top: -637px;
			left: -431px;
			width: 1259px;
			height: 1600px;
			background-color: #06F7E4;
			transform: rotate(46deg);
			visibility: hidden;
			opacity: 0;
			-webkit-box-shadow: 0 10px 30px 0 rgba(0, 0, 0, .11);
			-moz-box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11)
		}

		.navigation-wrap .nav-container {
			width: 448px;
			height: 100%;
			overflow-y: auto;
			background-color: #06F7E4;
			padding-left: 35px;
			padding-right: 20px;
			position: relative
		}

		.navigation-wrap .nav-container .site-navigation {
			padding-top: 138px;
			margin-bottom: 48px
		}

		.navigation-wrap .nav-container .site-navigation li {
			list-style: none;
			font-size: 40px;
			line-height: 50px;
			font-weight: 800;
			color: #212121;
			letter-spacing: -.025em;
			text-shadow: 0 30px 20px rgba(0, 0, 0, .16);
			margin-bottom: 3px
		}

		.navigation-wrap .nav-container .site-navigation li a {
			display: inline-block;
			color: #212121
		}

		.navigation-wrap .nav-container .site-navigation li.current-menu-item a {
			color: #fff
		}

		.navigation-wrap .nav-container .btns-wrap {
			width: 100%;
			height: auto
		}

		.navigation-wrap .nav-container .btns-wrap::after {
			content: '';
			display: table;
			clear: both
		}

		.navigation-wrap .nav-container .btns-wrap .btn {
			float: left;
			margin-right: 15px
		}

		.navigation-wrap .nav-container .btns-wrap .btn a {
			background-color: #fff;
			border-bottom: 3px solid #D2D2D2
		}

		.navigation-wrap .nav-container .btns-wrap .contact-btns {
			float: left
		}

		.navigation-wrap .nav-container .btns-wrap .contact-btns .contact-btn {
			float: left;
			margin-right: 15px
		}

		.navigation-wrap .nav-container .btns-wrap .contact-btns .contact-btn:last-child {
			margin-right: auto
		}

		.navigation-wrap .nav-container .btns-wrap .contact-btns .contact-btn a {
			background-color: #fff;
			border-bottom: 3px solid #D2D2D2
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info {
			width: 100%;
			height: auto;
			float: left;
			padding-top: 40px;
			padding-bottom: 40px
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info ul li {
			list-style: none;
			font-size: 14px;
			line-height: 22px;
			font-weight: 700
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info ul li a {
			display: inline-block;
			font-weight: 300
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info ul li.address {
			font-weight: 300;
			margin-bottom: 22px
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info .social-links {
			width: 100%;
			overflow: hidden;
			text-align: left;
			font-size: 0;
			padding-top: 30px
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info .social-links .social-link {
			width: 24px;
			height: 24px;
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			display: inline-block;
			vertical-align: top;
			margin-right: 10px
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info .social-links .social-link:last-child {
			margin-right: 0
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info .social-links .social-link a {
			width: 100%;
			height: 100%;
			display: block
		}

		.nav-overlay {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: transparent;
			display: none;
			z-index: 9998
		}

		.featured-image {
			width: 100%;
			position: relative;
			height: auto
		}

		.home .featured-image {
			overflow: hidden
		}

		.featured-image .shapes-bg {
			position: absolute;
			left: 50%;
			margin-left: -960px;
			top: 50%;
			margin-top: -540px;
			width: 1920px;
			height: 1080px;
			z-index: 10
		}

		.featured-image .shapes-bg .shapes-wrap {
			width: 100%;
			height: 100%;
			visibility: visible;
			opacity: 1
		}

		.featured-image .shapes-bg .shape {
			-webkit-transform: rotate(-46deg);
			-moz-transform: rotate(-46deg);
			transform: rotate(-46deg)
		}

		.featured-image .shapes-bg .shape-item {
			-webkit-transform: scale(.7);
			-moz-transform: scale(.7);
			transform: scale(.7);
			visibility: hidden;
			opacity: 0
		}

		.featured-image .shapes-bg .shapes-wrap.right {
			position: absolute;
			right: 0;
			bottom: 0;
			width: 950px;
			height: 650px
		}

		.featured-image .shapes-bg .left-top {
			width: 1181px;
			height: 755px;
			margin-top: -75px;
			margin-left: -198px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/left-top-shape-img.png);
			-webkit-transform-origin: center;
			-moz-transform-origin: center;
			transform-origin: center
		}

		.featured-image .shapes-bg .right-bottom {
			width: 1054px;
			height: 563px;
			margin-top: 65px;
			margin-left: -65px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/right-bottom-shape-img.png);
			-webkit-transform-origin: center;
			-moz-transform-origin: center;
			transform-origin: center
		}

		.featured-image .shapes-bg .right-middle {
			width: 586px;
			height: 586px;
			margin-left: 555px;
			margin-bottom: 60px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/right-middle-shape-img.png);
			-webkit-transform-origin: center;
			-moz-transform-origin: center;
			transform-origin: center
		}

		.segmenter {
			width: 100vw;
			height: 100vh;
			position: relative;
			overflow: hidden
		}

		.segmenter {
			background-size: cover;
			background-repeat: no-repeat;
			background-position: 50% 50%
		}

		.scrolldown-btn-wrap {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 47px;
			z-index: 1000;
			text-align: center;
			visibility: visible;
			opacity: 1
		}

		.scrolldown-btn-wrap .scrolldown-btn {
			display: inline-block;
			padding-bottom: 20px
		}

		.scrolldown-btn-wrap .scrolldown-btn span {
			font-size: 12px;
			line-height: 18px;
			font-weight: 700;
			letter-spacing: -.025em;
			display: block;
			-webkit-transform: rotate(270deg);
			-moz-transform: rotate(270deg);
			transform: rotate(270deg)
		}

		.scrolldown-btn-wrap .scrolldown-btn .icon {
			width: 9px;
			height: 12px;
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/scrolldown-arrow-black.png);
			-webkit-animation: scrollDown 1.25s ease-in-out infinite;
			-moz-animation: scrollDown 1.25s ease-in-out infinite;
			animation: scrollDown 1.25s ease-in-out infinite
		}

		@keyframes scrollDown {
			0% {
				-webkit-transform: translate(0, 8px);
				-moz-transform: translate(0, 8px);
				transform: translate(0, 8px);
				opacity: 0
			}

			50% {
				opacity: 1
			}

			100% {
				-webkit-transform: translate(0, 20px);
				-moz-transform: translate(0, 20px);
				transform: translate(0, 20px);
				opacity: 0
			}
		}

		.home .featured-image .featured-logo {
			position: absolute;
			left: 0;
			right: 0;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			transform: translateY(-50%)
		}

		.home .featured-image .featured-logo .logo-wrap {
			position: relative;
			visibility: hidden;
			opacity: 0;
			-webkit-transform: scale(.8);
			-moz-transform: scale(.8);
			transform: scale(.8)
		}

		.home .featured-image .featured-logo .logo {
			width: 338px;
			height: 262px;
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			background-image: url(https://bscmp.nl/wp-content/themes/Basecamp/images/featured-site-logo.png)
		}

		.shapes-wrap {
			transform: translate3d(0, 0, 0);
			-webkit-transform: translate3d(0, 0, 0);
			transform-style: preserve-3d;
			-webkit-transform-style: preserve-3d;
			backface-visibility: hidden;
			-webkit-backface-visibility: hidden;
			visibility: hidden;
			opacity: 0
		}

		.site-main .intro-section .shapes-bg .shape-green {
			width: 745px;
			height: 316px;
			background-color: #06F7E4;
			position: absolute;
			top: 160px;
			left: -110px;
			-webkit-box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			-moz-box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			-webkit-transform: rotate(46deg);
			-moz-transform: rotate(46deg);
			transform: rotate(46deg)
		}

		.site-main .intro-section .shapes-bg .shape-white {
			width: 622px;
			height: 1240px;
			background-color: #F0F0F0;
			position: absolute;
			top: -514px;
			left: -344px;
			-webkit-box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			-moz-box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			box-shadow: 0 20px 30px 0 rgba(0, 0, 0, .11);
			-webkit-transform: rotate(46deg);
			-moz-transform: rotate(46deg);
			transform: rotate(46deg)
		}

		.navigation-wrap .nav-container .btns-wrap .contact-info ul li.address span {
			display: block
		}

		@media only screen and (max-width:1160px) {
			.navigation-wrap::before {
				width: 1059px;
				height: 1400px;
				top: -437px
			}
		}

		@media only screen and (max-width:1024px) {
			.navigation-wrap::before {
				width: 859px;
				height: 1200px;
				top: -237px;
				left: -231px
			}

			.site-main .intro-section .shapes-bg .shape-green {
				width: 700px;
				height: 290px
			}
		}

		@media only screen and (max-width:860px) {
			.scrolldown-btn-wrap {
				display: none
			}
		}

		@media only screen and (max-width:680px) {
			.site-logo {
				width: 28px;
				height: 43px
			}

			.site-header {
				padding: 17px 30px
			}

			.mobile-nav-btn {
				margin-top: 9px
			}

			.navigation-wrap::before {
				width: 1200px;
				height: 1200px;
				left: -266px;
				top: -94px
			}
		}

		@media only screen and (max-width:580px) {
			.navigation-wrap .nav-container {
				width: 375px
			}
		}

		@media only screen and (max-width:500px) {
			.navigation-wrap::before {
				position: fixed;
				left: -128px
			}

			.navigation-wrap .nav-container {
				background-color: transparent
			}

			.home .featured-image .featured-logo .logo {
				width: 169px;
				height: 131px
			}

			.scrolldown-btn-wrap {
				bottom: 100px
			}
		}

		@media only screen and (max-width:400px) {
			.navigation-wrap {
				width: 100%
			}

			.navigation-wrap .nav-container {
				width: 100%
			}

			.navigation-wrap .nav-container .btns-wrap .btn {
				margin-bottom: 15px
			}
		}

		@media only screen and (max-width:350px) {
			.navigation-wrap .nav-container .site-navigation li {
				font-size: 30px
			}
		}

		@media only screen and (max-width:500px) and (max-height:820px) {
			.featured-image .shapes-bg .left-top {
				margin-top: -40px;
				margin-left: -70px
			}

			.featured-image .shapes-bg .right-bottom {
				margin-left: -220px
			}
		}
	</style>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Hyphenx its a tech solutions company" />

	<link rel="canonical" href="index.php" />

	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Hyphenx" />
	<meta property="og:description" content="Hyphenx its a tech solutions company" />
	<meta property="og:url" content="https://hyphenx.co" />
	<meta property="og:site_name" content="Hyphenx Company" />

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Hyphenx its a tech solutions company" />
	<meta name="twitter:title" content="Hyphenx" />

	<script type='application/ld+json'>
		{
			"@context": "https:\/\/schema.org",
			"@type": "WebSite",
			"@id": "#website",
			"url": "https:\/\/bscmp.nl\/",
			"name": "Basecamp Business Creatives",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https:\/\/bscmp.nl\/?s={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>

	<link rel='dns-prefetch' href='http://maps.googleapis.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />

	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/bscmp.nl\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"
			}
		};
		! function (a, b, c) {
			function d(a, b) {
				var c = String.fromCharCode;
				l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
				var d = k.toDataURL();
				l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
				var e = k.toDataURL();
				return d === e
			}

			function e(a) {
				var b;
				if (!l || !l.fillText) return !1;
				switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
					case "flag":
						return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356,
							57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128,
							56447
						], [55356, 57332, 8203, 56128, 56423, 8203, 56128,
							56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
						]), !b);
					case "emoji":
						return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
				}
				return !1
			}

			function f(a) {
				var c = b.createElement("script");
				c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
			}
			var g, h, i, j, k = b.createElement("canvas"),
				l = k.getContext && k.getContext("2d");
			for (j = Array("flag", "emoji"), c.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c
				.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c
					.supports[j[i]]);
			c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c
				.readyCallback = function () {
					c.DOMReady = !0
				}, c.supports.everything || (h = function () {
					c.readyCallback()
				}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !
					1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
					"complete" === b.readyState && c.readyCallback()
				})), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g
					.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>


	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important
		}
	</style>


	<link rel='preload' id='cookie-notice-front-css'
		href='wp-content/plugins/cookie-notice/css/front.min5010.css?ver=4.9.8' as="style"
		onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
	<link rel='preload' id='BCAMP-fonts-css'
		href='https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'
		as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />

	<link data-minify="1" rel='preload' id='BCAMP-style-css'
		href='wp-content/cache/min/1/wp-content/themes/Basecamp/style-42fc9faa1ab50c49bb8070b48f79ebb7.css' as="style"
		onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
	<link data-minify="1" rel='preload' id='BCAMP-responsive-css'
		href='wp-content/cache/min/1/wp-content/themes/Basecamp/css/responsive-2ea9a3d12ee455fd81739708b62ea4b4.css'
		as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />

	<style id='rocket-lazyload-inline-css' type='text/css'>
		.rll-youtube-player {
			position: relative;
			padding-bottom: 56.23%;
			height: 0;
			overflow: hidden;
			max-width: 100%;
			background: #000;
			margin: 5px
		}

		.rll-youtube-player iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 100;
			background: 0 0
		}

		.rll-youtube-player img {
			bottom: 0;
			display: block;
			left: 0;
			margin: auto;
			max-width: 100%;
			width: 100%;
			position: absolute;
			right: 0;
			top: 0;
			border: none;
			height: auto;
			cursor: pointer;
			-webkit-transition: .4s all;
			-moz-transition: .4s all;
			transition: .4s all
		}

		.rll-youtube-player img:hover {
			filter: brightness(75%)
		}

		.rll-youtube-player .play {
			height: 72px;
			width: 72px;
			left: 50%;
			top: 50%;
			margin-left: -36px;
			margin-top: -36px;
			position: absolute;
			background: url(wp-content/plugins/wp-rocket/inc/front/img/youtube.png) no-repeat;
			cursor: pointer
		}
	</style>

	<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>

	<script type='text/javascript'>
		/* <![CDATA[ */
		var cnArgs = {
			"ajaxurl": "https:\/\/bscmp.nl\/wp-admin\/admin-ajax.php",
			"hideEffect": "fade",
			"onScroll": "no",
			"onScrollOffset": "100",
			"cookieName": "cookie_notice_accepted",
			"cookieValue": "true",
			"cookieTime": "7862400",
			"cookiePath": "\/",
			"cookieDomain": "",
			"redirection": "",
			"cache": "1",
			"refuse": "no",
			"revoke_cookies": "0",
			"revoke_cookies_opt": "automatic",
			"secure": "1"
		}; /* ]]> */
	</script>

	<script type='text/javascript' src='wp-content/plugins/cookie-notice/js/front.minfe9e.js?ver=1.2.44'></script>

	<link rel='https://api.w.org/' href='wp-json/index.php' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />

	<meta name="generator" content="WordPress 4.9.8" />

	<link rel='shortlink' href='index.php' />
	<link rel="icon" href="wp-content/uploads/2018/10/cropped-B-32x32.jpg" sizes="32x32" />
	<link rel="icon" href="wp-content/uploads/2018/10/cropped-B-192x192.jpg" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2018/10/cropped-B-180x180.jpg" />

	<meta name="msapplication-TileImage" content="https://hyphenx.co/wp-content/uploads/2018/10/cropped-B-270x270.jpg" />

	<script>
		/*! loadCSS rel=preload polyfill. [c]2017 Inc. MIT License */
		(function (w) {
			"use strict";
			if (!w.loadCSS) {
				w.loadCSS = function () {}
			}
			var rp = loadCSS.relpreload = {};
			rp.support = (function () {
				var ret;
				try {
					ret = w.document.createElement("link").relList.supports("preload")
				} catch (e) {
					ret = !1
				}
				return function () {
					return ret
				}
			})();
			rp.bindMediaToggle = function (link) {
				var finalMedia = link.media || "all";

				function enableStylesheet() {
					link.media = finalMedia
				}
				if (link.addEventListener) {
					link.addEventListener("load", enableStylesheet)
				} else if (link.attachEvent) {
					link.attachEvent("onload", enableStylesheet)
				}
				setTimeout(function () {
					link.rel = "stylesheet";
					link.media = "only x"
				});
				setTimeout(enableStylesheet, 3000)
			};
			rp.poly = function () {
				if (rp.support()) {
					return
				}
				var links = w.document.getElementsByTagName("link");
				for (var i = 0; i < links.length; i++) {
					var link = links[i];
					if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute(
							"data-loadcss")) {
						link.setAttribute("data-loadcss", !0);
						rp.bindMediaToggle(link)
					}
				}
			};
			if (!rp.support()) {
				rp.poly();
				var run = w.setInterval(rp.poly, 500);
				if (w.addEventListener) {
					w.addEventListener("load", function () {
						rp.poly();
						w.clearInterval(run)
					})
				} else if (w.attachEvent) {
					w.attachEvent("onload", function () {
						rp.poly();
						w.clearInterval(run)
					})
				}
			}
			if (typeof exports !== "undefined") {
				exports.loadCSS = loadCSS
			} else {
				w.loadCSS = loadCSS
			}
		}(typeof global !== "undefined" ? global : this))
	</script>

</head>

<body class="home page-template-default page page-id-8 cookies-not-set">

	<div id="wrapper">
		<div id="parallax-area"></div>
		<header class="site-header">
			<img src="wp-content/themes/Basecamp/images/bscmp.png">
			<div class="mobile-nav-btn"> <span></span> <span></span> <span></span></div>
		</header>

		<div class="navigation-wrap">
			<div class="nav-container">
				<ul id="menu-primary-menu" class="site-navigation">
					
					<li id="menu-item-283"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-283">
						<a href="index.php">Inicio</a></li>

						<li id="menu-item-287"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a
							href="ons-werk/index.html">Servicios</a></li>

					<li id="menu-item-750"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750"><a
							href="over-basecamp/index.html">Quienes somos</a></li>

					<li id="menu-item-841"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-841"><a
							href="specialiteiten/index.html">Cursos gratuitos</a></li>	

					<li id="menu-item-288"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a
							href="vacatures/index.html">Trabaja con nosotros</a></li>

<!--				<li id="menu-item-285"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a
							href="contact/index.html">Contacto</a></li> 	-->

				</ul>


				<div class="btns-wrap">
					<div class="btn"> <a href="contact.html">Contáctenos</a></div>

					<div class="contact-btns">
						<div class="contact-btn phone"> <a href=""></a></div>
						<div class="contact-btn location">
							<a href="https://www.google.com/maps/dir/My+Location/1300+CA-82,+San+Mateo,+CA+94402,+EE.+UU./@37.5547582,-122.3194827,17z/data=!3m1!4b1!4m5!3m4!1s0x808f9e5dfa7a35cd:0x5183fa23ab3668eb!8m2!3d37.5547582!4d-122.317294" target="_blank"></a>
						</div>
					</div>

					<div class="contact-info">
						<ul>
							<li class="address">Hyphenx Company <span>1300 King's Highway - 6th Suite /
								San Mateo, CA 94402, Usa</span></li>
							<li>Teléfono: <a href="tel:+31 (0)33 422 00 66">+31 (0)33 422 00 66</a></li>
							<li>Email: <a href="mailto:hello@hyphenx.co">hello@hyphenx.co</a></li>
						</ul>

						<div class="social-links">
							<div class="social-link"
								style="background-image: url(wp-content/themes/Basecamp/images/facebook-icon-black.png);">
								<a href="https://www.facebook.com/hyphenx/"></a></div>
							<div class="social-link"
								style="background-image: url(wp-content/themes/Basecamp/images/instagram-icon-black.png);">
								<a href="https://www.instagram.com/hyphenx"></a></div>
							<div class="social-link"
								style="background-image: url(wp-content/themes/Basecamp/images/linkedin-icon-black.png);">
								<a href="https://www.linkedin.com/company/hyphenx"></a></div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
		<div class="nav-overlay"></div>
		<div class="featured-image">
			<div class="shapes-bg" data-start="transform:translateY(0px);"
				data-top-bottom="transform:translateY(200px);">
				<div class="shapes-wrap shapes-background-parallax">
					<div data-depth="0.10" class="layer">
						<div class="item-wrap shape">
							<div class="shape-item left-top"></div>
						</div>
					</div>
					<div data-depth="0.20" class="layer">
						<div class="item-wrap shape">
							<div class="shape-item left-bottom"></div>
						</div>
					</div>
					<div data-depth="0.30" class="layer">
						<div class="item-wrap shape">
							<div class="shape-item top-center"></div>
						</div>
					</div>
				</div>
				<div class="shapes-wrap right shapes-background-parallax">
					<div data-depth="0.20" class="layer">
						<div class="item-wrap right-bottom-wrap shape">
							<div class="shape-item right-bottom"></div>
						</div>
					</div>
					<div data-depth="0.30" class="layer">
						<div class="item-wrap shape">
							<div class="shape-item right-middle"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="segmenter" style="background-image: url(wp-content/uploads/2018/06/main-featured-bg.jpg);">
			</div>
			<div class="featured-logo">
				<div class="logo-wrap">
					<div class="logo"></div>
				</div>
			</div>
			<div class="scrolldown-btn-wrap">
				<div class="scrolldown-btn"> <span style="color: #d6d6d6;">scroll</span>
					<div class="icon"></div>
				</div>
			</div>
		</div>
		<div class="site-main">
			<div class="intro-section">
				<div class="shapes-bg " data-bottom-top="transform:translateY(0px);"
					data--100-end="transform:translateY(200px);">
					<div class="shapes-wrap shapes-background-parallax">
						<div data-depth="0.10" class="shape-black layer"></div>
						<div data-depth="0.20" class="shape-green layer"></div>
						<div data-depth="0.30" class="shape-white layer"></div>
					</div>
				</div>
				<div class="plus-icon top shapes-background-parallax" data-anchor-target=".intro-section"
					data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
					<div class="layer" data-depth="0.40"><span>+</span></div>
				</div>
				<div class="plus-icon bottom shapes-background-parallax" data-anchor-target=".intro-section"
					data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
					<div class="layer" data-depth="0.40"><span>+</span></div>
				</div>

				<div class="inner cf">

					<div class="text-wrap">
						<p>Somos una startup tecnológica <strong>inovadora y creativa. </strong>Desarrollamos 
							y repotenciamos soluciones tecnológicas a medida para cualquier tipo de <strong>negocio, empresa o
							persona,</strong> ideando creativa e ingeniosamente el sistema perfecto, supliendo las necesidades existentes,  
							para así brindar un servicio profesional y 
							exelente a los clientes de <a href="over-basecamp/index.html"><strong>Hyphenx Labs!</strong></a></p>
						<div class="btn"> <a href="over-basecamp/index.html"><span>Conoce Hyphenx</span></a></div>
					</div>

				</div>

			</div>
			<div class="projects-section smooth">
				<div class="shapes-bg-top" data-bottom-top="transform:translateY(0px);"
					data--100-end="transform:translateY(200px);">
					<div class="shapes-wrap shapes-background-parallax">
						<div class="shape-green layer" data-depth="0.20"></div>
						<div class="shape-white layer" data-depth="0.30"></div>
					</div>
				</div>
				<div class="inner cf">
					<div class="top-text-wrap">
						<div class="plus-icon top shapes-background-parallax" data-anchor-target=".projects-section"
							data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
							<div class="layer" data-depth="0.40"><span>+</span></div>
						</div>

						<p>Nuestros <strong>proyectos más solicitados</strong>, hechos <br>con mucho <strong>amor y
								dedicación</strong> para <br><strong>satisfacer </strong>a nuestros
							<strong>clientes</strong> </p>
					</div>
					<div class="one-third-wrap cf">

						<div class="one-third  ">
							<div class="tilter tilter--1">
								<div class="one-third-inner tilter__figure">
									<div class="img-wrap"
										style="background-image: url(wp-content/uploads/2018/03/project-featured-img-1.jpg);">
										<img src="wp-content/uploads/2018/03/project-featured-img-1.jpg" /></div>
									<div class="logo-wrap"> <img
											src="wp-content/uploads/2018/08/trilux-%e2%80%93-2%402x.png" /></div>
									<div class="text-outer-wrap">
										<div class="text-wrap tilter__caption">
											<h4><span>TRILUX, Simplify your light</span> Speed of Light</h4>
											<ul>
												<li><a href="#">Actie website</a></li>
												<li><a href="#">Direct Mail Campagne</a>
												</li>
												<li><a href="#">User Experience Design</a></li>
												<li><a href="#">User Interface Design</a>
												</li>
											</ul> <a href="#"
												class="full-link" target="_blank"></a>
										</div>
									</div>
									<div class="btn-arrow">
										<div class="icon"></div>
									</div> <a href="#" class="full-link"></a>
								</div>
							</div>
						</div>

						<div class="one-third  ">
							<div class="tilter tilter--1">
								<div class="one-third-inner tilter__figure">
									<div class="img-wrap"
										style="background-image: url(wp-content/uploads/2018/08/Voor-de-installateur.jpg);">
										<img src="wp-content/uploads/2018/08/Voor-de-installateur.jpg" /></div>
									<div class="logo-wrap"> <img
											src="wp-content/uploads/2018/08/trilux-%e2%80%93-2%402x.png" /></div>
									<div class="text-outer-wrap">
										<div class="text-wrap tilter__caption">
											<h4><span>TRILUX</span> Voor de Installateur</h4>
											<ul>
												<li><a href="#">User Experience Design</a></li>
												<li><a href="#">User Interface Design</a>
												</li>
											</ul> <a href="#"
												class="full-link"></a>
										</div>
									</div>
									<div class="btn-arrow">
										<div class="icon"></div>
									</div> <a href="#"
										class="full-link"></a>
								</div>
							</div>
						</div>
						<div class="one-third  last  ">
							<div class="tilter tilter--1">
								<div class="one-third-inner tilter__figure">
									<div class="img-wrap"
										style="background-image: url(wp-content/uploads/2018/08/Brezan-Header2.jpg);">
										<img src="wp-content/uploads/2018/08/Brezan-Header2.jpg" /></div>
									<div class="logo-wrap"> <img
											src="wp-content/uploads/2018/08/brezan-%e2%80%93-2%402x.png" /></div>
									<div class="text-outer-wrap">
										<div class="text-wrap tilter__caption">
											<h4><span>Brezan</span> Online branding en website</h4>
											<ul>
												<li><a href="#">Corporate website</a></li>
												<li><a href="#">User Interface Design</a>
												</li>
												<li><a href="#">User Experience Design</a></li>
											</ul> <a href="#" class="full-link"></a>
										</div>
									</div>
									<div class="btn-arrow">
										<div class="icon"></div>
									</div> <a href="#" class="full-link"></a>
								</div>
							</div>
						</div>
						<div class="one-third  ">
							<div class="tilter tilter--1">
								<div class="one-third-inner tilter__figure">
									<div class="img-wrap"
										style="background-image: url(wp-content/uploads/2018/07/anva_magazine_bg.jpg);">
										<img src="wp-content/uploads/2018/07/anva_magazine_bg.jpg" /></div>
									<div class="logo-wrap"> <img
											src="wp-content/uploads/2018/08/anva-%e2%80%93-2%402x.png" /></div>
									<div class="text-outer-wrap">
										<div class="text-wrap tilter__caption">
											<h4><span>ANVA</span> Corporate Magazine voor klanten en prospects</h4>
											<ul>
												<li><a href="#">Corporate magazines</a>
												</li>
											</ul> <a href="#" class="full-link"></a>
										</div>
									</div>
									<div class="btn-arrow">
										<div class="icon"></div>
									</div> <a href="#" class="full-link"></a>
								</div>
							</div>
						</div>
						<div class="one-third  ">
							<div class="tilter tilter--1">
								<div class="one-third-inner tilter__figure">
									<div class="img-wrap"
										style="background-image: url(wp-content/uploads/2018/08/RNET-Header.jpg);"> <img
											src="wp-content/uploads/2018/08/RNET-Header.jpg" /></div>
									<div class="logo-wrap"> <img
											src="wp-content/uploads/2018/08/rnet-%e2%80%93-2%402x.png" /></div>
									<div class="text-outer-wrap">
										<div class="text-wrap tilter__caption">
											<h4><span>R-net</span> Website voor reizigers</h4>
											<ul>
												<li><a href="#">Corporate website</a></li>
												<li><a href="#">User Experience Design</a></li>
												<li><a href="#">User Interface Design</a>
												</li>
											</ul> <a href="#" class="full-link"></a>
										</div>
									</div>
									<div class="btn-arrow">
										<div class="icon"></div>
									</div> <a href="#" class="full-link"></a>
								</div>
							</div>
						</div>
						<div class="one-third  last  ">
							<div class="tilter tilter--1">
								<div class="one-third-inner tilter__figure">
									<div class="img-wrap"
										style="background-image: url(wp-content/uploads/2018/03/trilux_livelink_bg.jpg);">
										<img src="wp-content/uploads/2018/03/trilux_livelink_bg.jpg" /></div>
									<div class="logo-wrap"> <img
											src="wp-content/uploads/2018/08/trilux-%e2%80%93-2%402x.png" /></div>
									<div class="text-outer-wrap">
										<div class="text-wrap tilter__caption">
											<h4><span>TRILUX, simplify your light</span> Start met LiveLink</h4>
											<ul>
												<li><a href="#">Actie website</a></li>
												<li><a href="#">Direct Mail Campagne</a>
												</li>
												<li><a href="#">User Experience Design</a></li>
												<li><a href="#">User Interface Design</a>
												</li>
											</ul> <a href="#" class="full-link"></a>
										</div>
									</div>
									<div class="btn-arrow">
										<div class="icon"></div>
									</div> <a href="#" class="full-link"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="bottom-text-wrap">
						<div class="plus-icon bottom shapes-background-parallax" data-anchor-target=".bottom-text-wrap"
							data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
							<div class="layer" data-depth="0.40"><span>+</span></div>
						</div>
						<p>Conoce nuestros <strong>proyectos estudiantiles</strong></p>
						<div class="btn"> <a href="ons-werk/index.html"><span>Aprende con Hyphenx</span></a></div>
					</div>
				</div>
				<div class="shapes-bg-bottom" data-bottom-top="transform:translateY(0px);"
					data--100-top="transform:translateY(100px);">
					<div class="shapes-wrap shapes-background-parallax">
						<div class="shape-white layer" data-depth="0.20"></div>
					</div>
				</div>
			</div>
			<div class="clients-section">
				<div class="shapes-bg" data-anchor-target=".clients-section"
					data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(200px);">
					<div class="shapes-wrap shapes-background-parallax">
						<div data-depth="0.10" class="shape-black layer"></div>
						<div data-depth="0.20" class="shape-white layer"></div>
						<div data-depth="0.30" class="shape-green layer"></div>
					</div>
				</div>
				<div class="shapes-bg-right" data-anchor-target=".clients-section"
					data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(200px);">
					<div class="shapes-wrap shapes-background-parallax">
						<div class="shape-white layer" data-depth="0.20"></div>
					</div>
				</div>
				<div class="inner cf">
					<div class="text-wrap">
						<div class="plus-icon shapes-background-parallax" data-anchor-target=".clients-section"
							data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
							<div class="layer" data-depth="0.40"><span>+</span></div>
						</div>
						<p>Colaboramos con las últimas y mejores <br /> <strong>Startups</strong> tecnológicas</p>
					</div>
					<div class="logos-wrap">
						<div class="plus-icon top shapes-background-parallax" data-anchor-target=".clients-section"
							data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
							<div class="layer" data-depth="0.40"><span>+</span></div>
						</div>
						<div class="plus-icon bottom shapes-background-parallax" data-anchor-target=".clients-section"
							data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
							<div class="layer" data-depth="0.40"><span>+</span></div>
						</div>
						<ul>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/anva%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/cam%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/fundustry%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/kiwa%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img
										src="wp-content/uploads/2018/07/vervoerregio-amsterdam%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/brezan%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/menzis%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/imago%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/safebay%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/rnet%402x.png" /></div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/kentekenloket%402x.png" />
								</div>
							</li>
							<li>
								<div class="img-wrap"> <img src="wp-content/uploads/2018/07/trilux%402x.png" /></div>
							</li>
						</ul>
					</div>
					<div class="text-wrap">
						<div class="plus-icon bottom shapes-background-parallax" data-anchor-target=".clients-section"
							data-bottom-top="transform:translateY(0px);" data--100-end="transform:translateY(200px);">
							<div class="layer" data-depth="0.40"><span>+</span></div>
						</div>
						<p><strong>Únete a Hyphenx</strong> y recibe códigos de descuento!</p>
						<div class="btn"> <a href="ons-werk/index.html"><span>Adquirir Servicio</span></a></div>
					</div>
				</div>
			</div>
			<div class=" contact-btns-section ">
				<div class="inner cf">
					<div class="plus-icon top shapes-background-parallax">
						<div class="layer" data-depth="0.40"><span>+</span></div>
					</div>
					<div class="plus-icon bottom shapes-background-parallax">
						<div class="layer" data-depth="0.40"><span>+</span></div>
					</div>
					<p>Si estás buscando un impulso<strong> tecnológico, creativo</strong> que lo acerque a su objetivo comercial
						con <strong>campañas efectivas y conceptos innovadores,</strong> ahora es el momento de
						levantar el teléfono.<strong>
						<br>	<br /> <a href="#">033-4220066</a> (oficina) / <a
								href="#">06-14447859</a> (central)</strong></p>
					<div class="btn"> <a href="contact/index.html"><span>Datos de Contacto</span></a></div>
					<div class="contact-btns">
						<div class="contact-btn phone"> <a href="tel:+31 (0)33 422 00 66"></a></div>
						<div class="contact-btn location"> <a
								href="https://www.google.com/maps/dir/My+Location/1300+CA-82,+San+Mateo,+CA+94402,+EE.+UU./@37.5547582,-122.3194827,17z/data=!3m1!4b1!4m5!3m4!1s0x808f9e5dfa7a35cd:0x5183fa23ab3668eb!8m2!3d37.5547582!4d-122.317294"
								target="_blank"></a></div>
					</div>
				</div>
			</div>
		</div>
		<footer class="site-footer">
			<div class="header-wrp">
				<div class="site-logo"> <a href="index.php"></a></div>
				<div class="mobile-nav-btn"> <span></span> <span></span> <span></span></div>
			</div>
			
			<div class="footer-top">
				<div class="bg-shape"></div>
				<div class="inner cf">
					<div class="footer-logo"> <a href="#"></a></div>

					<br> <br>

					<div class="text-wrap">
						  
						<p>Hyphenx Company es una startup de soluciones tecnológicas 
							que hace todo lo posible por sus clientes.</p>

						<p>Trabajamos en la intersección del comercio y la comunicación creativa. 
							Entendemos los procesos comerciales y nos sentimos más felices a medida que se vuelven más complejos 
							 y realmente podemos desarrollarnos en ellos. 
							 Donde la visión es esencial y realmente podemos marcar la diferencia. 
							 Con nuestros resultados, o mediante nuestro enfoque distintivo.</p>

							<br> <br>

						<p>Respetamos las cosas sagradas, pero nos complace cuestionarlas si eso nos acerca a la meta. 
							De la idea creativa, a la asociación, a los resultados. ¡Esto es Hyphenx!
						</p>

					</div>

					<ul>
						<li class="address">Hyphenx Company <span>1300 King's Highway
							San Mateo, CA 94402, United States</span></li>
					   <li> <a href="tel:+31 (0)33 422 00 66">+31 (0)33 422 00 66</a></li>
					   <li> <a href="mailto:hello@hyphenx.co">hello@hyphenx.co</a></li>
					</ul>

					<br>

					<div class="social-links">
						<div class="social-link"
							style="background-image: url(wp-content/themes/Basecamp/images/facebook-icon-white.png);">
							<a href="https://www.facebook.com/hyphenx/"></a></div>
						<div class="social-link"
							style="background-image: url(wp-content/themes/Basecamp/images/instagram-icon-white.png);">
							<a href="https://www.instagram.com/hyphenx"></a></div>
						<div class="social-link"
							style="background-image: url(wp-content/themes/Basecamp/images/linkedin-icon-white.png);">
							<a href="https://www.linkedin.com/company/hyphenx"></a></div>
					</div>

				</div>
			</div>

			<div class="footer-bottom">
				<div class="inner cf">
					<ul>
						<li><a href="">Lincenciamiento y leyes</a>
						</li>
						<li><a href="cookie-policy/index.html">Política de Cookies</a></li>
					</ul> <span class="copyright">2021 - Hyphenx Company ©</span>
				</div>
			</div>

		</footer>
	</div>
	<script type='text/javascript'
		src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCr9cgEtZiOn4pVba34gRIJ_Vf8bfBVaf8&amp;ver=4.9.8'>
	</script>
	<script data-minify="1" type='text/javascript'
		src='wp-content/cache/min/1/wp-content/themes/Basecamp/scripts/jquery.bxslider-f1f614248dc331d0ff895e9d0fdc8cd7.js'>
	</script>
	<script data-minify="1" type='text/javascript'
		src='wp-content/cache/min/1/wp-content/themes/Basecamp/scripts/jquery.matchHeight-7fba53e5875ca788ef42c3d63277f5bb.js'>
	</script>
	<script type='text/javascript' src='wp-content/themes/Basecamp/scripts/imagesloaded.pkgd.min5010.js?ver=4.9.8'>
	</script>
	<script type='text/javascript' src='wp-content/themes/Basecamp/scripts/anime.min5010.js?ver=4.9.8'></script>
	<script data-minify="1" type='text/javascript'
		src='wp-content/cache/min/1/wp-content/themes/Basecamp/scripts/main-a0f37e8a92264e3f07b70a6d7f7dfbc7.js'>
	</script>
	<script type='text/javascript' src='wp-content/themes/Basecamp/scripts/skrollr.min5010.js?ver=4.9.8'></script>
	<script data-minify="1" type='text/javascript'
		src='wp-content/cache/min/1/wp-content/themes/Basecamp/scripts/parallax-6181daafc7347fe2381d54150744828f.js'>
	</script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var map_script_vars = {
			"map_pins": {
				"address": "Basecamp Creative Development, Bergstraat 11, 3811 NE Amersfoort, Netherlands",
				"lat": "52.15088879999999",
				"lng": "5.383762100000013"
			},
			"marker_icon": "https:\/\/bscmp.nl\/wp-content\/themes\/Basecamp\/images\/map-marker-new.png",
			"home_url": "https:\/\/bscmp.nl"
		}; /* ]]> */
	</script>
	<script data-minify="1" type='text/javascript'
		src='wp-content/cache/min/1/wp-content/themes/Basecamp/scripts/custom-c6ae1c38eb1c6ba53c43eea7a1c0c575.js'>
	</script>

	<script>
		(function (w, d) {
			var b = d.getElementsByTagName("body")[0];
			var s = d.createElement("script");
			s.async = true;
			s.src = !("IntersectionObserver" in w) ?
				"https://bscmp.nl/wp-content/plugins/wp-rocket/inc/front/js/lazyload-8.12.min.js" :
				"https://bscmp.nl/wp-content/plugins/wp-rocket/inc/front/js/lazyload-10.12.min.js";
			w.lazyLoadOptions = {
				elements_selector: "img,iframe",
				data_src: "lazy-src",
				data_srcset: "lazy-srcset",
				data_sizes: "lazy-sizes",
				skip_invisible: false,
				class_loading: "lazyloading",
				class_loaded: "lazyloaded",
				threshold: 300,
				callback_load: function (element) {
					if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
						if (element.classList.contains("lazyloaded")) {
							if (typeof window.jQuery != "undefined") {
								if (jQuery.fn.fitVids) {
									jQuery(element).parent().fitVids();
								}
							}
						}
					}
				}
			}; // Your options here. See "recipes" for more information about async.
			b.appendChild(s);
		}(window, document));

		// Listen to the Initialized event
		window.addEventListener('LazyLoad::Initialized', function (e) {
			// Get the instance and puts it in the lazyLoadInstance variable
			var lazyLoadInstance = e.detail.instance;

			var observer = new MutationObserver(function (mutations) {
				mutations.forEach(function (mutation) {
					lazyLoadInstance.update();
				});
			});

			var b = document.getElementsByTagName("body")[0];
			var config = {
				childList: true,
				subtree: true
			};

			observer.observe(b, config);
		}, false);
	</script>
	<script>
		function lazyLoadThumb(e) {
			var t = '<img src="../i.ytimg.com/vi/ID/hqdefault.jpg">',
				a = '<div class="play"></div>';
			return t.replace("ID", e) + a
		}

		function lazyLoadYoutubeIframe() {
			var e = document.createElement("iframe"),
				t = "https://www.youtube.com/embed/ID?autoplay=1";
			t += 0 === this.dataset.query.length ? '' : '&' + this.dataset.query;
			e.setAttribute("src", t.replace("ID", this.dataset.id)), e.setAttribute("frameborder", "0"), e.setAttribute(
				"allowfullscreen", "1"), this.parentNode.replaceChild(e, this)
		}
		document.addEventListener("DOMContentLoaded", function () {
			var e, t, a = document.getElementsByClassName("rll-youtube-player");
			for (t = 0; t < a.length; t++) e = document.createElement("div"), e.setAttribute("data-id", a[t].dataset
				.id), e.setAttribute("data-query", a[t].dataset.query), e.innerHTML = lazyLoadThumb(a[t].dataset
				.id), e.onclick = lazyLoadYoutubeIframe, a[
				t].appendChild(e)
		});
	</script>
	<script>
		(function (d) {
			var config = {
					kitId: 'knz2rqs',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function () {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function () {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60163430-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-60163430-1');
	</script> <noscript>
		<link rel='stylesheet' id='cookie-notice-front-css'
			href='wp-content/plugins/cookie-notice/css/front.min5010.css?ver=4.9.8' type='text/css' media='all' />
	</noscript><noscript>
		<link rel='stylesheet' id='BCAMP-fonts-css'
			href='https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'
			type='text/css' media='all' /></noscript><noscript>
		<link data-minify="1" rel='stylesheet' id='BCAMP-style-css'
			href='wp-content/cache/min/1/wp-content/themes/Basecamp/style-42fc9faa1ab50c49bb8070b48f79ebb7.css'
			type='text/css' media='all' /></noscript><noscript>
		<link data-minify="1" rel='stylesheet' id='BCAMP-responsive-css'
			href='wp-content/cache/min/1/wp-content/themes/Basecamp/css/responsive-2ea9a3d12ee455fd81739708b62ea4b4.css'
			type='text/css' media='all' /></noscript>
</body>

</html>