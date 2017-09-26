<!DOCTYPE HTML>
<html>
<head>
<title>PiLight</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="application-name" content="PiLight"/>
    <meta name="msapplication-square70x70logo" content="small.jpg"/>
    <meta name="msapplication-square150x150logo" content="medium.jpg"/>
    <meta name="msapplication-wide310x150logo" content="wide.jpg"/>
    <meta name="msapplication-square310x310logo" content="large.jpg"/>
    <meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/SuperDevResources&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/SuperDevResources&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/SuperDevResources&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/SuperDevResources&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/SuperDevResources&amp;id=5; cycle=1"/>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sliders.css">


</head>
<body class="container-fluid">
    <header>
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="header"><h1>PiLight <small>Automatic lights by Raspberry Pi</small></h1></div>
        </div>
    </header>
    <form id="form" method="post" action="php/lights.php">
        <section class="main-section">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 col-xs-offset-0 no-padding">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                    <div style="<?php if($user == "leone" && $master_turned_off === true) {echo("display: none"); }; ?>">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light master no-padding">
                            <section class="light-section">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                    <img src="img/master.png" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="name">Master</h3>
                                    <h4 class="description">Toggles all lights</h4>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="switch-div master-margin">
                                        <input type="submit" class="master-btn" value="On" name="master-on">
                                        <input type="submit" class="master-btn" value="Off" name="master-off">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light1 green no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/light1.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h3 class="name">Room lights 1</h3>
                                <h4 class="description">Example 1</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light1" id="light1" onchange="this.form.submit()">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light2 red no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp2.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 2</h3>
                              <h4 class="description">Example 2</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light2" id="light2" onchange="this.form.submit()">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light3 orange no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp3.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 3</h3>
                              <h4 class="description">Example 3</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light3" id="light3" onchange="this.form.submit()">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light4 yellow no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp4.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 4</h3>
                              <h4 class="description">Example 4</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light4" id="light4" onchange="this.form.submit()">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light5 green no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp5.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 5</h3>
                              <h4 class="description">Example 5</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light5" id="light5" onchange="this.form.submit()">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light6 red no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp6.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 6</h3>
                              <h4 class="description">Example 6</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light6" id="light6" onchange="this.form.submit()">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light7 orange no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp7.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 7</h3>
                              <h4 class="description">Example 7</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light7" id="light7" onchange="this.form.submit();">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 light light8 yellow no-padding">
                        <section class="light-section">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding icon">
                                <img src="img/lamp8.png" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <h3 class="name">Room lights 8</h3>
                              <h4 class="description">Example 8</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="switch-div">
                                    <label class="switch">
                                        <input type="checkbox" name="light8" id="light8" onchange="this.form.submit();">
                                        <div class="slider round"></div>
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </form>

<?php
    include 'php/master.php';
    include 'php/define.php';
?>
<script>
  light1 = <?php echo $light1 ?>;
	light2 = <?php echo $light2 ?>;
	light3 = <?php echo $light3 ?>;
	light4 = <?php echo $light4 ?>;
	light5 = <?php echo $light5 ?>;
	light6 = <?php echo $light6 ?>;
	light7 = <?php echo $light7 ?>;
	light8 = <?php echo $light8 ?>;

    $(function() {

	if(light1 === 1) {
	    $("#light1").prop("checked", false);
	    $light1 = 1;
	} else {
	    $("#light1").prop("checked", true);
	    $light1 = 0;
	}

	if(light2 === 1) {
	    $("#light2").prop("checked", false);
	    $light2 = 1;
	} else {
	    $("#light2").prop("checked", true);
	    $light2 = 0;
	}

	if(light3 === 1) {
	    $("#light3").prop("checked", false);
	    $light3 = 1;
	} else {
	    $("#light3").prop("checked", true);
	    $light3 = 0;
	}

	if(light4 === 1) {
	    $("#light4").prop("checked", false);
	    $light4 = 1;
	} else {
	    $("#light4").prop("checked", true);
	    $light4 = 0;
	}

	if(light5 === 1) {
	    $("#light5").prop("checked", false);
	    $light5 = 1;
	} else {
	    $("#light5").prop("checked", true);
	    $light5 = 0;
	}

	if(light6 === 1) {
	    $("#light6").prop("checked", false);
	    $light6 = 1;
	} else {
	    $("#light6").prop("checked", true);
	    $light6 = 0;
	}

	if(light7 === 1) {
	    $("#light7").prop("checked", false);
	    $light7 = 1;
	} else {
	    $("#light7").prop("checked", true);
	    $light7 = 0;
	}

	if(light8 === 1) {
	    $("#light8").prop("checked", false);
	    $light8 = 1;
	} else {
	    $("#light8").prop("checked", true);
	    $light8 = 0;
	}
	});
</script>
</body>
</html>
