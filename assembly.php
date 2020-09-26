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
	<script type="text/javascript" src="js/bbps4/assembly.js"></script>
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
        ._totalWeight {
            position:absolute; 
            right:40px;
            font-size: 12px;
        }
        ._weight-grace {
            font-size: 16px;
            text-align: center;
        }
        label {
            border: solid 1px #dddddd;
            padding: 0px 5px;
        }
        input[type=checkbox] {
            display : none;
        }
        input[type=checkbox]:checked + label {
            background: lightGray;
        }
    </style>

	</head>
	<body>
    <?php
        $host = 'localhost';
        $username = 'user';
        $password = 'user';
        $dbname = 'bbps4';

        $link = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            die("データベースに接続できません:" . mysqli_connect_error() . "\n");
        }
    ?>
		<!-- HEADER START -->
		<header id="fh5co-header-section" role="header" class="" style="background-color: #2d2d4a" >
			<div class="container">
				<h1 id="fh5co-logo" class="pull-left"><a href="index.html">BBPS4 アセンシミュレーター</a></h1>
                <!-- START #fh5co-menu-wrap -->
				<nav id="fh5co-menu-wrap" role="navigation">
					<ul class="sf-menu" id="fh5co-primary-menu">
						<li><a href="index.html">Home</a></li>
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
                    <div class="panel-group fh5co-accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingMachine">
                                <h4 class="panel-title" style="color:#57cecd">機体パーツ<span class="_totalWeight">重量合計：<span id="machineWeight">0</span></span></h4>
                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-8 tableHeadFont" colspan="2">パーツ名称</th>
                                                <th class="text-center col-md-2 tableHeadFont">強化</th>
                                                <th class="text-center col-md-2 tableHeadFont">重量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center tableFont">
                                                <td>頭</td>
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from parts_head_unstrangth order by id;';
                                                        $reslt = $link->query($query);
                                                        $head_array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($head_array, [$row[0], $row[1]]);
                                                        }

                                                        $select_heads = "<select class=\"form-control input-sm\" id=\"headName\" onchange=\"setWeight('head'); setAptude()\">\n";
                                                        for ( $indexA = 0; $indexA < count( $head_array ); $indexA++ ) {
                                                            $select_heads .= "\t<option value=\"{$head_array[$indexA][1]}\">";
                                                            $select_heads .= "{$head_array[$indexA][0]}";
                                                            $select_heads .= "</option>\n";
                                                        }
                                                        $select_heads .= "</select>\n";
                                                        echo "{$select_heads}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="headStrength" onchange="setWeight('head')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="headWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>胴</td>
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from parts_body_unstrangth order by id;';
                                                        $reslt = $link->query($query);
                                                        $body_array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($body_array, [$row[0], $row[1]]);
                                                        }

                                                        $select_bodys = "<select class=\"form-control input-sm\" id=\"bodyName\" onchange=\"setWeight('body'); setAptude()\">\n";
                                                        for ( $indexA = 0; $indexA < count( $body_array ); $indexA++ ) {
                                                            $select_bodys .= "\t<option value=\"{$body_array[$indexA][1]}\">";
                                                            $select_bodys .= "{$body_array[$indexA][0]}";
                                                            $select_bodys .= "</option>\n";
                                                        }
                                                        $select_bodys .= "</select>\n";
                                                        echo "{$select_bodys}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="bodyStrength" onchange="setWeight('body')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="bodyWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>腕</td>
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from parts_arm_unstrangth order by id;';
                                                        $reslt = $link->query($query);
                                                        $arm_array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($arm_array, [$row[0], $row[1]]);
                                                        }

                                                        $select_arms = "<select class=\"form-control input-sm\" id=\"armName\" onchange=\"setWeight('arm'); setAptude()\">\n";
                                                        for ( $indexA = 0; $indexA < count( $arm_array ); $indexA++ ) {
                                                            $select_arms .= "\t<option value=\"{$arm_array[$indexA][1]}\">";
                                                            $select_arms .= "{$arm_array[$indexA][0]}";
                                                            $select_arms .= "</option>\n";
                                                        }
                                                        $select_arms .= "</select>\n";
                                                        echo "{$select_arms}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="armStrength" onchange="setWeight('arm')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="armWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>脚</td>
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from parts_leg_unstrangth order by id;';
                                                        $reslt = $link->query($query);
                                                        $leg_array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($leg_array, [$row[0], $row[1]]);
                                                        }

                                                        $select_legs = "<select class=\"form-control input-sm\" id=\"legName\" onchange=\"setWeight('leg'); setAptude(); getLegResistance();\">\n";
                                                        for ( $indexA = 0; $indexA < count( $leg_array ); $indexA++ ) {
                                                            $select_legs .= "\t<option value=\"{$leg_array[$indexA][1]}\">";
                                                            $select_legs .= "{$leg_array[$indexA][0]}";
                                                            $select_legs .= "</option>\n";
                                                        }
                                                        $select_legs .= "</select>\n";
                                                        echo "{$select_legs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="legStrength" onchange="setWeight('leg'); getLegResistance()">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="legWeight">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEPON -->
            <div class="row">
                <div class="animate-box fadeInUp animated">
                    <div class="col-md-6 panel-group fh5co-accordion" id="tabAssault" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingAssault" data-toggle="collapse" data-parent="#tabAssault" data-target="#collapseAssault" aria-expanded="false" aria-controls="collapseAssault">
                                <h4 class="panel-title"><i class="assault"></i><a class="accordion-toggle">強襲<span class="_totalWeight">重量合計：<span id="assaultWeight">0</span></span></a></h4>
                            </div>
                            <div id="collapseAssault" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingAssault">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-7 tableHeadFont">武器名称</th>
                                                <th class="text-center col-md-2 tableHeadFont">強化</th>
                                                <th class="text-center col-md-3 tableHeadFont">重量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_main where army = 1 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_mains = "<select class=\"form-control input-sm\" id=\"assaultMainName\" onchange=\"setWeight('assaultMain')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_mains .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_mains .= "{$array[$indexA][0]}";
                                                            $select_mains .= "</option>\n";
                                                        }
                                                        $select_mains .= "</select>\n";
                                                        echo "{$select_mains}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="assaultMainStrength" onchange="setWeight('assaultMain')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="assaultMainWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sub where army = 1 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_subs = "<select class=\"form-control input-sm\" id=\"assaultSubName\" onchange=\"setWeight('assaultSub')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_subs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_subs .= "{$array[$indexA][0]}";
                                                            $select_subs .= "</option>\n";
                                                        }
                                                        $select_subs .= "</select>\n";
                                                        echo "{$select_subs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="assaultSubStrength" onchange="setWeight('assaultSub')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="assaultSubWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_aux where army = 1 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_auxs = "<select class=\"form-control input-sm\" id=\"assaultSupName\" onchange=\"setWeight('assaultSup')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_auxs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_auxs .= "{$array[$indexA][0]}";
                                                            $select_auxs .= "</option>\n";
                                                        }
                                                        $select_auxs .= "</select>\n";
                                                        echo "{$select_auxs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="assaultSupStrength" onchange="setWeight('assaultSup')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="assaultSupWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sp where army = 1 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_sps = "<select class=\"form-control input-sm\" id=\"assaultSpName\" onchange=\"setWeight('assaultSp')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_sps .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_sps .= "{$array[$indexA][0]}";
                                                            $select_sps .= "</option>\n";
                                                        }
                                                        $select_sps .= "</select>\n";
                                                        echo "{$select_sps}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="assaultSpStrength" onchange="setWeight('assaultSp')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="assaultSpWeight">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 panel-group fh5co-accordion" id="tabHeavy" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingHeavy" data-toggle="collapse" data-parent="#tabHeavy" data-target="#collapseHeavy" aria-expanded="false" aria-controls="collapseHeavy">
                                <h4 class="panel-title"><i class="heavy"></i><a class="accordion-toggle">重火力<span class="_totalWeight">重量合計：<span id="heavyWeight">0</span></span></a></h4>
                            </div>
                            <div id="collapseHeavy" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingHeavy">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-7 tableHeadFont">武器名称</th>
                                                <th class="text-center col-md-2 tableHeadFont">強化</th>
                                                <th class="text-center col-md-3 tableHeadFont">重量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_main where army = 2 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_mains = "<select class=\"form-control input-sm\" id=\"heavyMainName\" onchange=\"setWeight('heavyMain')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_mains .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_mains .= "{$array[$indexA][0]}";
                                                            $select_mains .= "</option>\n";
                                                        }
                                                        $select_mains .= "</select>\n";
                                                        echo "{$select_mains}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="heavyMainStrength" onchange="setWeight('heavyMain')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="heavyMainWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sub where army = 2 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_subs = "<select class=\"form-control input-sm\" id=\"heavySubName\" onchange=\"setWeight('heavySub')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_subs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_subs .= "{$array[$indexA][0]}";
                                                            $select_subs .= "</option>\n";
                                                        }
                                                        $select_subs .= "</select>\n";
                                                        echo "{$select_subs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="heavySubStrength" onchange="setWeight('heavySub')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="heavySubWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_aux where army = 2 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_auxs = "<select class=\"form-control input-sm\" id=\"heavySupName\" onchange=\"setWeight('heavySup')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_auxs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_auxs .= "{$array[$indexA][0]}";
                                                            $select_auxs .= "</option>\n";
                                                        }
                                                        $select_auxs .= "</select>\n";
                                                        echo "{$select_auxs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="heavySupStrength" onchange="setWeight('heavySup')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="heavySupWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sp where army = 2 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_sps = "<select class=\"form-control input-sm\" id=\"heavySpName\" onchange=\"setWeight('heavySp')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_sps .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_sps .= "{$array[$indexA][0]}";
                                                            $select_sps .= "</option>\n";
                                                        }
                                                        $select_sps .= "</select>\n";
                                                        echo "{$select_sps}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="heavySpStrength" onchange="setWeight('heavySp')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="heavySpWeight">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="animate-box fadeInUp animated">
                    <div class="col-md-6 panel-group fh5co-accordion" id="tabShort" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingShort" data-toggle="collapse" data-parent="#tabShort" data-target="#collapseShort" aria-expanded="false" aria-controls="collapseShort">
                                <h4 class="panel-title"><i class="short"></i><a class="accordion-toggle">遊撃<span class="_totalWeight">重量合計：<span id="shortWeight">0</span></span></a></h4>
                            </div>
                            <div id="collapseShort" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingShort">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-7 tableHeadFont">武器名称</th>
                                                <th class="text-center col-md-2 tableHeadFont">強化</th>
                                                <th class="text-center col-md-3 tableHeadFont">重量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_main where army = 3 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_mains = "<select class=\"form-control input-sm\" id=\"shortMainName\" onchange=\"setWeight('shortMain')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_mains .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_mains .= "{$array[$indexA][0]}";
                                                            $select_mains .= "</option>\n";
                                                        }
                                                        $select_mains .= "</select>\n";
                                                        echo "{$select_mains}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="shortMainStrength" onchange="setWeight('shortMain')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="shortMainWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sub where army = 3 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_subs = "<select class=\"form-control input-sm\" id=\"shortSubName\" onchange=\"setWeight('shortSub')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_subs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_subs .= "{$array[$indexA][0]}";
                                                            $select_subs .= "</option>\n";
                                                        }
                                                        $select_subs .= "</select>\n";
                                                        echo "{$select_subs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="shortSubStrength" onchange="setWeight('shortSub')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="shortSubWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_aux where army = 3 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_auxs = "<select class=\"form-control input-sm\" id=\"shortSupName\" onchange=\"setWeight('shortSup')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_auxs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_auxs .= "{$array[$indexA][0]}";
                                                            $select_auxs .= "</option>\n";
                                                        }
                                                        $select_auxs .= "</select>\n";
                                                        echo "{$select_auxs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="shortSupStrength" onchange="setWeight('shortSup')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="shortSupWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sp where army = 3 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_sps = "<select class=\"form-control input-sm\" id=\"shortSpName\" onchange=\"setWeight('shortSp')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_sps .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_sps .= "{$array[$indexA][0]}";
                                                            $select_sps .= "</option>\n";
                                                        }
                                                        $select_sps .= "</select>\n";
                                                        echo "{$select_sps}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="shortSpStrength" onchange="setWeight('shortSp')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="shortSpWeight">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 panel-group fh5co-accordion" id="tabSuport" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSuport" data-toggle="collapse" data-parent="#tabSuport" data-target="#collapseSuport" aria-expanded="false" aria-controls="collapseSuport">
                                <h4 class="panel-title"><i class="suport"></i><a class="accordion-toggle">支援<span class="_totalWeight">重量合計：<span id="suportWeight">0</span></span></a></h4>
                            </div>
                            <div id="collapseSuport" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSuport">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-7 tableHeadFont">武器名称</th>
                                                <th class="text-center col-md-2 tableHeadFont">強化</th>
                                                <th class="text-center col-md-3 tableHeadFont">重量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_main where army = 4 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_mains = "<select class=\"form-control input-sm\" id=\"suportMainName\" onchange=\"setWeight('suportMain')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_mains .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_mains .= "{$array[$indexA][0]}";
                                                            $select_mains .= "</option>\n";
                                                        }
                                                        $select_mains .= "</select>\n";
                                                        echo "{$select_mains}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="suportMainStrength" onchange="setWeight('suportMain')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="suportMainWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sub where army = 4 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_subs = "<select class=\"form-control input-sm\" id=\"suportSubName\" onchange=\"setWeight('suportSub')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_subs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_subs .= "{$array[$indexA][0]}";
                                                            $select_subs .= "</option>\n";
                                                        }
                                                        $select_subs .= "</select>\n";
                                                        echo "{$select_subs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="suportSubStrength" onchange="setWeight('suportSub')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="suportSubWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_aux where army = 4 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_auxs = "<select class=\"form-control input-sm\" id=\"suportSupName\" onchange=\"setWeight('suportSup')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_auxs .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_auxs .= "{$array[$indexA][0]}";
                                                            $select_auxs .= "</option>\n";
                                                        }
                                                        $select_auxs .= "</select>\n";
                                                        echo "{$select_auxs}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="suportSupStrength" onchange="setWeight('suportSup')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="suportSupWeight">0</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>
                                                    <?php
                                                        $query = 'select name, weight from wepon_sp where army = 4 order by id ;';
                                                        $reslt = $link->query($query);
                                                        $array = array();
                                                        
                                                        while($row = $reslt->fetch_row()){
                                                            array_push($array, [$row[0], $row[1]]);
                                                        }

                                                        $select_sps = "<select class=\"form-control input-sm\" id=\"suportSpName\" onchange=\"setWeight('suportSp')\">\n";
                                                        for ( $indexA = 0; $indexA < count( $array ); $indexA++ ) {
                                                            $select_sps .= "\t<option value=\"{$array[$indexA][1]}\">";
                                                            $select_sps .= "{$array[$indexA][0]}";
                                                            $select_sps .= "</option>\n";
                                                        }
                                                        $select_sps .= "</select>\n";
                                                        echo "{$select_sps}";
                                                    ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="suportSpStrength" onchange="setWeight('suportSp')">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </td>
                                                <td id="suportSpWeight">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CHIP -->
            <div class="row">
                <div class="col-md-6 animate-box fadeInUp animated">
                    <div class="panel-group fh5co-accordion" id="tabChip" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingChip" data-toggle="collapse" data-parent="#tabChip" data-target="#collapseChip" aria-expanded="false" aria-controls="collapseChip">
                                <h4 class="panel-title"><a class="accordion-toggle">チップ<span class="_totalWeight">上昇量合計：<span id="chipWeight">0</span></span></a></h4>
                            </div>
                            <div id="collapseChip" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingChip">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-9 tableHeadFont" colspan="3">チップ選択</th>
                                                <th class="text-center col-md-3 tableHeadFont">上昇量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center tableFont">
                                                <td>重量耐性</td>
                                                <td>
                                                    <select class="form-control input-sm" id="weight" onchange="setChipWeight()">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </td>
                                                <td>枚</td>
                                                <td>40</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>重量耐性Ⅱ</td>
                                                <td>
                                                    <select class="form-control input-sm" id="weight2" onchange="setChipWeight()">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </td>
                                                <td>枚</td>
                                                <td>60</td>
                                            </tr>
                                            <tr class="text-center tableFont">
                                                <td>脚部パーツ強化</td>
                                                <td>
                                                    <select class="form-control input-sm" id="legPartsUp" onchange="setChipWeight()">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </td>
                                                <td>枚</td>
                                                <td>20</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center col-md-9 tableHeadFont">ブランド適正チップ</th>
                                                <th class="text-center col-md-3 tableHeadFont">上昇量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tableFont">
                                                <td class="text-left">
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="cougar"><label for="cougar">クーガー</label>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="zebra"><label for="zebra"">ツェーブラ</label><br>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="enfocer"><label for="enfocer">エンフォーサー</label>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="discas"><label for="discas">ディスカス</label><br>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="kisei"><label for="kisei">輝星</label><br>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="heavyGurd"><label for="heavyGurd">ヘヴィガード</label>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="kefer"><label for="kefer">ケーファー</label><br>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="rosie"><label for="rosie">ロージー</label><br>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="shrike"><label for="shrike">シュライク</label>
                                                    <input type="checkbox" onchange="setAptude(); setChipWeight()" id="saber"><label for="saber">セイバー</label>
                                                </td>
                                                <td class="text-center" style="vertical-align: middle;" id="aptudeWeight">0</td>
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
                    <div class="panel-group fh5co-accordion" id="tabWeight" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingWeight" data-toggle="collapse" data-parent="#tabWeight" data-target="#collapseWeight" aria-expanded="false" aria-controls="collapseWeight">
                                <h4 class="panel-title"><a class="accordion-toggle">重量<span class="_totalWeight">脚部重量耐性：<span id="legLoading">0</span></span></a></h4>
                            </div>
                            <div id="collapseWeight" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingWeight">
                                <div class="panel-body">
                                    <div id="fh5co-tab-feature" class="fh5co-tab">
                                        <ul class="resp-tabs-list hor_1">
                                            <li><h4 class="panel-title"><i class="assault"></i>強襲</h4></li>
                                            <li><h4 class="panel-title"><i class="heavy""></i>重火力</h4></li>
                                            <li><h4 class="panel-title"><i class="assault"></i>遊撃</h4></li>
                                            <li><h4 class="panel-title"><i class="suport"></i>支援</h4></li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1">
                                            <div>
                                                <div id="assaultResltCaution" class="resltCaution">
                                                    <div class="cautionBorder"></div>
                                                    <div class="cautionMessage">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/cation_icon.png" class="_icon">
                                                        CAUTION！
                                                        <div id="resltCalc" class="resltMessage">
                                                            積載超過: <span id="assaultexcess">0</span><br>
                                                            移動系パラメータ低下: <span id="assaultDecline">0</span>
                                                        </div>
                                                    </div>
                                                    <div class="cautionBorder"></div>
                                                </div>
                                                <div id="assaultResltSuccess" class="resltSafety text-center">
                                                    <div class="message">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/check_on.png" class="_icon">
                                                        SAFETY
                                                    </div>
                                                    <div class="fh5co-spacer fh5co-spacer-xs"></div>
                                                </div>
                                                <hr>
                                                <div class="_weight-grace">
                                                    積載猶予： 
                                                    <span id="assaultTotalWeight">0</span>/<span id="assaultLegLoading">0</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div id="heavyResltCaution" class="resltCaution">
                                                    <div class="cautionBorder"></div>
                                                    <div class="cautionMessage">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/cation_icon.png" class="_icon">
                                                        CAUTION！
                                                        <div id="resltCalc" class="resltMessage">
                                                            積載超過: <span id="heavyexcess">0</span><br>
                                                            移動系パラメータ低下: <span id="heavyDecline">0</span>
                                                        </div>
                                                    </div>
                                                    <div class="cautionBorder"></div>
                                                </div>
                                                <div id="heavyResltSuccess" class="resltSafety text-center">
                                                    <div class="message">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/check_on.png" class="_icon">
                                                        SAFETY
                                                    </div>
                                                    <div class="fh5co-spacer fh5co-spacer-xs"></div>
                                                </div>
                                                <hr>
                                                <div class="_weight-grace">
                                                    積載猶予： 
                                                    <span id="heavyTotalWeight">0</span>/<span id="heavyLegLoading">0</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div id="shortResltCaution" class="resltCaution">
                                                    <div class="cautionBorder"></div>
                                                    <div class="cautionMessage">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/cation_icon.png" class="_icon">
                                                        CAUTION！
                                                        <div id="resltCalc" class="resltMessage">
                                                            積載超過: <span id="shortexcess">0</span><br>
                                                            移動系パラメータ低下: <span id="shortDecline">0</span>
                                                        </div>
                                                    </div>
                                                    <div class="cautionBorder"></div>
                                                </div>
                                                <div id="shortResltSuccess" class="resltSafety text-center">
                                                    <div class="message">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/check_on.png" class="_icon">
                                                        SAFETY
                                                    </div>
                                                    <div class="fh5co-spacer fh5co-spacer-xs"></div>
                                                </div>
                                                <hr>
                                                <div class="_weight-grace">
                                                    積載猶予： 
                                                    <span id="shortTotalWeight">0</span>/<span id="shortLegLoading">0</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div id="suportResltCaution" class="resltCaution">
                                                    <div class="cautionBorder"></div>
                                                    <div class="cautionMessage">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/cation_icon.png" class="_icon">
                                                        CAUTION！
                                                        <div id="resltCalc" class="resltMessage">
                                                            積載超過: <span id="suportexcess">0</span><br>
                                                            移動系パラメータ低下: <span id="suportDecline">0</span>
                                                        </div>
                                                    </div>
                                                    <div class="cautionBorder"></div>
                                                </div>
                                                <div id="suportResltSuccess" class="resltSafety text-center">
                                                    <div class="message">
                                                        <img src="https://s3-ap-northeast-1.amazonaws.com/gamewith-tool/assets/img/check_on.png" class="_icon">
                                                        SAFETY
                                                    </div>
                                                    <div class="fh5co-spacer fh5co-spacer-xs"></div>
                                                </div>
                                                <hr>
                                                <div class="_weight-grace">
                                                    積載猶予： 
                                                    <span id="suportTotalWeight">0</span>/<span id="suportLegLoading">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
