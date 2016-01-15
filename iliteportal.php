<HTML>
<HEAD>
<TITLE>ILITE: Inspiring Leaders in Technology and Engineering</TITLE>
<META http-equiv="Cache-control" content="no-cache"><META http-equiv="Pragma" content="no-cache"><META http-equiv="Expires" content="-1">
</HEAD>
<style>
html{
    overflow-x: hidden;
}
body {
    margin: 0;
}
.slideshow {
    font-family: 'Roboto', sans-serif;
    font-size: 10em;
    font-weight: bold; 
    letter-spacing:-0.11em;
    height: 100%;
    width: 100%;
    z-index: 1; 
    overflow: hidden;
}
svg {
    width: 100%;
    height: 100%;
    position:absolute;
    z-index: 2;
}
svg text {
    text-anchor: middle;
}
svg mask rect {
    fill: rgba(255, 255, 255, 0.7);
}
svg > rect {
    fill: black;
    -webkit-mask: url(#mask);
    mask: url(#mask);
}
video{
  position: absolute;
  top: 0%;
  left: 0%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1;
  overflow: hidden;
}
@media only screen and (max-width: 768px) {
  html{
    font-size:0.5em;
    font-weight:400;
  }
}
.sidebarcontainer {
  display: table;
  height: 100%;
  position: absolute;
  overflow: hidden;
  width: 50px;
}
#sidebar {
    opacity: 0.7;
    background-color: #000; 
    color: white;
    height: 50%;
    top: 5em; 
    position: fixed;
    left: 0;
    width: 50px;
    z-index: 2;
}
#sidebar .link-text {
    visibility: hidden;
}
#sidebar:hover .link-text {
    visibility: visible;
}
#sidebar:hover {
    width: 200px;
}
#sidebar a {
    color: white;
    white-space: nowrap;
    overflow: hidden;
}
#sidebar-nav {
    text-align: left;
    font-size: 30px;
    margin-top: 75px;
}
#sidebar-nav ul {
  list-style-type: none;
}
#content1 {
  width: 100%;
  height: 100%;
  background-color: #333;
  opacity:
  z-index: 5;
  margin-top: 0%; 
}

footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}
.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
</style>

<div class="slideshow"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080" width="1920px" height="1080px" preserveAspectRatio="xMidYMid slice">
  <defs>
    <mask id="mask" x="0" y="0" width="100%" height="100%">
      <rect x="0" y="0" width="100%" height="100%"/>
      <text x="960" y="2.7em">WE</text>
    <text x="960" y="3.95em"> ARE</text>
      <text x="960" y="5.20em">ILITE.</text>
    </mask>
  </defs>
  <rect x="0" y="0" width="100%" height="100%"/>
</svg>
<video id="video" autoplay="autoplay" muted="muted" preload="auto" loop="loop">
    <source src="bird.mp4" type="video/mp4">
</video>
</div>

<!-- Sidebar -->
<div class="sidebarcontainer">
<div id="sidebar" role="navigation">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
    <div id="sidebar-nav">
        <ul class="nav nav-stacked">
            <li>
                <a href="#"><span class="glyphicon glyphicon-star"></span><span class="link-text">Link 1</span></a>
                <li>
                <a href="#"><span class="glyphicon glyphicon-cloud"></span><span class="link-text">Link 1</span></a>
                    <li><a href="#"><span class="glyphicon glyphicon-heart"></span><span class="link-text">Link 1</span></a></li>
                     </ul>
              </div>
       </div>
</div>

    <!-- Sidebar End -->

<div id="content1">
  HI MY NAME IS STEVE. 
</div>

<script type="text/javascript">
// click on the ".open" link (the right arrow in the nav)
$(".left a.open").on("click", function(e) {
  // stop default browser behavior
  e.preventDefault();
  // get the <body>. Does it currently have a class of "open-nav"? If it does, remove the class, which will collapse the left column.' If it does not have a class of "open-nav", add it, which will expand the left column.
  $("body").toggleClass("open-nav");
});
</script>
</body>
</html>