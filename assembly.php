<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BBPS4 アセンシミュレーター</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/bbps4/index.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
        .assault {
            width: 16px;
            height: 16px;
            display: inline-block;
            background: url(images/assault_icon.png) no-repeat;
        }
        .heavy {
            width: 16px;
            height: 16px;
            display: inline-block;
            background: url(images/heavy_icon.png) no-repeat;
        }
        .short {
            width: 16px;
            height: 16px;
            display: inline-block;
            background: url(images/short_icon.png) no-repeat;
        }
        .suport {
            width: 16px;
            height: 16px;
            display: inline-block;
            background: url(images/suport_icon.png) no-repeat;
        }
        ._icon {
            width: 21px;
            height: 21px;
            display: inline-block;
        }
    </style>

	</head>
	<body>
		<!-- HEADER START -->
		<header id="fh5co-header-section" role="header" class="" style="background-color: #2d2d4a" >
			<div class="container">
				<h1 id="fh5co-logo" class="pull-left"><a href="index.html">BBPS4 アセンシミュレーター</a></h1>
                <!-- START #fh5co-menu-wrap -->
				<nav id="fh5co-menu-wrap" role="navigation">
					<ul class="sf-menu" id="fh5co-primary-menu">
						<li><a href="index.html">Home</a>
						</li>
						<li><a href="index.html">About</a></li>
						<li><a href="index.html">Database</a></li>
						<li class="active"><a href="assembly.php">Simulator</a></li>
					</ul>
				</nav>
			</div>
        </header>
        <!-- HEADER END -->

        <!-- CONTENTS START -->
		<div class="container">

            <!-- MACHINE -->
            <div class="row">
                <div class="fh5co-spacer fh5co-spacer-lg"></div>
                <div class="col-md-12 animate-box fadeInUp animated">
                    <div class="panel-group fh5co-accordion" id="tabMachine" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingMachine" data-toggle="collapse" data-parent="#tabMachine" data-target="#collapseMachine" aria-expanded="false" aria-controls="collapseMachine">
                                <h4 class="panel-title"><a class="accordion-toggle">機体パーツ</a></h4>
                            </div>
                            <div id="collapseMachine" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingMachine">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-8" colspan="2">パーツ名称</th>
                                                <th class="text-center col-md-2">強化</th>
                                                <th class="text-center col-md-2">重量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>頭</td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>クーガーⅠ型</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>650</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>胴</td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>クーガーⅠ型</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>650</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>腕</td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>クーガーⅠ型</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>650</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>脚</td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>クーガーⅠ型</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-md" id="gender">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>650</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fh5co-spacer fh5co-spacer-sm"></div>

            <!-- WEPON -->
            <div class="row">
                <div class="col-md-12 animate-box fadeInUp animated">
                    <div id="fh5co-tab-feature" class="fh5co-tab">
                        <ul class="resp-tabs-list hor_1">
                            <!-- <li><i class="fh5co-tab-menu-icon assault"></i>強襲</li> -->
                            <li><i class="assault"></i>強襲</li>
                            <li><i class="heavy"></i>重火力</li>
                            <li><i class="short"></i>遊撃</li>
                            <li><i class="suport"></i>支援</li>
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center col-md-8" colspan="2">武器名称</th>
                                            <th class="text-center col-md-2">強化</th>
                                            <th class="text-center col-md-2">重量</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>主</td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>M90サブマシンガン</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </td>
                                            <td>650</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>副</td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>MK3クラッカー</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </td>
                                            <td>650</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>補</td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>デュエルソード</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </td>
                                            <td>650</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>特</td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>アサルトチャージャー</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-md" id="gender">
                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </td>
                                            <td>650</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <div class="row">
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fh5co-spacer fh5co-spacer-sm"></div>

            <!-- CHIP -->
            <div class="row">
                <div class="col-md-6 animate-box fadeInUp animated">
                    <div class="panel-group fh5co-accordion" id="tabChip" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingChip" data-toggle="collapse" data-parent="#tabChip" data-target="#collapseChip" aria-expanded="false" aria-controls="collapseChip">
                                <h4 class="panel-title"><a class="accordion-toggle">チップ</a></h4>
                            </div>
                            <div id="collapseChip" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingChip">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-9" colspan="3">チップ選択</th>
                                                <th class="text-center col-md-3">上昇量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>重量耐性</td>
                                                <td>
                                                    <select class="form-control input-md" id="weight">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>枚</td>
                                                <td>650</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>重量耐性Ⅱ</td>
                                                <td>
                                                    <select class="form-control input-md" id="weight2">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>枚</td>
                                                <td>650</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>脚部パーツ強化</td>
                                                <td>
                                                    <select class="form-control input-md" id="legpartsUp">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td>枚</td>
                                                <td>650</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Calculator -->
            <div class="col-md-6 animate-box fadeInUp animated">
                <div class="resltCaution text-center" id="resltCaution">
                    <div class="message">
                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/cation_icon.png" class="_icon">
                        CAUTION！
                        <div id="resltCalc" class="resltMessage">
                            積載超過: 104<br>
                            移動系パラメータ低下: -4%
                        </div>
                    </div>
                    <div class="fh5co-spacer fh5co-spacer-xs"></div>
                </div>
                <div class="resltSafety text-center" id="resltSafety">
                    <div class="message">
                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/check_on.png" class="_icon">
                        SAFETY
                    </div>
                    <div class="fh5co-spacer fh5co-spacer-xs"></div>
                </div>
                <div class="panel-group fh5co-accordion" id="panelCalc" role="tablist">
                    <div class="panel panel-default">
                        <div id="collapseCalc" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="col-md-4 table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">積載猶予</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td id="allWeight">4810 / 4860</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTENTS END -->

        <!-- FOOTER START -->
		<footer role="contentinfo" id="fh5co-footer">
			<a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">Menu</h3>
						<ul class="fh5co-footer-links">
							<li><a href="index.html">Home</a></li>
							<li><a href="index.html">About</a></li>
							<li><a href="index.html">Database</a></li>
							<li><a href="assembly.php">Simulator</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 footer-box">
						<h3 class="fh5co-footer-heading">Get in touch</h3>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/gazell0912" target="_blank"><i class="ti-twitter"></i></a></li>	
						</ul>
					</div>
					<div class="col-md-12 footer-box text-center">
						<div class="fh5co-copyright">
						<p>&copy; 2015 Free Valet. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a> Images by: <a href="http://unsplash.com" target="_blank">Unsplash</a></p>
						</div>
					</div>
					
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
        </footer>
        <!-- FOOTER END -->
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
	</body>
</html>
