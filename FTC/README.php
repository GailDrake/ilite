<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Pure CSS Tabs with Fade Right Animation Demo 4</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Navya" />
		<link rel="shortcut icon" href="../file/favicon.gif"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />

		<!-- Edit Below -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<script type="text/javascript" src="css/animate.min.css"></script>
    	<link href='css/animate.min.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="../file/js/modernizr.js"></script>
		<style type="text/css">
	      body, html {
	          height: 100%;
	          margin: 0;
	          -webkit-font-smoothing: antialiased;
	          font-weight: 100;
	          background: #EBD6AA;
	          text-align: center;
	          font-family: helvetica;
	      }
	      
	      .tabs input[type=radio] {
	          position: absolute;
	          top: -9999px;
	          left: -9999px;
	      }
	      .tabs {
	        width: 650px;
	        float: none;
	        list-style: none;
	        position: relative;
	        padding: 0;
	        margin: 75px auto;
	      }
	      .tabs li{
	        float: left;
	      }
	      .tabs label {
	          display: block;
	          padding: 10px 20px;
	          border-radius: 2px 2px 0 0;
	          color: #CC6200;
	          font-size: 24px;
	          font-weight: normal;
	          font-family: 'Roboto', helveti;
	          background: rgba(255,255,255,0.2);
	          cursor: pointer;
	          position: relative;
	          top: 3px;
	          -webkit-transition: all 0.2s ease-in-out;
	          -moz-transition: all 0.2s ease-in-out;
	          -o-transition: all 0.2s ease-in-out;
	          transition: all 0.2s ease-in-out;
	      }
	      .tabs label:hover {
	        background: rgba(255,255,255,0.5);
	        top: 0;
	      }
	      
	      [id^=tab]:checked + label {
	        background: #CC6200;
	        color: white;
	        top: 0;
	      }
	      
	      [id^=tab]:checked ~ [id^=tab-content], [id^=tab]:checked ~ [id^=tab-content] > div {
	          display: block;
	      }
	      .tab-content{
	        z-index: 2;
	        display: none;
	        text-align: left;
	        overflow: hidden;
	        width: 100%;
	        font-size: 20px;
	        line-height: 140%;
	        padding-top: 10px;
	        background: #CC6200;
	        padding: 15px;
	        color: white;
	        position: absolute;
	        top: 53px;
	        left: 0;
	        box-sizing: border-box;
	      }
	      .tab-content > div{
	        display: none;
	        -webkit-animation-duration: 0.5s;
	        -o-animation-duration: 0.5s;
	        -moz-animation-duration: 0.5s;
	        animation-duration: 0.5s;
	      }
	    </style>
	</head>
	<body>
		<div class="container">
			<!-- Top Navi -->
			<div class="nav-top clearfix">
				<div class="nav-social nav-icon">
					<span>
						<div class="fb-like" data-href="http://www.onextrapixel.com/" data-send="false" data-layout="button_count" data-width="55" data-show-faces="false"></div>
					</span>
					<span>
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.onextrapixel.com/" data-via="onextrapixel">&nbsp;</a>
					</span>
				</div>

				<span class="right"><a class="nav-icon icon-th" href="http://www.onextrapixel.com/category/tutorials/"><span>View all Tutorials</span></a></span>
				<span class="right"><a class="nav-icon icon-left" href="http://www.onextrapixel.com/2013/07/31/creating-content-tabs-with-pure-css/"><span>Back to Tutorial Article</span></a></span>
			</div>

			<div class="header">
				<h1>Pure CSS Tabs with Fade Right Animation Demo 4</h1>	
			</div>

			<div class="menu">
				<a href="index.html">Demo 1</a>
				<a href="index2.html">Demo 2</a>
				<a href="index3.html">Demo 3</a>
				<a class="active" href="index4.html">Demo 4</a>
				<a href="index5.html">Demo 5</a>
			</div>
		
			<div class="main">
	        	<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">tab 1</label>
			          <div id="tab-content1" class="tab-content">
			            <div class="animated  fadeInRight">
			              "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			            </div>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">tab 2</label>
			          <div id="tab-content2" class="tab-content">
			            <div class="animated  fadeInRight">
			              "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
			            </div>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3">tab 3</label>
			          <div id="tab-content3" class="tab-content">
			            <div class="animated  fadeInRight ">
			              "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
			            </div>
			          </div>
			        </li>
			    </ul>
	      	</div>
		</div><!-- Container -->
	</body>
</html>